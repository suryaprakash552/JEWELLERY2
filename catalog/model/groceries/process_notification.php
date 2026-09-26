<?php
// Background script to process notification queue
// This script is called via exec() to run in background

// Get queue_id from command line argument
$queue_id = isset($argv[1]) ? (int)$argv[1] : 0;

if (!$queue_id) {
    exit;
}

// Load database configuration from config.php FIRST (before defining constants)
// Determine config file path relative to this script
$configFile = dirname(dirname(dirname(dirname(__FILE__)))) . '/config.php';
if (is_file($configFile)) {
    require_once($configFile);
} else {
    error_log("Config file not found at: $configFile");
    exit;
}

// Define constants needed for OpenCart (absolute paths for standalone script)
// Use defined() checks to avoid conflicts with config.php
if (!defined('DIR_APPLICATION')) {
    define('DIR_APPLICATION', dirname(__FILE__) . '/');
}
if (!defined('DIR_SYSTEM')) {
    define('DIR_SYSTEM', dirname(dirname(dirname(DIR_APPLICATION))) . '/system/');
}
if (!defined('DIR_IMAGE')) {
    define('DIR_IMAGE', dirname(dirname(dirname(DIR_APPLICATION))) . '/image/');
}
if (!defined('DIR_STORAGE')) {
    define('DIR_STORAGE', dirname(dirname(dirname(DIR_APPLICATION))) . '/system/storage/');
}
if (!defined('DIR_LANGUAGE')) {
    define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
}
if (!defined('DIR_TEMPLATE')) {
    define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
}
if (!defined('DIR_CONFIG')) {
    define('DIR_CONFIG', DIR_SYSTEM . 'config/');
}
if (!defined('DIR_CACHE')) {
    define('DIR_CACHE', DIR_STORAGE . 'cache/');
}
if (!defined('DIR_DOWNLOAD')) {
    define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
}
if (!defined('DIR_LOGS')) {
    define('DIR_LOGS', DIR_STORAGE . 'logs/');
}
if (!defined('DIR_MODIFICATION')) {
    define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
}
if (!defined('DIR_UPLOAD')) {
    define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
}

// Database credentials must be defined in config.php
if (!defined('DB_HOSTNAME') || !defined('DB_USERNAME') || !defined('DB_PASSWORD') || !defined('DB_DATABASE')) {
    error_log("Database credentials not found in config.php");
    exit;
}

// Database connection
$mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($mysqli->connect_error) {
    error_log("Database connection failed: " . $mysqli->connect_error);
    exit;
}

// Get notification from queue
$result = $mysqli->query("
    SELECT * FROM xwzk_notification_queue
    WHERE id = $queue_id
    LIMIT 1
");

if (!$result || $result->num_rows == 0) {
    $mysqli->close();
    exit;
}

$notification = $result->fetch_assoc();

// Mark as processing
$mysqli->query("
    UPDATE xwzk_notification_queue
    SET status = 'processing'
    WHERE id = $queue_id
");

// Get all customers with valid FCM tokens
$customers = $mysqli->query("
    SELECT customer_id, login_token
    FROM xwzk_customer
    WHERE status = 1
    AND login_token IS NOT NULL
    AND login_token <> ''
");

$success_count = 0;
$failed_count = 0;

// Load Firebase
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php';

$factory = (new \Kreait\Firebase\Factory())
    ->withServiceAccount(DIR_STORAGE . 'firebase/service-account.json');

$messaging = $factory->createMessaging();

// Send to each customer
while ($customer = $customers->fetch_assoc()) {
    try {
        $data = [
            'type' => $notification['type']
        ];

        if ($notification['category_id'] !== null) {
            $data['category_id'] = (string)$notification['category_id'];
        }

        if ($notification['product_id'] !== null) {
            $data['product_id'] = (string)$notification['product_id'];
        }

        if (!empty($notification['image_url'])) {
            $data['image_url'] = (string)$notification['image_url'];
        }

        // Create notification with image
        $notificationObj = \Kreait\Firebase\Messaging\Notification::create(
            $notification['title'],
            $notification['body']
        );

        if (!empty($notification['image_url'])) {
            $notificationObj = $notificationObj->withImageUrl($notification['image_url']);
        }

        $message = \Kreait\Firebase\Messaging\CloudMessage::new()
            ->withToken($customer['login_token'])
            ->withNotification($notificationObj)
            ->withData($data);
        
        $messaging->send($message);
        $success_count++;
    } catch (\Kreait\Firebase\Exception\Messaging\NotFound $e) {
        // Invalid token, remove it
        $mysqli->query("
            UPDATE xwzk_customer
            SET login_token = NULL
            WHERE customer_id = '" . (int)$customer['customer_id'] . "'
        ");
        $failed_count++;
    } catch (\Exception $e) {
        $failed_count++;
    }
}

// Mark as completed
$mysqli->query("
    UPDATE xwzk_notification_queue
    SET status = 'completed',
        success_count = '$success_count',
        failed_count = '$failed_count',
        processed_at = NOW()
    WHERE id = $queue_id
");

$mysqli->close();
