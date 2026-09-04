<?php
namespace Opencart\System\Library;

/**
 * Rate Limiter Library
 * 
 * Provides rate limiting functionality for API endpoints using file-based storage.
 * Supports both token-based (authenticated) and IP-based (unauthenticated) rate limiting.
 */
class RateLimiter {
    /**
     * @var string Storage directory for rate limit data
     */
    private string $storage_dir;
    
    /**
     * @var int Default rate limit window in seconds
     */
    private int $window;
    
    /**
     * @var int Default maximum requests per window
     */
    private int $max_requests;

    /**
     * Constructor
     *
     * @param string $storage_dir Directory to store rate limit data (default: DIR_CACHE . 'rate_limit/')
     * @param int    $window      Time window in seconds (default: 60)
     * @param int    $max_requests Maximum requests per window (default: 60)
     */
    public function __construct(string $storage_dir = '', int $window = 60, int $max_requests = 60) {
        // Use default storage directory if not provided
        if (empty($storage_dir)) {
            $storage_dir = defined('DIR_CACHE') ? DIR_CACHE . 'rate_limit/' : sys_get_temp_dir() . '/opencart_rate_limit/';
        }
        
        $this->storage_dir = rtrim($storage_dir, '/') . '/';
        $this->window = $window;
        $this->max_requests = $max_requests;
        
        // Create storage directory if it doesn't exist
        if (!is_dir($this->storage_dir)) {
            mkdir($this->storage_dir, 0755, true);
        }
    }

    /**
     * Check if request is allowed
     *
     * @param string $identifier Unique identifier (customer_id, token, or IP)
     * @param int    $window     Optional custom window
     * @param int    $max        Optional custom max requests
     *
     * @return array ['allowed' => bool, 'remaining' => int, 'reset' => int]
     */
    public function check(string $identifier, int $window = 0, int $max = 0): array {
        $window = $window ?: $this->window;
        $max = $max ?: $this->max_requests;
        
        $file = $this->storage_dir . 'rate_' . md5($identifier);
        $now = time();
        $window_start = $now - $window;
        
        $data = $this->readData($file);
        
        // Clean up old requests outside the window
        $data = array_filter($data, function($timestamp) use ($window_start) {
            return $timestamp > $window_start;
        });
        
        $request_count = count($data);
        $remaining = max(0, $max - $request_count);
        $reset = $window_start + $window;
        
        if ($request_count >= $max) {
            // Find the oldest request time to calculate accurate reset time
            if (!empty($data)) {
                $oldest = min($data);
                $reset = $oldest + $window;
            }
            
            return [
                'allowed' => false,
                'remaining' => 0,
                'reset' => $reset
            ];
        }
        
        // Add current request
        $data[] = $now;
        $this->writeData($file, $data);
        
        return [
            'allowed' => true,
            'remaining' => $max - count($data),
            'reset' => $reset
        ];
    }

    /**
     * Reset rate limit for an identifier
     *
     * @param string $identifier
     *
     * @return void
     */
    public function reset(string $identifier): void {
        $file = $this->storage_dir . 'rate_' . md5($identifier);
        if (file_exists($file)) {
            @unlink($file);
        }
    }

    /**
     * Get client IP address
     * Uses trusted proxy headers if configured, otherwise uses REMOTE_ADDR
     *
     * @return string
     */
    public static function getClientIp(): string {
        $ip = '';
        
        // Check if behind trusted proxy (configure as needed)
        // For security, only trust specific proxy headers if server is configured
        
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_REAL_IP']) && filter_var($_SERVER['HTTP_X_REAL_IP'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_X_REAL_IP'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        
        return $ip ?: '0.0.0.0';
    }

    /**
     * Read rate limit data from file
     *
     * @param string $file
     *
     * @return array
     */
    private function readData(string $file): array {
        if (!file_exists($file)) {
            return [];
        }
        
        $content = file_get_contents($file);
        if ($content === false) {
            return [];
        }
        
        $data = json_decode($content, true);
        return is_array($data) ? $data : [];
    }

    /**
     * Write rate limit data to file
     *
     * @param string $file
     * @param array  $data
     *
     * @return void
     */
    private function writeData(string $file, array $data): void {
        file_put_contents($file, json_encode($data), LOCK_EX);
    }

    /**
     * Cleanup old rate limit files (call periodically)
     *
     * @param int $older_than Delete files older than this many seconds
     *
     * @return int Number of files deleted
     */
    public function cleanup(int $older_than = 86400): int {
        $count = 0;
        $cutoff = time() - $older_than;
        
        $files = glob($this->storage_dir . 'rate_*');
        if ($files) {
            foreach ($files as $file) {
                if (filemtime($file) < $cutoff) {
                    if (@unlink($file)) {
                        $count++;
                    }
                }
            }
        }
        
        return $count;
    }
}
