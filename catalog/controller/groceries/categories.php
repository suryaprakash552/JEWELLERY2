<?php
namespace Opencart\Catalog\Controller\Groceries;

// API Rate Limiting and Cache Configuration
define('API_RATE_LIMIT_INITIAL_DATA_MAX', 30); // Max requests per minute
define('API_RATE_LIMIT_INITIAL_DATA_WINDOW', 60); // Time window in seconds
define('API_RATE_LIMIT_CATEGORY_DATA_MAX', 60); // Max requests per minute
define('API_RATE_LIMIT_CATEGORY_DATA_WINDOW', 60); // Time window in seconds
define('API_CACHE_TTL_INITIAL_DATA', 300); // Cache TTL in seconds (5 minutes)
define('API_CACHE_TTL_CATEGORY_DATA', 180); // Cache TTL in seconds (3 minutes)

class Categories extends \Opencart\System\Engine\Controller {
    
    public function login(): void {

    $this->response->addHeader('Content-Type: application/json');

    $email    = trim($this->request->post['email'] ?? '');
    $password = trim($this->request->post['password'] ?? '');

    if (!$email || !$password) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Email and Password required"
        ]));

        return;
    }

    $this->load->model('groceries/categories');

    // CUSTOMER LOGIN
    $customer = $this->model_groceries_categories
        ->loginCustomer($email, $password);

    if ($customer) {

        $this->response->setOutput(json_encode([
            "status" => "success",
            "login_type" => "agent",
            "token"  => $customer['token'],
            "customer_id" => $customer['customer_id']
        ]));

        return;
    }

    // ADMIN LOGIN
    $admin = $this->model_groceries_categories
        ->loginAdmin($email, $password);

    if ($admin) {

        $this->response->setOutput(json_encode([
            "status" => "success",
            "login_type" => "admin",
            "token"  => $admin['token'],
            "user_id" => $admin['user_id']
        ]));

        return;
    }

    // INVALID
    $this->response->setOutput(json_encode([
        "status" => "error",
        "message" => "Invalid credentials"
    ]));
}
    
    public function send_otp(){

        $json=[];
        if(!$this->request->post){
        
        $input=json_decode(file_get_contents("php://input"),true);
        
        $this->request->post=$input;
        
        }
        $validate=$this->validate_send_otp($this->request->post);
        
        
        if($validate['success']=="1"){
        
        $json['telephone']=$this->request->post['telephone'];

        $json=$this->load->controller('ws/transactions/common.send_otp',$json);
        
        }else{
        
        $json=$validate;
        
        }

        $this->response->addHeader('Content-Type: application/json');
        
        $this->response->setOutput(json_encode($json));
        
        }

        
       public function verify_otp(): void {

        $this->response->addHeader('Content-Type: application/json');

        $json=[];

        if(!$this->request->post){

        $input=json_decode(file_get_contents("php://input"),true);

        $this->request->post=$input;

        }

        $validate =$this->validate_verify_otp($this->request->post);

        if($validate['success']=="0"){

        $this->response->setOutput(json_encode($validate));

        return;

        }

        $this->load->model('ws/transactions/common');

        $validate_record =$this->model_ws_transactions_common->VERIFY_CUSTOMER_OTP($this->request->post);

        if(!$validate_record['exstatus']){

        $this->response->setOutput(
        json_encode([

            "success"=>"0",
            "message"=>"Invalid OTP"

            ]));

        return;

        }

        $record_input =json_decode($validate_record['input'],true);

        // Get the identifier used (email or telephone)
        $identifier = isset($this->request->post['email']) ? $this->request->post['email'] : $this->request->post['telephone'];
        $record_identifier = isset($record_input['email']) ? $record_input['email'] : $record_input['telephone'];

        if($record_identifier != $identifier){

        $this->response->setOutput(
            json_encode([

            "success"=>"0",
            "message"=>"Wrong Input"

            ]));

        return;

        }

        $new_ref =$this->model_ws_transactions_common->RELEASE_OTP_ATTEMPTS($this->request->post);

        $this->load->model('groceries/categories');

        // Use email for login if email OTP, otherwise use telephone
        if (isset($this->request->post['email'])) {
            $telephone = isset($this->request->post['telephone']) ? $this->request->post['telephone'] : '';
            $customer = $this->model_groceries_categories->loginCustomerEmailOtp($this->request->post['email'], $telephone);
        } else {
            $customer = $this->model_groceries_categories->loginCustomerOtp($this->request->post['telephone']);
        }

        if(!$customer){

        $this->response->setOutput(
            json_encode([

            "success"=>"0",
            "message"=>"Customer not found"

            ]));

        return;

        }

        // Send login alert using the identifier (phone for telephone, email for email)
        $this->load->controller('groceries/categories.sendOwnerLoginAlert',[
            'phone' => isset($this->request->post['email']) ? $this->request->post['email'] : $this->request->post['telephone']
        ]);

        $json=[

            "success"=>"1",
            "otp_ref"=>$new_ref,
            "customer_id"=>$customer['customer_id'],
            "token"=>$customer['token'],
            "message"=>"OTP Verified Login Success"
        ];

        $this->response->setOutput(json_encode($json));
        }

    public function validate_send_otp($raw){
    
        if(!isset($raw['telephone'])||empty($raw['telephone'])||!is_numeric($raw['telephone'])){
        
            return [
            "success"=>"0",
            "message"=>"Invalid Telephone"
            ];
        
          }
        
            return [
            "success"=>"1",
            "message"=>"OK"
            ];
        
         }
        
        
        public function validate_verify_otp($raw){

        // Support both telephone and email as identifier
        $identifier = isset($raw['email']) ? $raw['email'] : (isset($raw['telephone']) ? $raw['telephone'] : '');

        if (empty($identifier)) {
            return [
            "success"=>"0",
            "message"=>"Telephone or Email is required"
            ];
        }

        // If telephone is provided, validate it's numeric
        if (isset($raw['telephone']) && !is_numeric($raw['telephone'])) {
            return [
            "success"=>"0",
            "message"=>"Invalid Telephone"
            ];
        }

        // If email is provided, validate it's a valid email
        if (isset($raw['email']) && !filter_var($raw['email'], FILTER_VALIDATE_EMAIL)) {
            return [
            "success"=>"0",
            "message"=>"Invalid Email"
            ];
        }


        if(!isset($raw['otp'])||!is_numeric($raw['otp'])){

            return [
            "success"=>"0",
            "message"=>"Invalid OTP"
            ];

        }

        if(!isset($raw['otp_ref'])||empty($raw['otp_ref'])){

            return [
            "success"=>"0",
            "message"=>"Invalid OTP Reference"
            ];

        }
        
            return [
            "success"=>"1",
            "message"=>"OK"
            ];
        
         }

    public function send_mail_otp(){

        $json=[];
        if(!$this->request->post){
        
        $input=json_decode(file_get_contents("php://input"),true);
        
        $this->request->post=$input;
        
        }
        $validate=$this->validate_send_mail_otp($this->request->post);
        
        
        if($validate['success']=="1"){

        $json['email']=$this->request->post['email'];
        $json['telephone']=$this->request->post['telephone'];

        $json=$this->load->controller('ws/transactions/common.send_mail_otp',$json);
        
        }else{
        
        $json=$validate;
        
        }

        $this->response->addHeader('Content-Type: application/json');
        
        $this->response->setOutput(json_encode($json));
        
    }

    public function verify_mail_otp(): void {

        $this->response->addHeader('Content-Type: application/json');

        $json=[];

        if(!$this->request->post){
        
        $input=json_decode(file_get_contents("php://input"),true);
        
        $this->request->post=$input;
        
        }

        $validate =$this->validate_verify_mail_otp($this->request->post);
        
        if($validate['success']=="0"){
        
        $this->response->setOutput(json_encode($validate));
        
        return;
        
        }

        $this->load->model('ws/transactions/common');
        
        $validate_record =$this->model_ws_transactions_common->VERIFY_CUSTOMER_OTP($this->request->post);
        
        if(!$validate_record['exstatus']){
        
        $this->response->setOutput(
        json_encode([
        
            "success"=>"0",
            "message"=>"Invalid OTP"
            
            ]));
        
        return;
        
        }

        $record_input =json_decode($validate_record['input'],true);

        // Get the identifier used (email or telephone)
        $identifier = isset($this->request->post['email']) ? $this->request->post['email'] : $this->request->post['telephone'];
        $record_identifier = isset($record_input['email']) ? $record_input['email'] : $record_input['telephone'];

        if($record_identifier != $identifier){

        $this->response->setOutput(
            json_encode([

            "success"=>"0",
            "message"=>"Wrong Input"

            ]));

        return;

        }

        $new_ref =$this->model_ws_transactions_common->RELEASE_OTP_ATTEMPTS($this->request->post);

        $this->load->model('groceries/categories');

        // Use email for login with telephone
        $telephone = isset($this->request->post['telephone']) ? $this->request->post['telephone'] : '';
        $customer = $this->model_groceries_categories->loginCustomerEmailOtp($this->request->post['email'], $telephone);

        if(!$customer){

        $this->response->setOutput(
            json_encode([

            "success"=>"0",
            "message"=>"Customer not found"

            ]));

        return;

        }

        $this->load->controller('groceries/categories.sendOwnerLoginAlert',['phone' => $customer['telephone']]);

        $json=[
        
            "success"=>"1",
            "otp_ref"=>$new_ref,
            "customer_id"=>$customer['customer_id'],
            "token"=>$customer['token'],
            "message"=>"OTP Verified Login Success"
        ];
        
        $this->response->setOutput(json_encode($json));
    }

    public function validate_send_mail_otp($raw){

        if(!isset($raw['email'])||empty($raw['email'])||!filter_var($raw['email'], FILTER_VALIDATE_EMAIL)){

            return [
            "success"=>"0",
            "message"=>"Invalid Email"
            ];

        }

        if(!isset($raw['telephone'])||empty($raw['telephone'])||!is_numeric($raw['telephone'])){

            return [
            "success"=>"0",
            "message"=>"Mobile number is required"
            ];

        }

            return [
            "success"=>"1",
            "message"=>"OK"
            ];

         }
        
        
        public function validate_verify_mail_otp($raw){

        if(!isset($raw['email'])||empty($raw['email'])||!filter_var($raw['email'], FILTER_VALIDATE_EMAIL)){

            return [
            "success"=>"0",
            "message"=>"Invalid Email"
            ];

        }

        if(!isset($raw['telephone'])||empty($raw['telephone'])||!is_numeric($raw['telephone'])){

            return [
            "success"=>"0",
            "message"=>"Mobile number is required"
            ];

        }


        if(!isset($raw['otp'])||!is_numeric($raw['otp'])){

            return [
            "success"=>"0",
            "message"=>"Invalid OTP"
            ];

        }
        

        if(empty($raw['otp_ref'])){

            return [
            "success"=>"0",
            "message"=>"OTP Ref Missing"
            ];

        }

            return [
            "success"=>"1",
            "message"=>"OK"
            ];

         }



    private function validateToken() {

    $token = $this->request->get['token'] ?? '';

    if (!$token) {
        return false;
    }

    $this->load->model('groceries/categories');

    $customer_id = $this->model_groceries_categories->validateToken($token);

    return $customer_id;
    }
    
    public function logout(): void {

    $this->response->addHeader('Content-Type: application/json');

    $token = $this->request->get['token'] ?? '';

    if (!$token) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Token missing"
        ]));
        return;
    }

    $this->load->model('groceries/categories');

    $logout = $this->model_groceries_categories->logoutCustomer($token);

    if ($logout) {
        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Logged out successfully"
        ]));
    } else {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid token"
        ]));
    }
}

public function saveLoginToken(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if(!$user || $user['type'] != 'customer'){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
        ]));

        return;
    }

    $login_token = $this->request->post['login_token'] ?? '';

    if(empty($login_token)){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Login Token Missing"
        ]));

        return;
    }

    $this->load->model('groceries/categories');

    $this->model_groceries_categories->saveLoginToken(
        $user['id'],
        $login_token
    );

    $this->response->setOutput(json_encode([
        "status"=>"success"
    ]));

}

public function saveAdminFcmToken(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user || $user['type'] != 'admin') {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    $fcm_token = $this->request->post['fcm_token'] ?? '';

    if (empty($fcm_token)) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "FCM Token Missing"
        ]));

        return;
    }

    $this->load->model('groceries/categories');

    $this->model_groceries_categories->saveAdminFcmToken(
        $user['id'],
        $fcm_token
    );

    $this->response->setOutput(json_encode([
        "status" => "success",
        "message" => "FCM Token Saved"
    ]));
}
   public function sendWhatsAppOtp($data = [])
{
    file_put_contents(DIR_LOGS . 'whatsapp.log', "FUNCTION CALLED\n", FILE_APPEND);

    $phone = "91" . preg_replace('/\D/', '', $data['phone']);
    $otp   = (string)$data['otp'];

    $payload = [
        "to" => $phone,
        "accountId" => "6a60576358931dfb6a752df1",
        "templateName" => "auth_login_verification",
        "languageCode" => "en_US",
        "components" => [
            [
                "type" => "body",
                "parameters" => [
                    [
                        "type" => "text",
                        "text" => $otp
                    ]
                ]
            ],
            [
                "type" => "button",
                "sub_type" => "url",
                "index" => "0",
                "parameters" => [
                    [
                        "type" => "text",
                        "text" => $otp
                    ]
                ]
            ]
        ]
    ];

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api-nexmsg.myteknoland.com/api/send/template",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
        ]
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        $response = curl_error($ch);
    }

    file_put_contents(
        DIR_LOGS . 'whatsapp.log',
        "REQUEST:\n" . json_encode($payload, JSON_PRETTY_PRINT) .
        "\nHTTP CODE: " . $httpCode .
        "\nRESPONSE:\n" . $response . "\n\n",
        FILE_APPEND
    );

    curl_close($ch);

    return $response;
}

public function sendOwnerLoginAlert($data = [])
{
    $phone = preg_replace('/\D/', '', $data['phone']);
    $payload = [
        "to" => "919701657580",
        "accountId" => "6a60576358931dfb6a752df1",
        "templateName" => "account_activity_alert",
        "languageCode" => "en",
        "components" => [
            [
                "type" => "body",
                "parameters" => [
                    [
                        "type" => "text",
                        "text" => "SB"
                    ],
                    [
                        "type" => "text",
                        "text" => $phone
                    ],
                    [
                        "type" => "text",
                        "text" => date('d/m/Y').' '.date('h:i A')
                    ]
                ]
            ]
        ]
    ];

   $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api-nexmsg.myteknoland.com/api/send/template",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
        ]
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        $response = curl_error($ch);
    }

    file_put_contents(
        DIR_LOGS . 'whatsapp.log',
        "REQUEST:\n" . json_encode($payload, JSON_PRETTY_PRINT) .
        "\nHTTP CODE: " . $httpCode .
        "\nRESPONSE:\n" . $response . "\n\n",
        FILE_APPEND
    );

    curl_close($ch);

    return $response;
}

public function sendEmailOtp($data = [])
{
    $email = $data['email'];
    $otp = (string)$data['otp'];

    // Get store email if available for sender information
    $store_email = '';

    // Try to get store from customer first
    $customer_id = $this->customer->getId();
    if ($customer_id) {
        $this->load->model('groceries/categories');
        $customer_query = $this->db->query("SELECT store_id FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");
        if ($customer_query->num_rows && $customer_query->row['store_id']) {
            $store_info = $this->model_groceries_categories->getStore($customer_query->row['store_id']);
            if ($store_info && !empty($store_info['store_email'])) {
                $store_email = $store_info['store_email'];
            }
        }
    }

    // Add email to queue instead of sending directly
    $this->load->model('setting/email_queue');

    $email_data = [
        'to_email' => $email,
        'subject' => 'Your Login OTP',
        'html' => 'Your OTP is: ' . $otp . '<br><br>This OTP will expire in a few minutes. Do not share it with anyone.',
        'text' => 'Your OTP is: ' . $otp . '. This OTP will expire in a few minutes. Do not share it with anyone.',
        'store_email' => $store_email
    ];

    try {
        $email_queue_id = $this->model_setting_email_queue->addEmail($email_data);
        if ($email_queue_id > 0) {
            return true;
        } else {
            return false;
        }
    } catch (\Exception $e) {
        return false;
    }
}

private function sendOrderWhatsApp($order_id, $phone)
{
    $this->load->model("checkout/order");

    $order = $this->model_checkout_order->getOrder($order_id);

    if (!$order) {
        return false;
    }

    $products = $order['products'] ?? [];

    $customer_name = trim(($order['firstname'] ?? '') . ' ' . ($order['lastname'] ?? ''));
    $invoice_no    = (string)$order_id;
    $amount        = number_format((float)$order['total'], 2, '.', '');
    $date          = date('d/m/Y', strtotime($order['date_added']));
    $items_count   = (string)max(1, count($products));

    $payload = [
        "to" => "91" . preg_replace('/\D/', '', $phone),
        "accountId" => "6a60576358931dfb6a752df1",
        "templateName" => "order_confirmation",
        "languageCode" => "en",
        "components" => [
            [
                "type" => "body",
                "parameters" => [
                    ["type" => "text", "text" => $customer_name],
                    ["type" => "text", "text" => "Smile Basket"],
                    ["type" => "text", "text" => $invoice_no],
                    ["type" => "text", "text" => $amount],
                    ["type" => "text", "text" => $date],
                    ["type" => "text", "text" => $items_count]
                ]
            ],
            [
                "type" => "button",
                "sub_type" => "url",
                "index" => "0",
                "parameters" => [
                    [
                        "type" => "text",
                        "text" => $invoice_no
                    ]
                ]
            ]
        ]
    ];

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api-nexmsg.myteknoland.com/api/send/template",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
        ]
    ]);

    $response = curl_exec($ch);

    curl_close($ch);

    return $response;
}

public function Order_sendwhatsapp(): void
    {
         $order_id = (int)($this->request->get['order_id'] ?? 0);
    $quote_id = (int)($this->request->get['quote_id'] ?? 0);
    $phone    = trim($this->request->get['phone'] ?? '');

    if ((!$order_id && !$quote_id) || !$phone) {
        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "order_id or quote_id and phone required",
        ]));
        return;
    }

    $this->load->model("checkout/order");

    // -----------------------------
    // LOAD DATA BASED ON TYPE
    // -----------------------------
    if ($quote_id > 0) {
        // QUOTATION
        $order = $this->model_checkout_order->getQuoteOrderdetails($quote_id);
        if (!$order) {
            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Quotation not found",
            ]));
            return;
        }

        $products = $this->model_checkout_order->getQuoteProducts($quote_id);

        $invoice_no = 'Q-' . $quote_id;
        $download_link = HTTP_SERVER
            . 'index.php?route=extension/purpletree_pos/pos/home|quoteInvoice'
            . '&quote_id=' . $quote_id;

    } else {
        // ORDER
        $order = $this->model_checkout_order->getOrder($order_id);
        if (!$order) {
            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Order not found",
            ]));
            return;
        }

        $products = $order['products'] ?? [];

        $invoice_no = (string)$order_id;
        $download_link = HTTP_SERVER
            . 'index.php?route=extension/purpletree_pos/pos/home|publicInvoice'
            . '&order_id=' . $order_id;
        $download_invoice = 
            'JEWELLERY2/index.php?route=extension/purpletree_pos/pos/home|publicInvoice'
            . '&order_id=' . $order_id;
    }
        $link = 'https://myteknoland.com/';
    // -----------------------------
    // COMMON TEMPLATE VALUES
    // -----------------------------
    $customer_name = trim(($order['firstname'] ?? '') . ' ' . ($order['lastname'] ?? ''));
    $store_name    = 'Saleem Gold Covering - Wholesale';

    $items_count = (string) max(1, count($products));
    $amount      = number_format((float)($order['total'] ?? 0), 2, '.', '');
    $date        = substr((string)($order['date_added'] ?? date('Y-m-d')), 0, 10);
   
        $templateId = $order_id;

        $payload = [
            "to" => $phone,
            "accountId" => "6a60576358931dfb6a752df1",
            "templateName" => "order_confirmation",
            "languageCode" => "en",
            "components" => [
                [
                    "type" => "body",
                    "parameters" => [
                        [
                            "type" => "text",
                            "text" => $customer_name
                        ],
                        [
                            "type" => "text",
                            "text" => "Smile Basket"
                        ],
                        [
                            "type" => "text",
                            "text" => $invoice_no
                        ],
                        [
                            "type" => "text",
                            "text" => $amount
                        ],
                        [
                            "type" => "text",
                            "text" => date('d/m/Y', strtotime($date))
                        ],
                        [
                            "type" => "text",
                            "text" => (string)$items_count
                        ]
                    ]
                ],
                [
                    "type" => "button",
                    "sub_type" => "url",
                    "index" => "0",
                    "parameters" => [
                        [
                            "type" => "text",
                            "text" => (string)$templateId
                        ]
                    ]
                ]
            ]
        ];

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => "https://api-nexmsg.myteknoland.com/api/send/template",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            $response = curl_error($ch);
        }

        curl_close($ch);

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode([
            "status" => $httpCode,
            "response" => json_decode($response, true) ?: $response
        ]));
        
    }

    public function cancelOrderWhatsApp($internal = false): void
{
    $order_id = (int)($this->request->get['order_id'] ?? 0);
    $reason   = trim($this->request->get['reason'] ?? 'Order Cancelled');

    if (!$order_id) {
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "order_id is required"
        ]));
        return;
    }

    $this->load->model('checkout/order');

    $order = $this->model_checkout_order->getOrder($order_id);

    if (!$order) {
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Order not found"
        ]));
        return;
    }

    $phone = "91" . preg_replace('/\D/', '', $order['telephone']);

    $customer_name = trim(($order['firstname'] ?? '') . ' ' . ($order['lastname'] ?? ''));
    $store_name    = "Smile Basket";
    $amount        = number_format((float)$order['total'], 2, '.', '');
    $date          = date('d/m/Y', strtotime($order['date_added']));

    $payload = [
        "to" => $phone,
        "accountId" => "6a60576358931dfb6a752df1",
        "templateName" => "order_cancellation",
        "languageCode" => "en_US",
        "components" => [
            [
                "type" => "body",
                "parameters" => [
                    [
                        "type" => "text",
                        "text" => $customer_name
                    ],
                    [
                        "type" => "text",
                        "text" => $store_name
                    ],
                    [
                        "type" => "text",
                        "text" => (string)$order_id
                    ],
                    [
                        "type" => "text",
                        "text" => $date
                    ],
                    [
                        "type" => "text",
                        "text" => $amount
                    ],
                    [
                        "type" => "text",
                        "text" => $reason
                    ]
                ]
            ]
        ]
    ];

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api-nexmsg.myteknoland.com/api/send/template",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
        ],
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    file_put_contents(
    DIR_LOGS . 'cancel_whatsapp.log',
    "HTTP: " . $httpCode . "\n" .
    "REQUEST:\n" . json_encode($payload, JSON_PRETTY_PRINT) . "\n" .
    "RESPONSE:\n" . $response . "\n\n",
    FILE_APPEND
);

    if (curl_errno($ch)) {
        $response = curl_error($ch);
    }

    curl_close($ch);

   if (!$internal) {
    $this->response->addHeader('Content-Type: application/json');
    $this->response->setOutput(json_encode([
        "status"   => $httpCode,
        "response" => json_decode($response, true) ?: $response
    ]));
   }
}

    public function getInitialData(): void {

    $this->response->addHeader('Content-Type: application/json');

    // Rate limiting check
    $customer_auth = $this->validateToken();
    if (!$customer_auth) {
    $this->response->setOutput(json_encode([
    "status"=>"error",
    "message"=>"Invalid Token"
    ]));
    return;
    }

    // Load rate limiter
    $this->load->library('rate_limiter');

    // Rate limit: configured requests per minute per customer
    $rate_result = $this->library_rate_limiter->check(
        'initial_data_' . $customer_auth['id'],
        API_RATE_LIMIT_INITIAL_DATA_WINDOW,
        API_RATE_LIMIT_INITIAL_DATA_MAX
    );
    
    if (!$rate_result['allowed']) {
        $this->response->addHeader('HTTP/1.1 429 Too Many Requests');
        $this->response->addHeader('Retry-After: ' . ($rate_result['reset'] - time()));
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Too many requests. Please try again later."
        ]));
        return;
    }

    // Cache check
    $language_id = (int)$this->config->get('config_language_id');
    $cache_key = 'api.initial_data.' . $language_id;

    $cached_data = $this->cache->get($cache_key);
    if (!empty($cached_data)) {
        $this->response->setOutput(json_encode($cached_data));
        return;
    }
    
    $this->load->model('groceries/categories');
    
    
    // 1 RANDOM PRODUCTS
    
    $random_products=$this->model_groceries_categories->getRandomProducts();
    
    $combo_products=$this->model_groceries_categories->getComboProducts();
    $main_categories =$this->model_groceries_categories->getMainCategories();

    

    $offer_categories=$this->model_groceries_categories->getOfferCategories();

    $offers=[];
    
    foreach($offer_categories as $offer){
    
    $products=$this->model_groceries_categories->getOfferProducts($offer['category_id'],0,6);
    
    $offers[]=[
    
    "category_id"=>$offer['category_id'],
    "name"=>$offer['name'],
    "products"=>$products
    
    ];
    
    }
    
    $response_data = [
                "status"=>"success",
                
                "random_products"=>$random_products,
                "combo_products"=>$combo_products,
                
                "categories"=>$main_categories,
                
                "offers"=>$offers
                
                ];
    
    // Cache for configured TTL
    $this->cache->set($cache_key, $response_data, API_CACHE_TTL_INITIAL_DATA);
    
    $this->response->setOutput(json_encode($response_data));
    
    }
    
    public function getOfferMoreProducts(){

        if(!$this->validateToken()){
        
        echo json_encode([
         "status"=>"error"
        ]);
        
        return;
        
        }
        
        $category_id=(int)$this->request->get['category_id'];

        $this->load->model('groceries/categories');
        
        $products=$this->model_groceries_categories->getOfferProducts($category_id,$start,$limit);
        
        echo json_encode([
        
        "status"=>"success",
        "products"=>$products
        
        ]);
        
        }



   public function getCategoryData(): void {

    $this->response->addHeader('Content-Type: application/json');

    // Rate limiting check
    $customer_auth = $this->validateToken();
    if(!$customer_auth){
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
            ]));
            return;
            }

    // Load rate limiter
    $this->load->library('rate_limiter');

    // Rate limit: configured requests per minute per customer
    $rate_result = $this->library_rate_limiter->check(
        'category_data_' . $customer_auth['id'],
        API_RATE_LIMIT_CATEGORY_DATA_WINDOW,
        API_RATE_LIMIT_CATEGORY_DATA_MAX
    );

    if (!$rate_result['allowed']) {
        $this->response->addHeader('HTTP/1.1 429 Too Many Requests');
        $this->response->addHeader('Retry-After: ' . ($rate_result['reset'] - time()));
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Too many requests. Please try again later."
        ]));
        return;
    }

    $category_id = (int)($this->request->post['category_id'] ?? $this->request->get['category_id'] ?? 0);

    // Cache check
    $language_id = (int)$this->config->get('config_language_id');
    $cache_key = 'api.category_data.' . $category_id . '.' . $language_id;

    $cached_data = $this->cache->get($cache_key);
    if (!empty($cached_data)) {
        $this->response->setOutput(json_encode($cached_data));
        return;
    }

    $this->load->model('groceries/categories');

    $category_products=$this->model_groceries_categories->getProductsOnly($category_id);

    $subcategories=$this->model_groceries_categories->getSubCategories($category_id);
    foreach($subcategories as &$subcategory){

    $subcategory['products']=$this->model_groceries_categories->getProductsOnly($subcategory['category_id']);

    }

    $response_data = [
        "status"=>"success",
        "products"=>$category_products,
        "subcategories"=>$subcategories
        ];

    // Cache for configured TTL
    $this->cache->set($cache_key, $response_data, API_CACHE_TTL_CATEGORY_DATA);

    $this->response->setOutput(json_encode($response_data));

}

public function getProductDetails(){

    $this->response->addHeader('Content-Type: application/json');

    if(!$this->validateToken()){
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
        ]));
        return;
    }

    $product_id = (int)$this->request->get['product_id'];

    $this->load->model('groceries/categories');

    // main product
    $product = $this->model_groceries_categories->getProductDetails($product_id);

    // related products
    $related_products = $this->model_groceries_categories->getRelatedProducts($product_id);

    $this->response->setOutput(json_encode([
        "status"=>"success",
        "product"=>$product,
        "related_products"=>$related_products
    ]));
}

public function getBannerProducts(): void {

    $this->response->addHeader('Content-Type: application/json');
    
    if(!$this->validateToken()){
        $this->response->setOutput(json_encode([
    
            "status"=>"error",
            "message"=>"Invalid Token"
            
            ]));
            
            return;
            
            }
    
    $category_id = (int)($this->request->post['category_id'] ?? $this->request->get['category_id'] ?? 0);
    
    $this->load->model('groceries/categories');

    $category_products=$this->model_groceries_categories->getBannerProducts($category_id);

    $subcategories=$this->model_groceries_categories->getSubCategories($category_id);
    foreach($subcategories as &$subcategory){
    
    $subcategory['products']=$this->model_groceries_categories->getBannerProducts($subcategory['category_id']);
    
    }

    $this->response->setOutput(
    
        json_encode([
        
        "status"=>"success",
        "products"=>$category_products,
        "subcategories"=>$subcategories
        ])
    
    );

}

public function addOrder(): void {

    $this->response->addHeader('Content-Type: application/json');
    
    $customer_id = $this->validateToken();
    
    if(!$customer_id){
    
    $this->response->setOutput(json_encode([
            
            "status"=>"error",
            "message"=>"Invalid Token"
            
        ]));
        
        return;
    
    }
    
    try{
        
        $post = $this->request->post;
        
        $raw = file_get_contents("php://input");
        
        if($raw){
        
        $json = json_decode($raw,true);
        
        if(json_last_error()===JSON_ERROR_NONE){
        
        $post=array_merge($post,$json);
        
        }
    
    }
    
    $orderDetails = $post['orderDetails'] ?? $post;
    
    $cart_products = $orderDetails['CartProducts'] ?? [];
    
    $invoiceInfo = $orderDetails['InvoiceInfo'] ?? [];
    
    $tracking = $orderDetails['tracking'] ?? ($post['tracking'] ?? '');
    
    if(empty($cart_products)){
    
        throw new \Exception("Cart Empty");
    
    }

    $name = trim($orderDetails['CustomerName'] ?? 'Guest');
    
    $parts = explode(' ',$name,2);
    
    $firstname = $parts[0] ?? 'Guest';
    
    $lastname = $parts[1] ?? '';
    
    $order_data=[
        
        'invoice_prefix'=>'DBM-',
        
        'invoice_no'=>time(),
        
        'customer_id'=>$customer_id,
        
        'customer_group_id'=>$customer_id,
        
        'sellerId'=>0,
        
        'quote_id'=>0,
        
        'pre_order_id'=>0,
        
        'firstname'=>$firstname,
        
        'lastname'=>$lastname,
        
        'email'=>$orderDetails['Email'] ?? '',
        
        'telephone'=>$orderDetails['Mobile'] ?? '',
        
        'custom_field'=>[],
        
        'payment_method'=>[
        
        'name'=>$orderDetails['PaymentThrough'] ?? '',
        
        'code'=>strtolower($orderDetails['PaymentThrough'] ?? '')
    
    ],
    
        'comment'=>$orderDetails['Note'] ?? '',
        
        'total'=>(float)($invoiceInfo['TotalBeforeRoundoff'] ?? 0),
        
        'products'=>[]
    
    ];

    foreach($cart_products as $p){
    
    $order_data['products'][]=[
    
                    "product_id" => (int) ($p["product_id"] ?? 0),
                    "name" => $p["name"] ?? "",
                    "model" => "",
                    "option" => [],
                    "piece_id" => (int)($p["piece_id"] ?? 0),
                    "is_combo" => $p["is_combo"] ?? "No",
                    "min_quantity" => (int)($p["min_quantity"] ?? 0),
                    "selected_quantity" => (int)($p["selected_quantity"] ?? 0),
                    "quantity" => (int) ($p["quantity"] ?? 1),
                    "price" => (float) ($p["price"] ?? 0),
                    "total" => (float) ($p["total"] ?? 0),
                    "gst" => (float) ($p["gst_percent"] ?? 0),
                    "tax" => (float) ($p["row_gst"] ?? 0),
                    "excluded"   => !empty($p["excluded"]) ? 1 : 0
    
    ];
    
    }
    
    $invoice_extra=[
    
        'customer_group_id'=>$customer_id,
        
        'cash_amount'=>(float)($orderDetails['CashAmount'] ?? 0),
        
        'upi_amount'=>(float)($orderDetails['UPIAmount'] ?? 0),

        'takeaway_amount'=>(float)($orderDetails['TakeawayAmount'] ?? 0),
        
        'coupon'=>$orderDetails['coupon'] ?? '',
        
        'credit_points'=>0,
        
        'creditpointsused'=>0,
        
        'discount'=>(float)($invoiceInfo['DiscountIncluded'] ?? 0),
        
        'number_of_items'=>(int)($invoiceInfo['NumberOfItems'] ?? 0),
        
        'quantity_of_items'=>(int)($invoiceInfo['QuantityTotal'] ?? 0),
        
        'sub_total'=>(float)($invoiceInfo['SUBTotal'] ?? 0),
        
        'total_tax'=>(float)($invoiceInfo['TotalTax'] ?? 0),
        
        'roundoff_amount'=>(float)($invoiceInfo['RoundOffAmount'] ?? 0),
        
        'amount_through'=>$orderDetails['PaymentThrough'] ?? '',
        
        'pending_amount'=>0,
        
        'returnable_balance'=>0,
        
        'total_received'=>(float)($invoiceInfo['TotalBeforeRoundoff'] ?? 0),
        
        'balance'=>0,
        
        'save_advance'=>false
    
    ];
    $this->load->model('checkout/order');
    
    $order_id=$this->model_checkout_order->addOrder($order_data,$invoice_extra,$tracking);
    
    if(!$order_id){

        throw new \Exception("Order Failed");

    }

    $this->load->model('groceries/categories');
    $this->model_groceries_categories->insertOrderTrackingUpTo5($order_id);

    $this->model_checkout_order->addHistory(
    
        $order_id,
        
        5,
        
        "Mobile App Order",
        
        false,
        
        true
    
    );

    try {
        $this->sendOrderWhatsApp(
            $order_id,
            $orderDetails['Mobile']
        );
    } catch (\Throwable $e) {
        $this->log->write("WhatsApp Error: " . $e->getMessage());
    }

    $this->response->setOutput(json_encode([
    
        "status"=>"success",
        
        "order_id"=>$order_id
    
    ]));
    
    }catch(\Throwable $e){
    
    $this->response->setOutput(json_encode([
    
    "status"=>"error",
    
    "message"=>$e->getMessage()
    
    ]));
    
    }

}

public function getDeliveryFee(): void {

    $this->response->addHeader('Content-Type: application/json');

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if ($raw) {
            $json = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $amount = (float)($post['amount'] ?? 0);

        $delivery_fee = ($amount >= 1000) ? 0 : 50;

        $this->response->setOutput(json_encode([
            "status" => "success",
            "amount" => $amount,
            "delivery_fee" => $delivery_fee,
            "final_total" => $amount + $delivery_fee
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

    protected function validateImg($imageString)
        {
            //error_reporting(0);
            $img=imagecreatefromstring(base64_decode($imageString));
            if(!$img || !isset($img) || empty($img))
            {
                return array("success"=>0,"message"=>"error_data");
            }
            
            imagepng($img,'tmp.png');
            $size = getimagesize('tmp.png');
            unlink('tmp.png');
            $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg','image/JPEG', 'image/PNG', 'image/GIF', 'image/JPG'];
            
            $file_size = strlen(base64_decode($imageString));

            if (!empty($size['mime'])&&$file_size < ($this->config->get('config_file_max_size') * 1024 * 1024))
            {
                if (in_array($size['mime'], $allowed)) 
                {
                    return array("success"=>1,"message"=>"accepted");
                }else
                    {
                        return array("success"=>0,"message"=>"error_extension");
                    }
            }else
                {
                    return array("success"=>0,"message"=>"error_size");
                }
        }
        
        private function saveBase64Image(string $imageString): string {

                    
                    $validate = $this->validateImg($imageString);

            if(!$validate['success']){
            
            throw new \Exception('Invalid Image');
            
            }

            
            $dir = DIR_IMAGE . 'catalog/products/';
            
            if(!is_dir($dir)){
            
            mkdir($dir,0777,true);
            
            }
            
            
            // ---------- UNIQUE FILE NAME ----------
            
            $file = 'product_'.date('YmdHis').'_'.mt_rand(1000,9999).'.jpg';
            
            $filepath = $dir.$file;
            
         
            $image = imagecreatefromstring(base64_decode($imageString));
            
            if(!$image){
            
            throw new \Exception('Image Decode Failed');
            
            }
            
        
            imagejpeg($image,$filepath,90);
            
            imagedestroy($image);

            return 'catalog/products/'.$file;
            
            }

            public function getMostBoughtProducts(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user || $user['type'] != 'customer') {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    $customer_id = $user['id'];

    $this->load->model('groceries/categories');

    $products = $this->model_groceries_categories->getMostBoughtProducts($customer_id);

    $this->response->setOutput(json_encode([
        "status" => "success",
        "data" => $products
    ]));
}
    public function addProduct(): void {
            
            $this->response->addHeader('Content-Type: application/json');
            
            $customer_id = $this->validateToken();
            
            if(!$customer_id){
            
            $this->response->setOutput(json_encode([
            
                    "status"=>"error",
                    "message"=>"Invalid Token"
                    
                    ]));
                    
                    return;
            
            }
            
            try{
                
                $post = $this->request->post;
                
                $raw = file_get_contents("php://input");
                
                if($raw){
                
                $json = json_decode($raw,true);
                
                if(json_last_error() === JSON_ERROR_NONE){
                
                $post = array_merge($post,$json);
                
                }
                
            }
            
            
            $this->load->model('product/addproducts');
            
            $this->load->model('groceries/categories');
            
            if(!empty($post['image_base64'])){
            
            $post['image'] = $this->saveBase64Image(
            
            $post['image_base64']
            
            );
            
            unset($post['image_base64']);
            
            }
            $post['extra_images'] = $post['extra_images'] ?? [];

            foreach ($post['extra_images'] as $k => $image) {

                if (!empty($image['image_base64'])) {

                    $post['extra_images'][$k]['image'] =
                        $this->saveBase64Image($image['image_base64']);

                    unset($post['extra_images'][$k]['image_base64']);
                }
            }
            
        
            
            $post += [
            
            'product_id'=>0,
            
            'product_description'=>[],
            
            'product_category'=>[],
            
            'sku'=>'',
            
            'upc'=>'',
            
            'box_id'=>'',
            
            'rack_code'=>'RACK-00',
            
            'category_id'=>0,
            'recieved_price'=>0,
            
            'price'=>0,
            
            'special_price'=>0,
            
            'additional_price'=>0,
            
            'wholesale_price'=>0,
            
            'quantity'=>1,
            
            'minimum'=>1,
            
            'subtract'=>1,
            
            'status'=>1,
            
            'max_quantity'=>1,
            
            'r_tag'=>'R888',
            
            'w_tag'=>'W999',
            
            'image'=>'',

            'is_veg'=>(int)($post['is_veg'] ?? 1),
            
            'featured' => (int)($post['featured'] ?? 0),
            
            'pieces' => $post['pieces'] ?? [],

            'is_combo' => $post['is_combo'] ?? 'No',

            'min_quantity' => $post['min_quantity'] ?? 1,

            'pos_quantity' => $post['pos_quantity'] ?? 0,

            'piece_default' => (int)($post['piece_default'] ?? 0),
            
            'pos_status'=>1,
            
            'pos_quentity'=>0
            
            ];

           if (!empty($post['pieces'])) {
            foreach ($post['pieces'] as $k => $piece) {
                if (!empty($piece['image_base64'])) {

                    $post['pieces'][$k]['image'] =
                        $this->saveBase64Image($piece['image_base64']);

                    unset($post['pieces'][$k]['image_base64']);

                } elseif (!empty($piece['image'])) {

                    $post['pieces'][$k]['image'] = $piece['image'];

                } else {

                    $post['pieces'][$k]['image'] = '';

                }
            }
        }
            
            
            $base = (float)$post['price'];
            
            $add = (float)$post['additional_price'];
            
            $post['price'] = $base + ($base * ($add/100));
            
            
            foreach($post['product_description'] as $lang=>$value){
            
            if(empty($value['name'])){
            
            throw new \Exception("Product name required");
            
            }
            
            }
            
            
            $product_id = (int)$post['product_id'];
            
            if($product_id > 0){
            
            $existing = $this->model_product_addproducts->getProduct($product_id);
            
            if(!$existing){
            
            throw new \Exception("Invalid Product ID");
            
            }
            
            $this->model_product_addproducts->edit($product_id,$post);
            $this->model_product_addproducts->deleteProductImages($product_id);

            $this->model_product_addproducts->saveProductImages(
                $product_id,
                $post['extra_images']
            );
            
            }else{
            
            
            $type = $post['barcode_type'] ?? 'unit';
            
            if(empty($post['sku']) && empty($post['upc'])){
            
            if($type === 'box'){
            
            $post['upc'] = $this->model_product_addproducts->generateBoxBarcode();
            
            $post['sku'] = '';
            
            }else{
            
            $post['sku'] = $this->model_product_addproducts->getNextUnitBarcode();
            
            $post['upc'] = '';
            
            }
            
            }
            
            
            $product_id = $this->model_product_addproducts->add($post);
            if (!empty($post['extra_images'])) {

                $this->model_product_addproducts->saveProductImages(
                    $product_id,
                    $post['extra_images']
                );
            }
            
            }
            
            
            $this->model_product_addproducts->savePosProduct(
            
            $product_id,
            
            (int)$post['pos_status'],
            
            (int)$post['pos_quentity']
            
            );
            
            // Handle related products
            if ($product_id > 0 && isset($post['related_products'])) {
                $this->model_groceries_categories->deleteRelatedProducts($product_id);
                if (!empty($post['related_products'])) {
                    $this->model_groceries_categories->addRelatedProducts($product_id, $post['related_products']);
                }
            } elseif ($product_id == 0 && !empty($post['related_products'])) {
                $this->model_groceries_categories->addRelatedProducts($product_id, $post['related_products']);
            }
            
         
            $all_products = $this->model_groceries_categories->getAllProducts(0, 1000);
            $related_products = ($product_id > 0) ? $this->model_groceries_categories->getRelatedProducts($product_id) : [];
            
            $this->response->setOutput(json_encode([
            
            "status"=>"success",
            
            "product_id"=>$product_id,
            
            "all_products" => $all_products,
            
            "related_products" => $related_products
            
            ]));
            
            }catch(\Throwable $e){
            
            $this->response->setOutput(json_encode([
            
            "status"=>"error",
            
            "message"=>$e->getMessage()
            
            ]));
            
            }
            
        }

        public function deleteProduct(): void {

    $this->response->addHeader('Content-Type: application/json');

    $customer_id = $this->validateToken();

    if (!$customer_id) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {

        $post = $this->request->post;

        // support raw JSON
        $raw = file_get_contents("php://input");
        if ($raw) {
            $json = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $product_id = (int)($post['product_id'] ?? 0);

        if ($product_id <= 0) {
            throw new \Exception("Product ID required");
        }

        $this->load->model('product/addproducts');

        $existing = $this->model_product_addproducts->getProduct($product_id);

        if (!$existing) {
            throw new \Exception("Invalid Product ID");
        }

        // delete product
        $this->model_product_addproducts->delete($product_id);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Product deleted successfully",
            "product_id" => $product_id
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}
    
    public function addCategory(): void {

        $this->response->addHeader('Content-Type: application/json');

        $customer_id = $this->validateToken();

        if (!$customer_id) {

        $this->response->setOutput(json_encode([
        "status"=>"error",
        "message"=>"Invalid Token"
        ]));

        return;

        }

        try{

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){

        $json = json_decode($raw,true);

        if(json_last_error()===JSON_ERROR_NONE){

        $post=array_merge($post,$json);

        }

        }

        $name = trim($post['name'] ?? '');
        $image_base64 = $post['image'] ?? '';

        if(!$name){
        throw new \Exception("Category name required");
        }

        $this->load->model('groceries/categories');

        if ($this->model_groceries_categories->categoryExists($name)) {
            throw new \Exception("Category name already exists");
        }

        if(!$image_base64){
        throw new \Exception("Category image required");
        }

        /* SAVE IMAGE */

        $image = $this->saveBase64Image($image_base64);

        /* OPTIONAL FIELDS */

        $parent_id = (int)($post['parent_id'] ?? 0);
        $offer = !empty($post['offer']) ? 1 : 0;
        $offer_from = $post['offer_from'] ?? null;
        $offer_to = $post['offer_to'] ?? null;
        $offer_percentage = (float)($post['offer_percentage'] ?? 0);
        $gst = (float)($post['gst'] ?? 0);
        $sort_order = (int)($post['sort_order'] ?? 0);
        $is_banner = (int)($post['is_banner'] ?? 0);
        $status = (int)($post['status'] ?? 1);

        $this->load->model('groceries/categories');

        $category_id = $this->model_groceries_categories->addCategory([
                                                            "name"=>$name,
                                                            "image"=>$image,
                                                            "parent_id"=>$parent_id,
                                                            "offer"=>$offer,
                                                            "offer_from"=>$offer_from,
                                                            "offer_to"=>$offer_to,
                                                            "offer_percentage"=>$offer_percentage,
                                                            "gst"=>$gst,
                                                            "sort_order"=>$sort_order,
                                                            "is_banner"=>$sort_order,
                                                            "status"=>$status,
                                                            "offer_products" => $post['offer_products'] ?? []
                                                            ]);

        $this->response->setOutput(json_encode([
        "status"=>"success",
        "category_id"=>$category_id
        ]));

        }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
        "status"=>"error",
        "message"=>$e->getMessage()
        ]));

        }

}

public function getCategories(): void {

    $this->response->addHeader('Content-Type: application/json');

    $token = $this->validateToken();

    if(!$token){

    $this->response->setOutput(json_encode([
    "status"=>"error",
    "message"=>"Invalid Token"
    ]));

    return;

    }

    $this->load->model('groceries/categories');

    $categories = $this->model_groceries_categories->getCategories();

    $this->response->setOutput(json_encode([
    "status"=>"success",
    "data"=>$categories
    ]));

}

public function editCategory(): void {

    $this->response->addHeader('Content-Type: application/json');

    $customer_id = $this->validateToken();

    if (!$customer_id) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");
        if ($raw) {
            $json = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $category_id = (int)($post['category_id'] ?? 0);
        $name = trim($post['name'] ?? '');

        if ($category_id <= 0) {
            throw new \Exception("Category ID required");
        }

        if (!$name) {
            throw new \Exception("Category name required");
        }

        $this->load->model('groceries/categories');

        // OPTIONAL IMAGE UPDATE
        if (!empty($post['image'])) {
            $post['image'] = $this->saveBase64Image($post['image']);
        }

        $data = [
            "name" => $name,
            "image" => $post['image'] ?? '',
            "parent_id" => (int)($post['parent_id'] ?? 0),
            "offer" => !empty($post['offer']) ? 1 : 0,
            "offer_from" => $post['offer_from'] ?? null,
            "offer_to" => $post['offer_to'] ?? null,
            "offer_percentage" => (float)($post['offer_percentage'] ?? 0),
            "gst" => (float)($post['gst'] ?? 0),
            "sort_order" => (int)($post['sort_order'] ?? 0),
            "is_banner" => (int)($post['is_banner'] ?? 0),
            "status" => (int)($post['status'] ?? 1),
            "offer_products" => $post['offer_products'] ?? []
        ];

        $updated = $this->model_groceries_categories->editCategory($category_id, $data);

        if (!$updated) {
            throw new \Exception("Category not found");
        }

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Category updated successfully"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}


public function deleteCategory(): void {

    $this->response->addHeader('Content-Type: application/json');

    $customer_id = $this->validateToken();

    if (!$customer_id) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");
        if ($raw) {
            $json = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $category_id = (int)($post['category_id'] ?? 0);

        if ($category_id <= 0) {
            throw new \Exception("Category ID required");
        }

        $this->load->model('groceries/categories');

        $deleted = $this->model_groceries_categories->deleteCategory($category_id);

        if (!$deleted) {
            throw new \Exception("Category not found");
        }

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Category deleted successfully"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function addPiece(): void {

    $this->response->addHeader('Content-Type: application/json');
    
    if(!$this->validateToken()){
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
        ]));
        return;
    }

    $json = [];

    // SUPPORT RAW JSON ALSO
    $post = $this->request->post;
    $raw = file_get_contents("php://input");

    if ($raw) {
        $input = json_decode($raw, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            $post = array_merge($post, $input);
        }
    }

    $piece = strtoupper(trim($post['piece'] ?? ''));

    if (!$piece) {
        $json['status'] = "error";
        $json['message'] = "Piece is required";
    }

    if (!$json) {

        $this->load->model('groceries/categories');

        // 🔴 DUPLICATE CHECK
        if ($this->model_groceries_categories->pieceExists($piece)) {

            $json['status'] = "error";
            $json['message'] = "Piece already exists";

        } else {

            $piece_id = $this->model_groceries_categories->addPiece($piece);

            $json['status'] = "success";
            $json['message'] = "Piece Added Successfully";
            $json['piece_id'] = $piece_id;
        }
    }

    $this->response->setOutput(json_encode($json));
}
    
    public function getPieces(): void {

        $this->response->addHeader('Content-Type: application/json');
    
        $agentId = $this->validateToken();
    
        if (!$agentId) {
            $this->response->setOutput(json_encode([
                "status"  => "error",
                "message" => "Invalid Token"
            ]));
            return;
        }
    
        $this->load->model('groceries/categories');
    
        $pieces = $this->model_groceries_categories->getPieces();
    
        $this->response->setOutput(json_encode([
            "status" => "success",
            "data"   => $pieces
        ]));
    }

    public function addCoupon(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if ($raw) {
            $json = json_decode($raw, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $this->load->model('groceries/categories');

        $coupon_id = $this->model_groceries_categories->addCoupon($post);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "coupon_id" => $coupon_id
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function editCoupon(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if ($raw) {
            $json = json_decode($raw, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        if (empty($post['coupon_id'])) {
            throw new \Exception("Coupon ID is required");
        }

        $this->load->model('groceries/categories');

        $this->model_groceries_categories->editCoupon($post['coupon_id'], $post);

        $this->response->setOutput(json_encode([
            "status" => "success"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function deleteCoupon(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {

        $coupon_id = (int)($this->request->post['coupon_id'] ?? 0);

        if (!$coupon_id) {
            throw new \Exception("Coupon ID is required");
        }

        $this->load->model('groceries/categories');

        $this->model_groceries_categories->deleteCoupon($coupon_id);

        $this->response->setOutput(json_encode([
            "status" => "success"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}
    
    public function getOrdersbyDate(): void {

        $this->response->addHeader('Content-Type: application/json');
        
 
        $agentId = $this->validateToken();
        
        if (!$agentId) {
        
        $this->response->setOutput(json_encode([
        
        "status"  => "error",
        "message" => "Invalid Token"
        
        ]));
        
        return;
        
        }
        
        
        $from_date = $this->request->get['from_date'] ?? '';
        $to_date   = $this->request->get['to_date'] ?? '';
        
        $order_id  = $this->request->get['order_id'] ?? '';
        $mobile    = $this->request->get['mobile'] ?? '';
        $name      = $this->request->get['name'] ?? '';
        
 
        if (empty($from_date) || empty($to_date)) {
        
        $today = date('Y-m-d');
        
        $from_date = $today;
        $to_date   = $today;
        
        }
        
        
        $this->load->model('groceries/categories');
        
        
        $orders = $this->model_groceries_categories->getOrdersByDateRange($agentId['id'],$from_date,$to_date,$order_id,$mobile,$name);
        
        $totals = $this->model_groceries_categories->getOrderTotalsByDateRange($from_date,$to_date,$agentId['id']);

        $this->response->setOutput(json_encode([
        
            "status"       => "success",
            
            "total_orders" => count($orders),
            
            "totals"       => $totals,
            
            "data"         => $orders
            
            ]));
        
        }
        
        public function getOrdersforMonths(): void {

        $this->response->addHeader('Content-Type: application/json');
        
 
        $agentId = $this->validateToken();
        
        if (!$agentId) {
        
        $this->response->setOutput(json_encode([
        
        "status"  => "error",
        "message" => "Invalid Token"
        
        ]));
        
        return;
        
        }
        
        
        $from_date = $this->request->get['from_date'] ?? '';
        $to_date   = $this->request->get['to_date'] ?? '';
        
        $order_id  = $this->request->get['order_id'] ?? '';
        $mobile    = $this->request->get['mobile'] ?? '';
        $name      = $this->request->get['name'] ?? '';
        
 
        if (empty($from_date) || empty($to_date)) {

            $to_date   = date('Y-m-d');
            $from_date = date('Y-m-d', strtotime('-6 months'));
        
        }
        
        
        $this->load->model('checkout/order');
        
        
        $orders = $this->model_checkout_order->getOrdersByDateRange($agentId['id'],$from_date,$to_date,$order_id,$mobile,$name);
        
        $totals = $this->model_checkout_order->getOrderTotalsByDateRange($from_date,$to_date,$agentId['id']);

        $this->response->setOutput(json_encode([
        
            "status"       => "success",
            
            "total_orders" => count($orders),
            
            "totals"       => $totals,
            
            "data"         => $orders
            
            ]));
        
        }
        
        public function cancelOrder(){
         
         
         $this->response->addHeader('Content-Type: application/json');
        
 
        $agentId = $this->validateToken();
        
        if (!$agentId) {
        
        $this->response->setOutput(json_encode([
        
        "status"  => "error",
        "message" => "Invalid Token"
        
        ]));
        
        return;
        
        }
        
        try {
        $order_id = (int)($this->request->post['order_id'] ?? 0);
        $reason = trim($this->request->post['reason'] ?? '');

        if ($order_id <= 0) {
            throw new \Exception('Invalid order id');
        }

        $this->load->model('checkout/order');

        if ($this->model_checkout_order->isOrderCancelled($order_id)) {
            throw new \Exception('Order already cancelled');
        }

        $this->model_checkout_order->cancelOrderFull($order_id, $reason);
        // Send WhatsApp cancellation message
        try {
            $this->request->get['order_id'] = $order_id;
            $this->request->get['reason']   = $reason;

            $this->cancelOrderWhatsApp();
        } catch (\Throwable $e) {
            $this->log->write('Cancel WhatsApp Error: ' . $e->getMessage());
        }

        $this->response->setOutput(json_encode([
            'status' => 'success'
        ]));
    } catch (Throwable $e) {
        $this->response->setOutput(json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]));
    }
        }

        public function returnOrder()
{
    $this->response->addHeader('Content-Type: application/json');

    $agentId = $this->validateToken();

    if (!$agentId) {
        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {
        $order_id = (int)($this->request->post['order_id'] ?? 0);

        if ($order_id <= 0) {
            throw new \Exception('Invalid order id');
        }

        $this->load->model('checkout/order');

        if ($this->model_checkout_order->isOrderReturned($order_id)) {
            throw new \Exception('Order already returned');
        }

        $this->model_checkout_order->returnOrderFull($order_id);

        $this->response->setOutput(json_encode([
            'status' => 'success',
            'message' => 'Order returned successfully'
        ]));

    } catch (Throwable $e) {
        $this->response->setOutput(json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]));
    }
}
        
      public function invoice(): void {
        
        
        // ---------- TOKEN ----------
        
        $customer_id = $this->validateToken();
        
        if(!$customer_id){
        
        $this->response->setOutput("Invalid Token");
        
        return;
        
        }
        
        
        // ---------- ORDER ----------
        
        $order_id = (int)($this->request->get['order_id'] ?? 0);
        
        if(!$order_id){
        
        $this->response->setOutput("Order Missing");
        
        return;
        
        }
        
        
        // ---------- LOAD MODEL ----------
        
        $this->load->model('checkout/order');
        
        $this->load->model('tool/upload');
        
        $order_info =
        $this->model_checkout_order
        ->getOrderdetails($order_id);
        
        if(!$order_info){
        
        $this->response->setOutput("Order Not Found");
        
        return;
        
        }
        
        
        // ---------- PRODUCTS ----------
        
        $product_data=[];
        
        $products =
        $this->model_checkout_order
        ->getProducts($order_id);
        
        foreach($products as $product){
        
        $product_data[]=[
        
        'name'=>$product['name'],
        
        'quantity'=>$product['quantity'],
        
        'price'=>$product['price'],
        
        'total'=>$product['price']
        *
        $product['quantity'],
        
        'excluded'=>!empty($product['excluded'])?1:0
        
        ];
        
        }
        
        
        // ---------- TOTALS ----------
        
        $total_data=[];
        
        $totals =
        $this->model_checkout_order
        ->getTotals($order_id);
        
        foreach($totals as $total){
        
        $total_data[]=$total;
        
        }
        
        
        // ---------- VIEW DATA ----------
        
        $data['orders'][]=[
        
        'order_id'=>$order_id,
        
        'invoice_no'=>
        
        $order_info['invoice_prefix'].
        $order_info['invoice_no'],
        
        'date_added'=>$order_info['date_added'],
        
        'store_name'=>$this->config
        ->get('config_name'),
        
        'store_address'=>$this->config
        ->get('config_address'),
        
        'store_telephone'=>$this->config
        ->get('config_telephone'),
        
        'email'=>$order_info['email'],
        
        'telephone'=>$order_info['telephone'],
        
        'payment_method'=>$order_info['payment_method'],
        
        'product'=>$product_data,
        
        'total'=>$total_data,
        
        'comment'=>$order_info['comment'],
        
        'invoice'=>[
        
        'sub_total'=>$order_info['sub_total'] ?? 0,
        
        'discount'=>$order_info['discount'] ?? 0,
        
        'total_tax'=>$order_info['total_tax'] ?? 0,
        
        'roundoff_amount'=>$order_info['roundoff_amount'] ?? 0,
        
        'total_received'=>$order_info['total_received'] ?? 0,
        
        'cash_amount'=>$order_info['cash_amount'] ?? 0,
        
        'upi_amount'=>$order_info['upi_amount'] ?? 0,
        
        'pending_amount'=>$order_info['pending_amount'] ?? 0,
        
        'due_amount'=>$order_info['balance'] ?? 0,
        
        'returnable_balance'=>
        $order_info['returnable_balance'] ?? 0
        
        ]
        
        ];
        
        
        // optional small print
        
        $data['small_print'] =
        !empty($this->request->get['small_print']);
        
       // ---------- JSON RESPONSE ----------

        $this->response->addHeader('Content-Type: application/json');
        
        $this->response->setOutput(json_encode([
            'status' => true,
            'data'   => $data
        ]));

    }

    public function getOrdersbyId()
    {
        $this->response->addHeader("Content-Type: application/json");
        $customer_id = $this->validateToken();

            if(!$customer_id){
            
            $this->response->setOutput("Invalid Token");
            
            return;
            
            }

        $order_id = $this->request->get["order_id"] ?? 0;

        if (!$order_id) {
            return $this->response->setOutput(
                json_encode([
                    "status" => "error",
                    "message" => "Order ID missing",
                ])
            );
        }

        $this->load->model("checkout/order");

        $details = $this->model_groceries_categories->getFullOrderDetails($order_id);

        if (!$details) {
            return $this->response->setOutput(
                json_encode([
                    "status" => "error",
                    "message" => "Order not found",
                ])
            );
        }

        $this->load->model('groceries/categories');

        $tracking = $this->model_groceries_categories->getTrackOrder($order_id);
        $stores = $this->model_groceries_categories->getStores();

        return $this->response->setOutput(
            json_encode([
                "status" => "success",
                "data" => $details,
                "tracking" => $tracking,
                "stores" => $stores
                
            ])
        );
    }

    public function addZone(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if ($raw) {

            $json = json_decode($raw, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $name = trim($post['name'] ?? '');
        $district = trim($post['district'] ?? '');
        $code = trim($post['code'] ?? '');
        $status = (int)($post['status'] ?? 1);
        $country_id = (int)($post['country_id'] ?? 99);
        $language_id = (int)($post['language_id'] ?? 1);

        if ($name == '') {
            throw new \Exception("Zone Name Required");
        }

        if ($district == '') {
            throw new \Exception("District Required");
        }

        if ($code == '') {
            throw new \Exception("Pincode Required");
        }

        if (!preg_match('/^[0-9]{6}$/', $code)) {
            throw new \Exception("Invalid Pincode");
        }

        $this->load->model('groceries/categories');

        if ($this->model_groceries_categories->zoneCodeExists($code)) {
            throw new \Exception("Pincode already exists");
        }

        $zone_id = $this->model_groceries_categories->addZone([
            'name'        => strtoupper($name),
            'district'    => strtoupper($district),
            'code'        => $code,
            'status'      => $status,
            'country_id'  => $country_id,
            'language_id' => $language_id
        ]);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "zone_id" => $zone_id,
            "message" => "Zone Added Successfully"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function editZone(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if ($raw) {

            $json = json_decode($raw, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $zone_id = (int)($post['zone_id'] ?? 0);
        $name = trim($post['name'] ?? '');
        $district = trim($post['district'] ?? '');
        $code = trim($post['code'] ?? '');
        $status = (int)($post['status'] ?? 1);

        if ($zone_id <= 0) {
            throw new \Exception("Zone ID Required");
        }

        if ($name == '') {
            throw new \Exception("Zone Name Required");
        }

        if ($district == '') {
            throw new \Exception("District Required");
        }

        if ($code == '') {
            throw new \Exception("Pincode Required");
        }

        if (!preg_match('/^[0-9]{6}$/', $code)) {
            throw new \Exception("Invalid Pincode");
        }

        $this->load->model('groceries/categories');

        if ($this->model_groceries_categories->zoneCodeExists($code, $zone_id)) {
            throw new \Exception("Pincode already exists");
        }

        $this->model_groceries_categories->editZone($zone_id, [
            'name' => strtoupper($name),
            'district' => strtoupper($district),
            'code' => $code,
            'status' => $status
        ]);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Zone Updated Successfully"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function deleteZone(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
        ]));

        return;
    }

    try {

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if ($raw) {

            $json = json_decode($raw, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        $zone_id = (int)($post['zone_id'] ?? 0);

        if ($zone_id <= 0) {
            throw new \Exception("Zone ID Required");
        }

        $this->load->model('groceries/categories');

        $this->model_groceries_categories->deleteZone($zone_id);

        $this->response->setOutput(json_encode([
            "status"=>"success",
            "message"=>"Zone Deleted Successfully"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>$e->getMessage()
        ]));
    }
}

public function getZones(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        $search = trim($this->request->get['search'] ?? '');

        $this->load->model('groceries/categories');

        $zones = $this->model_groceries_categories->getZones($search);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "total"  => count($zones),
            "data"   => $zones
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}
    
     public function addAddress(): void {

        $this->response->addHeader('Content-Type: application/json');

        $customer_id = $this->validateToken();

        if(!$customer_id){

        $this->response->setOutput(json_encode([
        "status"=>"error",
        "message"=>"Invalid Token"
        ]));

        return;

        }

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){

        $json = json_decode($raw,true);

        if(json_last_error() === JSON_ERROR_NONE){
        $post = array_merge($post,$json);
        }

        }

        $firstname = $post['firstname'] ?? '';
        $lastname  = $post['lastname'] ?? '';
        $contact   = $post['contact'] ?? '';
        $company   = $post['company'] ?? '';
        $address_1 = $post['address_1'] ?? '';
        $address_2 = $post['address_2'] ?? '';
        $city      = $post['city'] ?? '';
        $postcode  = $post['postcode'] ?? '';
        $country_id= $post['country_id'] ?? 99;

        $default   = isset($post['default']) ? (int)$post['default'] : 0;
        $tracking  = html_entity_decode($post['tracking'] ?? '', ENT_QUOTES, 'UTF-8');
        $latitude  = isset($post['latitude']) ? trim((string)$post['latitude']) : '';
        $longitude = isset($post['longitude']) ? trim((string)$post['longitude']) : '';

        if(!$firstname || !$address_1 || !$city || !$postcode){

        $this->response->setOutput(json_encode([
        "status"=>"error",
        "message"=>"Required fields missing"
        ]));

        return;

        }

        $this->load->model('groceries/categories');

        if (($latitude !== '' && $longitude === '') ||
            ($latitude === '' && $longitude !== '')) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Both latitude and longitude are required"
            ]));

            return;
        }

        $delivery = null;

        // If both coordinates are provided → check delivery range
        if ($latitude !== '' && $longitude !== '') {

            $delivery = $this->model_groceries_categories
                ->checkDeliveryAvailability($latitude, $longitude);

            if (!$delivery) {

                $this->response->setOutput(json_encode([
                    "status" => "error",
                    "message" => "Delivery not available at this location"
                ]));

                return;
            }
        }

        $zone_id = $this->model_groceries_categories->getZoneByPostcode($postcode);

        if(!$zone_id){

        $this->response->setOutput(json_encode([
        "status"=>"error",
        "message"=>"Delivery not available in this area"
        ]));

        return;

        }

        $address_id = $this->model_groceries_categories->addAddress([
                                                                    "customer_id"=>$customer_id['id'],
                                                                    "firstname"=>$firstname,
                                                                    "lastname"=>$lastname,
                                                                    "contact"=>$contact,
                                                                    "company"=>$company,
                                                                    "address_1"=>$address_1,
                                                                    "address_2"=>$address_2,
                                                                    "city"=>$city,
                                                                    "postcode"=>$postcode,
                                                                    "country_id"=>$country_id,
                                                                    "zone_id"=>$zone_id,
                                                                    "default"=>$default,
                                                                    "tracking"=>$tracking,
                                                                    "latitude"=>$latitude,
                                                                    "longitude"=>$longitude
                                                                    ]);

        $this->response->setOutput(json_encode([
        "status"=>"success",
        "address_id"=>$address_id
        ]));

        }

    public function getAddress(): void
{
    $this->response->addHeader('Content-Type: application/json');

    $customer_id = $this->validateToken();

    if (!$customer_id) {
        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    $telephone  = $this->request->get['telephone'] ?? '';
    $address_id = (int)($this->request->get['address_id'] ?? 0);

    $this->load->model('groceries/categories');

    $addresses = $this->model_groceries_categories->getAddress(
        $customer_id['id'],
        $telephone,
        $address_id
    );

    if (!$addresses) {
        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => "No address found"
        ]));

        return;
    }

    /*
     * Get store information
     */
    $store = $this->model_groceries_categories->getStore();

    if (
        !$store ||
        $store['latitude'] === '' ||
        $store['longitude'] === ''
    ) {
        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => "Store location not available"
        ]));

        return;
    }

    $store_lat = (float)$store['latitude'];
    $store_lon = (float)$store['longitude'];
    $store_id  = (int)$store['store_id'];


    /*
     * Calculate distance for each address
     */
    foreach ($addresses as &$address) {

        $distance = 0;
        $delivery_charge = 0;

        /*
         * Get latitude and longitude directly
         * from address table.
         */
        $customer_lat = $address['latitude'] ?? '';
        $customer_lon = $address['longitude'] ?? '';


        /*
         * Make sure coordinates are available
         */
        if (
            $customer_lat !== '' &&
            $customer_lon !== '' &&
            is_numeric($customer_lat) &&
            is_numeric($customer_lon)
        ) {

            /*
             * Calculate distance using MySQL
             */
            $distance = $this->model_groceries_categories->calculateDistance(
                $store_lat,
                $store_lon,
                (float)$customer_lat,
                (float)$customer_lon
            );


            /*
             * Get delivery charge based on distance
             */
            $delivery_charge =
                $this->model_groceries_categories->getDeliveryChargeByDistance(
                    $store_id,
                    $distance
                );
        }


        /*
         * Add distance and delivery charge
         * to API response
         */
        $address['distance'] = round((float)$distance, 2);

        $address['delivery_charge'] = $delivery_charge;
    }

    unset($address);


    /*
     * Return response
     */
    $this->response->setOutput(json_encode([
        "status" => "success",
        "data"   => $addresses
    ]));
}
    
    public function editAddress(): void {

$this->response->addHeader('Content-Type: application/json');

$customer_id = $this->validateToken();

if(!$customer_id){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Invalid Token"
]));

return;

}

$post = $this->request->post;

$raw = file_get_contents("php://input");

if($raw){

$json = json_decode($raw,true);

if(json_last_error() === JSON_ERROR_NONE){
$post = array_merge($post,$json);
}

}

$address_id = (int)($post['address_id'] ?? 0);

if(!$address_id){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Address ID required"
]));

return;

}

$this->load->model('groceries/categories');

$firstname = $post['firstname'] ?? '';
$lastname  = $post['lastname'] ?? '';
$contact   = $post['contact'] ?? '';
$company   = $post['company'] ?? '';
$address_1 = $post['address_1'] ?? '';
$address_2 = $post['address_2'] ?? '';
$city      = $post['city'] ?? '';
$postcode  = $post['postcode'] ?? '';
$country_id= $post['country_id'] ?? 99;

$default   = isset($post['default']) ? (int)$post['default'] : 0;
$tracking  = html_entity_decode($post['tracking'] ?? '', ENT_QUOTES, 'UTF-8');
$latitude  = isset($post['latitude']) ? trim((string)$post['latitude']) : '';
$longitude = isset($post['longitude']) ? trim((string)$post['longitude']) : '';

if (($latitude !== '' && $longitude === '') ||
    ($latitude === '' && $longitude !== '')) {

    $this->response->setOutput(json_encode([
        "status" => "error",
        "message" => "Both latitude and longitude are required"
    ]));

    return;
}

$delivery = null;

// If both coordinates are provided → check delivery range
if ($latitude !== '' && $longitude !== '') {

    $delivery = $this->model_groceries_categories
        ->checkDeliveryAvailability($latitude, $longitude);

    if (!$delivery) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Delivery not available at this location"
        ]));

        return;
    }
}

$zone_id = $this->model_groceries_categories->getZoneByPostcode($postcode);

if(!$zone_id){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Delivery not available in this area"
]));

return;

}

$updated = $this->model_groceries_categories->editAddress(
$customer_id['id'],
$address_id,
[
"firstname"=>$firstname,
"lastname"=>$lastname,
"contact"=>$contact,
"company"=>$company,
"address_1"=>$address_1,
"address_2"=>$address_2,
"city"=>$city,
"postcode"=>$postcode,
"country_id"=>$country_id,
"zone_id"=>$zone_id,
"default"=>$default,
"tracking"=>$tracking,
"latitude"=>$latitude,
"longitude"=>$longitude
]
);

if(!$updated){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Address not found"
]));

return;

}

$this->response->setOutput(json_encode([
"status"=>"success",
"message"=>"Address updated successfully"
]));

}

public function deleteAddress(): void {

$this->response->addHeader('Content-Type: application/json');

$customer_id = $this->validateToken();

if(!$customer_id){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Invalid Token"
]));

return;

}

$post = $this->request->post;

$raw = file_get_contents("php://input");

if($raw){

$json = json_decode($raw,true);

if(json_last_error() === JSON_ERROR_NONE){

$post = array_merge($post,$json);

}

}

$address_id = (int)($post['address_id'] ?? 0);

if(!$address_id){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Address ID required"
]));

return;

}

$this->load->model('groceries/categories');

$deleted = $this->model_groceries_categories->deleteAddress($customer_id['id'],$address_id);

if(!$deleted){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Address not found"
]));

return;

}

$this->response->setOutput(json_encode([
"status"=>"success",
"message"=>"Address deleted successfully"
]));

}

public function checkDeliveryZone(): void {

    $this->response->addHeader('Content-Type: application/json');

    $customer_id = $this->validateToken();

    if(!$customer_id){
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
        ]));
        return;
    }

    $post = $this->request->post;
    $raw = file_get_contents("php://input");

    if($raw){
        $json = json_decode($raw,true);
        if(json_last_error() === JSON_ERROR_NONE){
            $post = array_merge($post,$json);
        }
    }

    $latitude  = isset($post['latitude'])  ? trim((string)$post['latitude'])  : '';
    $longitude = isset($post['longitude']) ? trim((string)$post['longitude']) : '';

    if($latitude === '' || $longitude === ''){
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Latitude and longitude are required"
        ]));
        return;
    }

    $this->load->model('groceries/categories');

    $delivery = $this->model_groceries_categories
        ->checkDeliveryAvailability($latitude, $longitude);

    if(!$delivery){
        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Delivery not available at this location"
        ]));
        return;
    }

    // ✅ NEW — compute the actual delivery charge for this distance,
    // same logic used in getAddress(), so the fee returned here always
    // matches what a saved address of this exact location would show.
    $delivery_charge = $this->model_groceries_categories->getDeliveryChargeByDistance(
        $delivery['store_id'],
        $delivery['distance']
    );

    if ($delivery['distance'] == 0) {
        $delivery_charge = 10;
    }

    $delivery['delivery_charge'] = $delivery_charge;

    $this->response->setOutput(json_encode([
        "status"=>"success",
        "message"=>"Delivery available",
        "data"=>$delivery
    ]));

}

public function checkZone(): void {

$this->response->addHeader('Content-Type: application/json');

$postcode = $this->request->get['postcode'] ?? '';

if(!$postcode){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Postcode required"
]));

return;

}

$this->load->model('groceries/categories');

$zone = $this->model_groceries_categories->checkZoneAvailability($postcode);

if($zone){

$this->response->setOutput(json_encode([
"status"=>"success",
"available"=>true,
"zone_id"=>$zone['zone_id'],
"zone_name"=>$zone['name']
]));

}else{

$this->response->setOutput(json_encode([
"status"=>"success",
"available"=>false
]));

}

}

public function getAllCoupons(): void {

$this->response->addHeader('Content-Type: application/json');

$customer_id = $this->validateToken();

if(!$customer_id){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Invalid Token"
]));

return;
}
        $this->load->model('groceries/categories');

        $coupon = $this->model_groceries_categories->getAllCoupons($customer_id['id']);
        
        $this->response->setOutput(json_encode([
"status"=>"success",
"coupons"=>$coupon
]));
        
}

public function getCoupon(): void {

$this->response->addHeader('Content-Type: application/json');

$customer_id = $this->validateToken();

if(!$customer_id){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Invalid Token"
]));

return;
}
        $this->load->model('groceries/categories');

        $coupon = $this->model_groceries_categories->getCoupon($customer_id['id']);
        
        $this->response->setOutput(json_encode([
"status"=>"success",
"coupons"=>$coupon
]));
        
}

public function applycoupon()
{
$customer = $this->validateToken();

if (!$customer || $customer['type'] != 'customer') {

    return $this->response->setOutput(json_encode([
        "status" => "error",
        "message" => "Invalid Token"
    ]));
}

$this->load->language("extension/total/coupon");
$this->load->model('groceries/categories');

$json = [];

$coupon = trim($this->request->post['coupon'] ?? '');
$grand_total = (float)($this->request->post['grand_total'] ?? 0);

if ($coupon == '') {

    $json["error"] = $this->language->get("error_empty");

    return $this->response->setOutput(json_encode($json));
}

$result = $this->model_groceries_categories->validateCoupon(
    $coupon,
    (int)$customer['id'],
    $grand_total
);

if (!$result['success']) {

    $json["error"] = $result["message"];

    return $this->response->setOutput(json_encode($json));
}

$discount_amount = 0;

if ($result['type'] == 'P') {

    // Percentage discount
    $discount_amount = ($grand_total * $result['discount']) / 100;

    // Maximum discount cap
    if ($result['total'] > 0 && $discount_amount > $result['total']) {
        $discount_amount = $result['total'];
    }

} else {

    // Flat discount
    $discount_amount = $result['discount'];

    // Discount cannot exceed cart total
    if ($discount_amount > $grand_total) {
        $discount_amount = $grand_total;
    }
}

$final_total = $grand_total - $discount_amount;


$json["success"] = $this->language->get("text_success");

$json["coupon_info"] = [
    "coupon_id"     => $result["coupon_id"],
    "code"          => $result["code"],
    "name"          => $result["name"],
    "type"          => $result["type"],
    "discount"      => $result["discount"],
    "discount_amount" => round($discount_amount, 2),
    "total"         => (float)$result["total"],
    "minimum_total" => (float)$result["minimum_total"],
    "final_total"   => round($final_total, 2)
];

return $this->response->setOutput(json_encode($json));
}

    public function getLatestProducts(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    $this->load->model('groceries/categories');

    $products = $this->model_groceries_categories->getLatestProducts(0, 10);

    $this->response->setOutput(json_encode([
        "status" => "success",
        "products" => $products
    ]));
}

public function searchCategories(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    $search = $this->request->get['search'] ?? '';

    $this->load->model('groceries/categories');

    $categories = $this->model_groceries_categories->searchCategories($search);

    $this->response->setOutput(json_encode([
        "status" => "success",
        "categories" => $categories
    ]));
}

public function getProductsByCategory(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    $category_id = (int)($this->request->get['category_id'] ?? 0);

    // 👉 Pagination inputs
    $page  = (int)($this->request->get['page'] ?? 1);
    $limit = (int)($this->request->get['limit'] ?? 10);

    if ($page < 1) $page = 1;
    if ($limit < 1) $limit = 10;

    $start = ($page - 1) * $limit;

    $this->load->model('groceries/categories');

    $products = $this->model_groceries_categories
        ->getProductsOnly($category_id, $start, $limit);

    // 👉 total count (for frontend pagination)
    $total = $this->model_groceries_categories
        ->getProductsCountByCategory($category_id);

    $this->response->setOutput(json_encode([
        "status" => "success",
        "page" => $page,
        "limit" => $limit,
        "total" => $total,
        "total_pages" => ceil($total / $limit),
        "products" => $products
    ]));
}

public function searchProducts(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    $search = $this->request->get['search'] ?? '';

    if (strlen($search) < 1) {
        $this->response->setOutput(json_encode([
            "status" => "success",
            "products" => []
        ]));
        return;
    }

    $this->load->model('groceries/categories');

    $products = $this->model_groceries_categories->searchProducts($search);

    $this->response->setOutput(json_encode([
        "status" => "success",
        "products" => $products
    ]));
}
    
    private function saveBase64Image1(string $imageString, string $store_name): string {

        $validate = $this->validateImg($imageString);

        if(!$validate['success']){
            throw new \Exception('Invalid Image');
        }

        $dir = DIR_IMAGE;

        if(!is_dir($dir)){
            mkdir($dir,0777,true);
        }

        $store_name = preg_replace('/[^A-Za-z0-9]/', '', $store_name);

        $file = $store_name . ".png";

        $filepath = $dir . $file;

        $image = imagecreatefromstring(base64_decode($imageString));

        if(!$image){
            throw new \Exception('Image Decode Failed');
        }

        imagepng($image,$filepath);

        imagedestroy($image);

        return "image/" . $file;
    }
    
    public function addStore(): void {

        $this->response->addHeader('Content-Type: application/json');
    
        $customer_id = $this->validateToken();
    
        if(!$customer_id){
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>"Invalid Token"
            ]));
            return;
        }
    
        try{
    
            $post = $this->request->post;
    
            $raw = file_get_contents("php://input");
    
            if($raw){
                $json = json_decode($raw,true);
                if(json_last_error() === JSON_ERROR_NONE){
                    $post = array_merge($post,$json);
                }
            }
    
            $name = trim($post['name'] ?? '');
            $url  = trim($post['url'] ?? '');
            $contact = trim($post['contact'] ?? '');
            $upi_number = trim($post['upi_number'] ?? '');
            $min_order_value = trim($post['min_order_value'] ?? '');
            $delivery_order_value = trim($post['delivery_order_value'] ?? '');
            $delivery_fee = trim($post['delivery_fee'] ?? '');
            $delivery_range = trim($post['delivery_range'] ?? '');
            $upi_id = trim($post['upi_id'] ?? '');
            $address = trim($post['address'] ?? '');
            $latitude = trim($post['latitude'] ?? '');
            $longitude = trim($post['longitude'] ?? '');
            $gst = trim($post['gst'] ?? '');
            $status = isset($post['status']) ? (int)$post['status'] : 1;

            // Simplified email configuration - client only provides email
            $store_email = trim($post['store_email'] ?? '');

            // Delivery charges array
            $delivery_charges = $post['delivery_charges'] ?? [];

            if(!$name){
                throw new \Exception("Store name required");
            }

            $logo = '';

            if(!empty($post['logo'])){
                $logo = $this->saveBase64Image1($post['logo'],$name);
            }

            $this->load->model('groceries/categories');

            $store_id = $this->model_groceries_categories->addStore([
                "name"=>$name,
                "url"=>$url,
                "logo"=>$logo,
                "contact"=>$contact,
                "upi_number"=>$upi_number,
                "min_order_value"=>$min_order_value,
                "delivery_order_value"=>$delivery_order_value,
                "delivery_fee"=>$delivery_fee,
                "delivery_range"=>$delivery_range,
                "upi_id"=>$upi_id,
                "address"=>$address,
                "latitude"=>$latitude,
                "longitude"=>$longitude,
                "gst"=>$gst,
                "store_email"=>$store_email,
                "delivery_charges"=>$delivery_charges,
                "status"=>$status
            ]);
    
            $this->response->setOutput(json_encode([
                "status"=>"success",
                "store_id"=>$store_id
            ]));
    
        }catch(\Throwable $e){
    
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>$e->getMessage()
            ]));
    
        }
    }
    
    public function editStore(): void {

        $this->response->addHeader('Content-Type: application/json');
    
        $customer_id = $this->validateToken();
    
        if(!$customer_id){
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>"Invalid Token"
            ]));
            return;
        }
    
        try{
    
            $post = $this->request->post;
    
            $raw = file_get_contents("php://input");
    
            if($raw){
                $json = json_decode($raw,true);
                if(json_last_error() === JSON_ERROR_NONE){
                    $post = array_merge($post,$json);
                }
            }
    
            $store_id = (int)($post['store_id'] ?? 0);
    
            if(!$store_id){
                throw new \Exception("Store ID required");
            }
    
            $name = trim($post['name'] ?? '');
            $url  = trim($post['url'] ?? '');
            $contact = trim($post['contact'] ?? '');
            $upi_number = trim($post['upi_number'] ?? '');
            $min_order_value = trim($post['min_order_value'] ?? '');
            $delivery_order_value = trim($post['delivery_order_value'] ?? '');
            $delivery_fee = trim($post['delivery_fee'] ?? '');
            $delivery_range = trim($post['delivery_range'] ?? '');
            $upi_id = trim($post['upi_id'] ?? '');
            $address = trim($post['address'] ?? '');
            $latitude = trim($post['latitude'] ?? '');
            $longitude = trim($post['longitude'] ?? '');
            $gst = trim($post['gst'] ?? '');
            $status = isset($post['status']) ? (int)$post['status'] : 1;

            // Simplified email configuration - client only provides email
            $store_email = trim($post['store_email'] ?? '');

            // Delivery charges array
            $delivery_charges = $post['delivery_charges'] ?? [];
            $logo = '';

            if(!empty($post['logo'])){
                $logo = $this->saveBase64Image1($post['logo'],$name);
            }

            $this->load->model('groceries/categories');

            $this->model_groceries_categories->editStore($store_id,[
                "name"=>$name,
                "url"=>$url,
                "logo"=>$logo,
                "contact"=>$contact,
                "upi_number"=>$upi_number,
                "min_order_value"=>$min_order_value,
                "delivery_order_value"=>$delivery_order_value,
                "delivery_fee"=>$delivery_fee,
                "delivery_range"=>$delivery_range,
                "upi_id"=>$upi_id,
                "address"=>$address,
                "latitude"=>$latitude,
                "longitude"=>$longitude,
                "gst"=>$gst,
                "store_email"=>$store_email,
                "delivery_charges"=>$delivery_charges,
                "status"=>$status
            ]);
    
            $this->response->setOutput(json_encode([
                "status"=>"success",
                "message"=>"Store updated successfully"
            ]));
    
        }catch(\Throwable $e){
    
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>$e->getMessage()
            ]));
    
        }
    }
    
    public function getStores(): void {

        $this->response->addHeader('Content-Type: application/json');

        $customer_id = $this->validateToken();

        if(!$customer_id){
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>"Invalid Token"
            ]));
            return;
        }

        $this->load->model('groceries/categories');

        // Check if store_id filter is provided
        $store_id = (int)($this->request->get['store_id'] ?? 0);

        if ($store_id) {
            // Get delivery charges for specific store
            $delivery_charges = $this->model_groceries_categories->getDeliveryChargesByStoreId($store_id);
            $this->response->setOutput(json_encode([
                "status"=>"success",
                "store_id"=>$store_id,
                "delivery_charges"=>$delivery_charges
            ]));
        } else {
            // Get all stores with their delivery charges
            $stores = $this->model_groceries_categories->getStores();
            $this->response->setOutput(json_encode([
                "status"=>"success",
                "data"=>$stores
            ]));
        }
    }
    
    private function saveKycImage(string $imageString,$prefix): string {

                    
                    $validate = $this->validateImg($imageString);

            if(!$validate['success']){
            
            throw new \Exception('Invalid Image');
            
            }

            
            $dir = DIR_IMAGE . 'catalog/kyc/';
            
            if(!is_dir($dir)){
            
            mkdir($dir,0777,true);
            
            }
            
            $file = $prefix.'_'.date('YmdHis').'_'.mt_rand(1000,9999).'.jpg';
            
            $filepath = $dir.$file;
            
         
            $image = imagecreatefromstring(base64_decode($imageString));
            
            if(!$image){
            
            throw new \Exception('Image Decode Failed');
            
            }
            
        
            imagejpeg($image,$filepath,90);
            
            imagedestroy($image);

            return 'catalog/kyc/'.$file;
            
            }
    
    public function addAgent(): void {

$this->response->addHeader('Content-Type: application/json');

$agentId = $this->validateToken();

if(!$agentId){
$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>"Invalid Token"
]));
return;
}

try{

$post = $this->request->post;

$raw = file_get_contents("php://input");

if($raw){
$json = json_decode($raw,true);
if(json_last_error() === JSON_ERROR_NONE){
$post = array_merge($post,$json);
}
}

if(empty($post['firstname']) || empty($post['telephone']) || empty($post['password']) || empty($post['store_id'])){
throw new \Exception("Please fill the required Fields");
}

$post += [
"lastname"=>"",
"email"=>"",
"kycpanidno"=>"",
"kycpanimage"=>"",
"kycaadharidno"=>"",
"kycaadharimage"=>"",
"kycprofileimage"=>"",
"kycshopimage"=>""
];


/* SAVE KYC IMAGES */

if(!empty($post['kycpanimage'])){
$post['kycpanimage'] = $this->saveKycImage($post['kycpanimage'],'pan');
}

if(!empty($post['kycaadharimage'])){
$post['kycaadharimage'] = $this->saveKycImage($post['kycaadharimage'],'aadhar');
}

if(!empty($post['kycprofileimage'])){
$post['kycprofileimage'] = $this->saveKycImage($post['kycprofileimage'],'profile');
}

if(!empty($post['kycshopimage'])){
$post['kycshopimage'] = $this->saveKycImage($post['kycshopimage'],'shop');
}

$this->load->model('groceries/categories');

$customer_id = $this->model_groceries_categories->addAgent($post);

$this->response->setOutput(json_encode([
"status"=>"success",
"customer_id"=>$customer_id
]));

}catch(\Throwable $e){

$this->response->setOutput(json_encode([
"status"=>"error",
"message"=>$e->getMessage()
]));

}

}
    
    public function editAgent(): void {

        $this->response->addHeader('Content-Type: application/json');
        
        $agentId = $this->validateToken();
        
        if(!$agentId){
        
        $this->response->setOutput(json_encode([
        "status"=>"error",
        "message"=>"Invalid Token"
        ]));
        
        return;
        
        }
        
        try{
        
        $post = $this->request->post;
        
        $raw = file_get_contents("php://input");
        
        if($raw){
        $json = json_decode($raw,true);
        
        if(json_last_error() === JSON_ERROR_NONE){
        $post = array_merge($post,$json);
        }
        
        }
        
        $customer_id = (int)($post['customer_id'] ?? 0);
        
        if(!$customer_id){
        
        throw new \Exception("Customer ID required");
        
        }
        
        
        /* DEFAULT VALUES */
        
        $post += [
        
        "store_id"=>"",
        "firstname"=>"",
        "lastname"=>"",
        "email"=>"",
        "telephone"=>"",
        
        "kycpanidno"=>"",
        "kycpanimage"=>"",
        
        "kycaadharidno"=>"",
        "kycaadharimage"=>"",
        
        "kycprofileimage"=>"",
        "kycshopimage"=>""
        
        ];
        
        
        /* SAVE KYC IMAGES */
        
        if(!empty($post['kycpanimage'])){
        $post['kycpanimage'] = $this->saveKycImage($post['kycpanimage'],'pan');
        }
        
        if(!empty($post['kycaadharimage'])){
        $post['kycaadharimage'] = $this->saveKycImage($post['kycaadharimage'],'aadhar');
        }
        
        if(!empty($post['kycprofileimage'])){
        $post['kycprofileimage'] = $this->saveKycImage($post['kycprofileimage'],'profile');
        }
        
        if(!empty($post['kycshopimage'])){
        $post['kycshopimage'] = $this->saveKycImage($post['kycshopimage'],'shop');
        }
        
        
        /* LOAD MODEL */
        
        $type = $post['type'] ?? 'agent';

        $this->load->model('groceries/categories');

        if($type == 'admin'){

        $this->model_groceries_categories->editAdmin(
            $customer_id,
            $post
        );

        }else{

        $this->model_groceries_categories->editAgent(
            $customer_id,
            $post
        );

        }
        
        $this->response->setOutput(json_encode([
        
        "status"=>"success",
        
        "message"=>"updated successfully"
        
        ]));
        
        }catch(\Throwable $e){
        
        $this->response->setOutput(json_encode([
        
        "status"=>"error",
        
        "message"=>$e->getMessage()
        
        ]));
        
        }
        
        }
        
    public function getAgents(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    $this->load->model('groceries/categories');

    if ($user['type'] == 'admin') {

        $data = $this->model_groceries_categories
            ->getAdminDetails($user['id']);

    } else {

        $data = $this->model_groceries_categories
            ->getAgentDetails($user['id']);
    }

    $this->response->setOutput(json_encode([
        "status" => "success",
        "data"   => $data
    ]));
}
    
    public function addCustomer(): void {

        $this->response->addHeader('Content-Type: application/json');
        
        $agentId = $this->validateToken();
        
        if(!$agentId){
        
        $this->response->setOutput(json_encode([
        "status"=>"error",
        "message"=>"Invalid Token"
        ]));
        
        return;
        
        }
        
        try{
        
        $post = $this->request->post;
        
        $raw = file_get_contents("php://input");
        
        if($raw){
        $json = json_decode($raw,true);
        
        if(json_last_error() === JSON_ERROR_NONE){
        $post = array_merge($post,$json);
        }
        
        }
        
        /* REQUIRED */
        
        if(empty($post['firstname']) || empty($post['telephone']) || empty($post['password'])){
        
        throw new \Exception("Required fields missing");
        
        }
        
        
        /* DEFAULT VALUES */
        
        $post += [
        
        "lastname"=>"",
        "email"=>"",
        
        "kycpanidno"=>"",
        "kycpanimage"=>"",
        
        "kycaadharidno"=>"",
        "kycaadharimage"=>"",
        
        "kycprofileimage"=>"",
        "kycshopimage"=>""
        
        ];
        
        
        /* SAVE KYC IMAGES */
        
        if(!empty($post['kycpanimage'])){
        $post['kycpanimage'] = $this->saveKycImage($post['kycpanimage'],'pan');
        }
        
        if(!empty($post['kycaadharimage'])){
        $post['kycaadharimage'] = $this->saveKycImage($post['kycaadharimage'],'aadhar');
        }
        
        if(!empty($post['kycprofileimage'])){
        $post['kycprofileimage'] = $this->saveKycImage($post['kycprofileimage'],'profile');
        }
        
        if(!empty($post['kycshopimage'])){
        $post['kycshopimage'] = $this->saveKycImage($post['kycshopimage'],'shop');
        }
        
        
        /* LOAD MODEL */
        
        $this->load->model('groceries/categories');
        
        $customer_id = $this->model_groceries_categories->addCustomer($post);
        
        
        $this->response->setOutput(json_encode([
        
        "status"=>"success",
        "customer_id"=>$customer_id
        
        ]));
        
        }catch(\Throwable $e){
        
        $this->response->setOutput(json_encode([
        
        "status"=>"error",
        "message"=>$e->getMessage()
        
        ]));
        
        }
        
        }

        public function getProfile(): void {
 
        $this->response->addHeader('Content-Type: application/json');
 
        $agentId = $this->validateToken();
 
        if(!$agentId){
 
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>"Invalid Token"
            ]));
 
            return;
        }

            try{

                $this->load->model('groceries/categories');

                $profile = $this->model_groceries_categories->getCustomerProfile($agentId['id']);

                if(!$profile){
                    throw new \Exception("Profile not found");
                }

                $this->response->setOutput(json_encode([
                    "status"=>"success",
                    "data"=>$profile
                ]));

            }catch(\Throwable $e){

                $this->response->setOutput(json_encode([
                    "status"=>"error",
                    "message"=>$e->getMessage()
                ]));
            }
        }

        public function getDeliveryReport(): void {

        $this->response->addHeader('Content-Type: application/json');

        $agentId = $this->validateToken();

        if(!$agentId){

            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>"Invalid Token"
            ]));

            return;
        }

        if (!$this->request->post) {
            $input = json_decode(file_get_contents("php://input"), true);
            if ($input) {
                $this->request->post = $input;
            }
        }

        try{
            $this->load->model('groceries/categories');

            $from_date = isset($this->request->post['from_date']) ? $this->request->post['from_date'] : date('Y-m-d');
            $to_date = isset($this->request->post['to_date']) ? $this->request->post['to_date'] : date('Y-m-d');

            $report = $this->model_groceries_categories->getDeliveryReport([
                'from_date' => $from_date,
                'to_date' => $to_date
            ]);

            $this->response->setOutput(json_encode([
                "status"=>"success",
                "data"=>$report
            ]));

        }catch(\Throwable $e){

            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>$e->getMessage()
            ]));
        }
    }

    public function addProfile(): void {
 
        $this->response->addHeader('Content-Type: application/json');
 
        $agentId = $this->validateToken();
 
        if(!$agentId){
 
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>"Invalid Token"
            ]));
 
            return;
        }
 
        try {
 
            $post = $this->request->post;
 
            $raw = file_get_contents("php://input");
 
            if ($raw) {
                $json = json_decode($raw, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $post = array_merge($post, $json);
                }
            }
 
            $telephone = $post['telephone'] ?? '';
 
            if (!$telephone) {
                throw new \Exception("Telephone required");
            }
 
            $this->load->model('groceries/categories');
 
            // 🔥 VERIFY TELEPHONE BELONGS TO TOKEN USER
            $customer = $this->model_groceries_categories
                ->getCustomerByIdAndPhone($agentId['id'], $telephone);
 
            if (!$customer) {
                throw new \Exception("Telephone does not match user");
            }
 
            $firstname = $post['firstname'] ?? '';
            $lastname  = $post['lastname'] ?? '';
            $email     = $post['email'] ?? '';
 
            // -------- UPDATE PROFILE --------
            $this->model_groceries_categories->updateCustomerProfile(
                $agentId,
                $firstname,
                $lastname,
                $email
            );
 
            // -------- IMAGE --------
            $image_path = '';
 
            if (!empty($post['image_base64'])) {
 
                $image_path = $this->saveKycImage($post['image_base64'], 'profile');
 
            } elseif (!empty($_FILES['image']['tmp_name'])) {
 
                $dir = DIR_IMAGE . 'catalog/kyc/';
 
                if (!is_dir($dir)) {
                    mkdir($dir, 0777, true);
                }
 
                $file = 'profile_' . time() . '.jpg';
 
                move_uploaded_file($_FILES['image']['tmp_name'], $dir . $file);
 
                $image_path = 'catalog/kyc/' . $file;
            }
 
            // -------- SAVE IMAGE --------
            if ($image_path) {
                $this->model_groceries_categories->insertKycImage($agentId['id'], $image_path);
            }
 
            $this->response->setOutput(json_encode([
                "status"=>"success",
                "message"=>"Profile updated",
                "customer_id"=>$agentId,
                "image"=>$image_path
            ]));
 
        } catch (\Throwable $e) {
 
            $this->response->setOutput(json_encode([
                "status"=>"error",
                "message"=>$e->getMessage()
            ]));
        }
    }
    public function editProfile() {

    $this->response->addHeader('Content-Type: application/json');

    $agentId = $this->validateToken();

    if (!$agentId) {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    try {

        // ---------- INPUT ----------
        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if ($raw) {
            $json = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post = array_merge($post, $json);
            }
        }

        // ---------- VALIDATION ----------
        $telephone = $post['telephone'] ?? '';

        if (!$telephone) {
            throw new \Exception("Telephone required");
        }

        $this->load->model('groceries/categories');

        // ✅ Check user belongs to token
        $customer = $this->model_groceries_categories
            ->getCustomerByIdAndPhone($agentId['id'], $telephone);

        if (!$customer) {
            throw new \Exception("Telephone does not match user");
        }

        // ---------- UPDATE FIELDS ----------
        $firstname = $post['firstname'] ?? $customer['firstname'];
        $lastname  = $post['lastname'] ?? $customer['lastname'];
        $email     = $post['email'] ?? $customer['email'];

        $this->model_groceries_categories->updateCustomerProfile(
            $agentId['id'],
            $firstname,
            $lastname,
            $email
        );

        // ---------- IMAGE UPDATE ----------
        $image_path = '';

        if (!empty($post['image_base64'])) {

            $image_path = $this->saveKycImage($post['image_base64'], 'profile');

        } elseif (!empty($_FILES['image']['tmp_name'])) {

            $dir = DIR_IMAGE . 'catalog/kyc/';

            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }

            $file = 'profile_' . time() . '.jpg';

            move_uploaded_file($_FILES['image']['tmp_name'], $dir . $file);

            $image_path = 'catalog/kyc/' . $file;
        }

        if ($image_path) {
            $this->model_groceries_categories->insertKycImage($agentId['id'], $image_path);
        }

        // ---------- RESPONSE ----------
        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Profile updated successfully",
            "customer_id" => $agentId,
            "image" => $image_path
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

private function saveBannerImage(string $imageString,$title): string {

    $validate = $this->validateImg($imageString);

    if(!$validate['success']){
        throw new \Exception('Invalid Image');
    }

    $dir = DIR_IMAGE . 'catalog/banners/';

    if(!is_dir($dir)){
        mkdir($dir,0777,true);
    }

    // clean title
    $title = preg_replace('/[^A-Za-z0-9]/','_',$title);

    $file = $title.'_'.date('YmdHis').'.jpg';

    $filepath = $dir.$file;

    $image = imagecreatefromstring(base64_decode($imageString));

    if(!$image){
        throw new \Exception('Image Decode Failed');
    }

    // fixed banner size
    $target_width  = 1200;
    $target_height = 420;

    $resized = imagecreatetruecolor($target_width,$target_height);

    imagecopyresampled(
        $resized,
        $image,
        0,0,0,0,
        $target_width,
        $target_height,
        imagesx($image),
        imagesy($image)
    );

    imagejpeg($resized,$filepath,90);

    imagedestroy($image);
    imagedestroy($resized);

    return 'catalog/banners/'.$file;
}

public function addBanner(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){
            $json = json_decode($raw,true);
            if(json_last_error() === JSON_ERROR_NONE){
                $post = array_merge($post,$json);
            }
        }

        $name = trim($post['name'] ?? '');

        if(!$name){
            throw new \Exception("Banner name required");
        }

        $this->load->model('groceries/categories');

        $banner_id = $this->model_groceries_categories->addBanner([
            "name"=>$name,
            "from_date"=>$post['from_date'] ?? null,
            "to_date"=>$post['to_date'] ?? null,
            "status"=>1
        ]);

        if(!empty($post['images'])){

            foreach($post['images'] as $img){

                $path = $this->saveBannerImage($img['image'],$img['title']);

                $this->model_groceries_categories->addBannerImage([
                    "banner_id"=>$banner_id,
                    "title"=>$img['title'] ?? '',
                    "link"=>$img['category_id'] ?? '',
                    "image"=>$path,
                    "sort_order"=>$img['sort_order'] ?? 0
                ]);
            }
        }

        $this->response->setOutput(json_encode([
            "status"=>"success",
            "banner_id"=>$banner_id
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>$e->getMessage()
        ]));
    }
}
public function editBanner(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){
            $json = json_decode($raw,true);
            if(json_last_error() === JSON_ERROR_NONE){
                $post = array_merge($post,$json);
            }
        }

        $banner_id = (int)($post['banner_id'] ?? 0);

        if(!$banner_id){
            throw new \Exception("Banner ID required");
        }

        $this->load->model('groceries/categories');

        // update banner table only
        $this->model_groceries_categories->editBanner($banner_id,[
            "name"=>$post['name'] ?? '',
            "from_date"=>$post['from_date'] ?? null,
            "to_date"=>$post['to_date'] ?? null,
            "status"=>$post['status'] ?? 1
        ]);
        $this->model_groceries_categories->deleteBannerImages($banner_id);

        if (!empty($post['images'])) {

            foreach ($post['images'] as $img) {

                if (!empty($img['existing_image'])) {
                    $image = $img['existing_image'];
                } else {
                    $image = $this->saveBannerImage($img['image'], $img['title']);
                }

                $this->model_groceries_categories->addBannerImage([
                    "banner_id"  => $banner_id,
                    "title"      => $img['title'] ?? '',
                    "link"       => $img['category_id'] ?? '',
                    "image"      => $image,
                    "sort_order" => $img['sort_order'] ?? 0
                ]);
            }
        }

        $this->response->setOutput(json_encode([
            "status"=>"success",
            "message"=>"Banner updated"
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>$e->getMessage()
        ]));
    }
}
public function getBanners(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $this->load->model('groceries/categories');

        $banners = $this->model_groceries_categories->getActiveBanners();

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data"   => $banners
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function getBannerCategoryData(): void
{
    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    $category_id = (int)($this->request->post['category_id'] ?? $this->request->get['category_id'] ?? 0);

    if (!$category_id) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Category ID is required"
        ]));

        return;
    }

    $this->load->model('groceries/categories');

    $category = $this->model_groceries_categories->getCategory($category_id);

    if (!$category) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Category not found"
        ]));

        return;
    }

    // Banner linked to Main Category
    if ($category['parent_id'] == 0) {

        $products = $this->model_groceries_categories->getProductsOnly($category_id);

        $subcategories = $this->model_groceries_categories->getSubCategories($category_id);

        foreach ($subcategories as &$subcategory) {
            $subcategory['products'] = $this->model_groceries_categories->getProductsOnly($subcategory['category_id']);
        }

        $response = [
            "status" => "success",
            "category_type" => "parent",
            "main_category" => [
                "category_id" => $category['category_id'],
                "category_name" => $category['name']
            ],
            "products" => $products,
            "subcategories" => $subcategories
        ];

    } else {

        // Banner linked to Sub Category

        $parentCategory = $this->model_groceries_categories->getCategory($category['parent_id']);

        $products = $this->model_groceries_categories->getProductsOnly($category_id);

        $subcategories = $this->model_groceries_categories->getSubCategories($parentCategory['category_id']);

        $response = [
            "status" => "success",
            "category_type" => "subcategory",
            "main_category" => [
                "category_id" => $parentCategory['category_id'],
                "category_name" => $parentCategory['name']
            ],
            "selected_subcategory" => [
                "category_id" => $category['category_id'],
                "category_name" => $category['name']
            ],
            "products" => $products,
            "subcategories" => $subcategories
        ];
    }

    $this->response->setOutput(json_encode($response));
}

public function getAllBanners(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $this->load->model('groceries/categories');

        $banners = $this->model_groceries_categories->getAllBanners();

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data"   => $banners
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function addRunningBanner(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){
            $json = json_decode($raw,true);
            if(json_last_error() === JSON_ERROR_NONE){
                $post = array_merge($post,$json);
            }
        }

        $name = trim($post['name'] ?? '');

        if(!$name){
            throw new \Exception("Banner name required");
        }

        $this->load->model('groceries/categories');

        $banner_id = $this->model_groceries_categories->addRunningBanner([
            "name"=>$name,
            "from_date"=>$post['from_date'] ?? null,
            "to_date"=>$post['to_date'] ?? null,
            "status"=>1
        ]);

        if(!empty($post['images'])){

            foreach($post['images'] as $img){

                $path = $this->saveBannerImage($img['image'],$img['title']);

                $this->model_groceries_categories->addRunningBannerImage([
                    "banner_id"=>$banner_id,
                    "title"=>$img['title'] ?? '',
                    "link"=>$img['category_id'] ?? '',
                    "image"=>$path,
                    "sort_order"=>$img['sort_order'] ?? 0
                ]);
            }
        }

        $this->response->setOutput(json_encode([
            "status"=>"success",
            "banner_id"=>$banner_id
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>$e->getMessage()
        ]));
    }
}
public function editRunningBanner(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){
            $json = json_decode($raw,true);
            if(json_last_error() === JSON_ERROR_NONE){
                $post = array_merge($post,$json);
            }
        }

        $banner_id = (int)($post['banner_id'] ?? 0);

        if(!$banner_id){
            throw new \Exception("Banner ID required");
        }

        $this->load->model('groceries/categories');

        // update banner table only
        $this->model_groceries_categories->editRunningBanner($banner_id,[
            "name"=>$post['name'] ?? '',
            "from_date"=>$post['from_date'] ?? null,
            "to_date"=>$post['to_date'] ?? null,
            "status"=>$post['status'] ?? 1
        ]);

        $this->model_groceries_categories->deleteRunningBannerImages($banner_id);

        // add new images only if provided (do not delete old ones)
        if (!empty($post['images'])) {

            foreach ($post['images'] as $img) {

                if (!empty($img['existing_image'])) {
                    $image = $img['existing_image'];
                } else {
                    $image = $this->saveBannerImage($img['image'], $img['title']);
                }

                $this->model_groceries_categories->addRunningBannerImage([
                    "banner_id"  => $banner_id,
                    "title"      => $img['title'] ?? '',
                    "link"       => $img['category_id'] ?? '',
                    "image"      => $image,
                    "sort_order" => $img['sort_order'] ?? 0
                ]);
            }
        }

        $this->response->setOutput(json_encode([
            "status"=>"success",
            "message"=>"Banner updated"
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>$e->getMessage()
        ]));
    }
}
public function getRunningBanners(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $this->load->model('groceries/categories');

        $banners = $this->model_groceries_categories->getActiveRunningBanners();

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data"   => $banners
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function getAllRunningBanners(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $this->load->model('groceries/categories');

        $banners = $this->model_groceries_categories->getAllRunningBanners();

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data"   => $banners
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function addBottomBanner(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){
            $json = json_decode($raw,true);
            if(json_last_error() === JSON_ERROR_NONE){
                $post = array_merge($post,$json);
            }
        }

        $name = trim($post['name'] ?? '');

        if(!$name){
            throw new \Exception("Banner name required");
        }

        $this->load->model('groceries/categories');

        $banner_id = $this->model_groceries_categories->addBottomBanner([
            "name"=>$name,
            "from_date"=>$post['from_date'] ?? null,
            "to_date"=>$post['to_date'] ?? null,
            "status"=>1
        ]);

        if(!empty($post['images'])){

            foreach($post['images'] as $img){

                $path = $this->saveBannerImage($img['image'],$img['title']);

                $this->model_groceries_categories->addBottomBannerImage([
                    "banner_id"=>$banner_id,
                    "title"=>$img['title'] ?? '',
                    "link"=>$img['category_id'] ?? '',
                    "image"=>$path,
                    "sort_order"=>$img['sort_order'] ?? 0
                ]);
            }
        }

        $this->response->setOutput(json_encode([
            "status"=>"success",
            "banner_id"=>$banner_id
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>$e->getMessage()
        ]));
    }
}
public function editBottomBanner(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $post = $this->request->post;

        $raw = file_get_contents("php://input");

        if($raw){
            $json = json_decode($raw,true);
            if(json_last_error() === JSON_ERROR_NONE){
                $post = array_merge($post,$json);
            }
        }

        $banner_id = (int)($post['banner_id'] ?? 0);

        if(!$banner_id){
            throw new \Exception("Banner ID required");
        }

        $this->load->model('groceries/categories');

        // update banner table only
        $this->model_groceries_categories->editBottomBanner($banner_id,[
            "name"=>$post['name'] ?? '',
            "from_date"=>$post['from_date'] ?? null,
            "to_date"=>$post['to_date'] ?? null,
            "status"=>$post['status'] ?? 1
        ]);

        $this->model_groceries_categories->deleteBottomBannerImages($banner_id);

        // add new images only if provided (do not delete old ones)
        if (!empty($post['images'])) {

            foreach ($post['images'] as $img) {

                if (!empty($img['existing_image'])) {
                    $image = $img['existing_image'];
                } else {
                    $image = $this->saveBannerImage($img['image'], $img['title']);
                }

                $this->model_groceries_categories->addBottomBannerImage([
                    "banner_id"  => $banner_id,
                    "title"      => $img['title'] ?? '',
                    "link"       => $img['category_id'] ?? '',
                    "image"      => $image,
                    "sort_order" => $img['sort_order'] ?? 0
                ]);
            }
        }

        $this->response->setOutput(json_encode([
            "status"=>"success",
            "message"=>"Banner updated"
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>$e->getMessage()
        ]));
    }
}
public function getBottomBanners(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $this->load->model('groceries/categories');

        $banners = $this->model_groceries_categories->getActiveBottomBanners();

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data"   => $banners
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function getAllBottomBanners(): void {

    $this->response->addHeader('Content-Type: application/json');

    try{

        $this->load->model('groceries/categories');

        $banners = $this->model_groceries_categories->getAllBottomBanners();

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data"   => $banners
        ]));

    }catch(\Throwable $e){

        $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function getReward(): void {

    $this->response->addHeader('Content-Type: application/json');

    $customer_id = $this->validateToken();

    if(!$customer_id){

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
        ]));

        return;

    }

    $this->load->model('groceries/categories');

    $total_points = $this->model_groceries_categories->getRewardPoints($customer_id['id']);

    $this->response->setOutput(json_encode([
        "status"=>"success",
        "total_points"=>$total_points
    ]));

}
public function getAllProducts(): void {

        $this->response->addHeader('Content-Type: application/json');

        $customer_id = $this->validateToken();

        if(!$customer_id){
        $this->response->setOutput(json_encode([
        "status" => "error",
        "message" => "Invalid Token"
        ]));
        return;
        }

        $search = $this->request->get['search'] ?? '';
        $product_id = (int)($this->request->get['product_id'] ?? 0);

        $this->load->model('groceries/categories');

        $products = $this->model_groceries_categories->getAllProducts($search);

        $related_ids = [];
        if ($product_id > 0) {
            $related = $this->model_groceries_categories->getRelatedProducts($product_id);
            foreach ($related as $r) {
                $related_ids[] = (int)$r['product_id'];
            }
        }

        $this->response->setOutput(json_encode([
        "status" => "success",
        "data" => $products,
        "related_ids" => $related_ids
        ]));

        }

public function get50perDiscountProducts(): void {

        $this->response->addHeader('Content-Type: application/json');

        $customer_id = $this->validateToken();

        if(!$customer_id){
        $this->response->setOutput(json_encode([
        "status" => "error",
        "message" => "Invalid Token"
        ]));
        return;
        }

        $search = $this->request->get['search'] ?? '';

        $this->load->model('groceries/categories');

        $products = $this->model_groceries_categories->get50perDiscountProducts($search);

        $this->response->setOutput(json_encode([
        "status" => "success",
        "data" => $products
        ]));

        }

public function get10to49perDiscountProducts(): void {

        $this->response->addHeader('Content-Type: application/json');

        $customer_id = $this->validateToken();

        if(!$customer_id){
        $this->response->setOutput(json_encode([
        "status" => "error",
        "message" => "Invalid Token"
        ]));
        return;
        }

        $search = $this->request->get['search'] ?? '';

        $this->load->model('groceries/categories');

        $products = $this->model_groceries_categories->get10to49perDiscountProducts($search);

        $this->response->setOutput(json_encode([
        "status" => "success",
        "data" => $products
        ]));

        }

        public function getAllOrdersbyDate(): void {

            $this->response->addHeader('Content-Type: application/json');

            $token = $this->validateToken();

            if (!$token) {

            $this->response->setOutput(json_encode([
            "status"  => "error",
            "message" => "Invalid Token"
            ]));

            return;

            }

            $from_date = $this->request->get['from_date'] ?? '';
            $to_date   = $this->request->get['to_date'] ?? '';

            $order_id  = $this->request->get['order_id'] ?? '';
            $mobile    = $this->request->get['mobile'] ?? '';
            $name      = $this->request->get['name'] ?? '';

            if (empty($from_date) || empty($to_date)) {

            $today = date('Y-m-d');

            $from_date = $today;
            $to_date   = $today;

            }

            $this->load->model('groceries/categories');

            $orders = $this->model_groceries_categories->getAllOrdersByDateRange(
            $from_date,
            $to_date,
            $order_id,
            $mobile,
            $name
            );

            $totals = $this->model_groceries_categories->getAllOrderTotalsByDateRange(
            $from_date,
            $to_date
            );

            $this->response->setOutput(json_encode([
            "status"       => "success",
            "total_orders" => count($orders),
            "totals"       => $totals,
            "data"         => $orders
            ]));

        }

            public function getTrackOrder(): void {

            $this->response->addHeader('Content-Type: application/json');

            $customer_id = $this->validateToken();

            if(!$customer_id){

            $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
            ]));

            return;

            }

            $order_id = (int)($this->request->get['order_id'] ?? 0);

            if(!$order_id){

            $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Order ID required"
            ]));

            return;

            }

            $this->load->model('groceries/categories');

            $data = $this->model_groceries_categories->getTrackOrder($order_id);

            $this->response->setOutput(json_encode([
            "status"=>"success",
            "data"=>$data
            ]));

        }

        public function updateTrackStatus(): void {

            $this->response->addHeader('Content-Type: application/json');

            $token = $this->validateToken();

            if(!$token){

            $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
            ]));

            return;

            }

            $order_id = $this->request->post['order_id'] ?? 0;
            $track_status_id = $this->request->post['track_status_id'] ?? 0;

            $this->load->model('groceries/categories');

            $this->model_groceries_categories->updateTrackStatus($order_id,$track_status_id);

            $this->response->setOutput(json_encode([
            "status"=>"success",
            "message"=>"Status updated"
            ]));

        }

        public function updateDeliveryTime(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user || $user['type'] != 'admin') {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));
        return;
    }

    $order_id = (int)($this->request->post['order_id'] ?? 0);

    $date = trim($this->request->post['date'] ?? '');
    $hours = trim($this->request->post['hours'] ?? '');
    $minutes = trim($this->request->post['minutes'] ?? '');
    $period = strtoupper(trim($this->request->post['period'] ?? ''));

    if (!$order_id || !$date || $hours === '' || $minutes === '') {
        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Order ID, Date, Hours and Minutes are required"
        ]));
        return;
    }

    $delivery_time = $date . ' ' .
        str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' .
        str_pad($minutes, 2, '0', STR_PAD_LEFT). ' ' .$period;

    $this->load->model('groceries/categories');

    $this->model_groceries_categories->updateDeliveryTime(
        $order_id,
        $delivery_time
    );

    $this->response->setOutput(json_encode([
        "status" => "success",
        "message" => "Delivery time updated successfully"
    ]));
}

        public function productStockReport(): void {

            $this->response->addHeader('Content-Type: application/json');

            if (!$this->validateToken()) {
                $this->response->setOutput(json_encode([
                    "status" => "error",
                    "message" => "Invalid Token"
                ]));
                return;
            }

            $this->load->model('groceries/categories');


            $search = $this->request->get['search'] ?? '';
            $page   = $this->request->get['page'] ?? 1;
            $limit  = $this->request->get['limit'] ?? 10;

            $start = ($page - 1) * $limit;

            $filter_data = [
                'search' => $search,
                'start' => $start,
                'limit' => $limit
            ];


            $products = $this->model_groceries_categories->getProductStockReport($filter_data);

            $category_totals = $this->model_groceries_categories->getCategoryWiseStockTotal();

            $this->response->setOutput(json_encode([
                "status" => "success",
                "products" => $products,
                "category_totals" => $category_totals,
                "pagination" => [
                    "page" => (int)$page,
                    "limit" => (int)$limit
                ]
            ]));
        }

        public function productProfitReport(): void {

    $this->response->addHeader('Content-Type: application/json');

    if (!$this->validateToken()) {

        $this->response->setOutput(json_encode([
            "status"=>"error",
            "message"=>"Invalid Token"
        ]));

        return;
    }

    $from_date = $this->request->get['from_date'] ?? date('Y-m-d');
    $to_date   = $this->request->get['to_date'] ?? date('Y-m-d');

    $this->load->model('groceries/categories');

    $products = $this->model_groceries_categories
        ->getProductProfitReport($from_date,$to_date);

    $grand_sales = 0;
$grand_profit = 0;
$total_profit = 0;
$total_loss = 0;

foreach ($products as $row) {

    $profit = (float)$row['total_profit'];

    $grand_sales += (float)$row['total_sales'];
    $grand_profit += $profit;

    if ($profit >= 0) {
        $total_profit += $profit;
    } else {
        $total_loss += $profit;
    }
}

    $this->response->setOutput(json_encode([
    "status"        => "success",
    "from_date"     => $from_date,
    "to_date"       => $to_date,
    "grand_sales"   => $grand_sales,
    "grand_profit"  => $grand_profit,   // Profit - Loss (Net)
    "total_profit"  => $total_profit,   // Only positive values
    "total_loss"    => $total_loss,     // Only negative values (absolute)
    "products"      => $products
]));
}

    public function sendUPIPayment(): void {

        $this->response->addHeader('Content-Type: application/json');

        if (!$this->validateToken()) {
            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));
            return;
        }

        $data = json_decode(file_get_contents("php://input"), true);

        $order_id = $data['order_id'] ?? 0;
        $amount   = $data['amount'] ?? 0;

        if (!$order_id || !$amount) {
            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid data"
            ]));
            return;
        }

        // ✅ Load your existing model
        $this->load->model('groceries/categories');

        $store = $this->model_groceries_categories->getStore();

        if (!$store || empty($store['upi'])) {
            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Store Details are Missing"
            ]));
            return;
        }

        $upi_id     = $store['upi'];
        $store_name = $store['name'];

        $upi_url = "upi://pay?pa=" . $upi_id .
                "&pn=" . urlencode($store_name) .
                "&am=" . (float)$amount .
                "&cu=INR" .
                "&tn=7337011206";

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data" => [
                "order_id"   => $order_id,
                "amount"     => (float)$amount,
                "upi_id"     => $upi_id,
                "store_name" => $store_name,
                "upi_url"    => $upi_url
            ]
        ]));
    }

    private function saveAgentTransactionImage(string $imageString): string {

    $dir = DIR_IMAGE . 'catalog/agent_transactions/';

    if (!is_dir($dir)) {

        mkdir($dir, 0777, true);
    }

    // UNIQUE FILE NAME
    $file = 'agent_' . date('YmdHis') . '_' . mt_rand(1000,9999) . '.jpg';

    $filepath = $dir . $file;

    $image = imagecreatefromstring(
        base64_decode($imageString)
    );

    if (!$image) {

        throw new \Exception('Image Decode Failed');
    }

    imagejpeg($image, $filepath, 90);

    imagedestroy($image);

    return 'catalog/agent_transactions/' . $file;
}

public function syncTodaySales(): void {

    $this->response->addHeader('Content-Type: application/json');

    // LOGIN AGENT
    $login_agent_id = $this->validateToken();

    if (!$login_agent_id) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        /*
        CASE 1:
        Logged-in agent syncs own sales
        => no agent_id sent

        CASE 2:
        Admin/another agent searches mobile
        => sends searched agent_id
        */

        $agent_id = (int)(
            $this->request->post['agent_id']
            ?? $this->request->get['agent_id']
            ?? 0
        );

        if (!$agent_id) {
            $agent_id = $login_agent_id;
        }

        $date = trim(
            $this->request->post['date']
            ?? $this->request->get['date']
            ?? ''
        );

        $this->load->model('groceries/categories');

        // SINGLE DATE
        if (!empty($date)) {

            $sales = $this->model_groceries_categories
                ->getSalesByDate($agent_id, $date);

        } else {

            // ALL DATES
            $sales = $this->model_groceries_categories
                ->getAllSalesGroupedByDate($agent_id);
        }

        if (empty($sales)) {

            throw new \Exception("No sales found");
        }

        $inserted = [];
        $skipped = [];

        foreach ($sales as $sale) {

            // CHECK DUPLICATE
            $exists = $this->model_groceries_categories
                ->checkAgentTransactionExists(
                    $agent_id,
                    $sale['sale_date']
                );

            // ALREADY EXISTS
            if ($exists) {

                $skipped[] = [
                    'date' => $sale['sale_date'],
                    'message' => 'Already Synced'
                ];

                continue;
            }

            // INSERT
            $image = $this->request->post['image']
    ?? $this->request->get['image']
    ?? null;

            $transaction_id = $this->model_groceries_categories
                ->addAgentTransaction([
                    'agent_id' => $agent_id,
                    'date' => $sale['sale_date'],
                    'amount' => $sale['total_amount'],
                    'image' => $image
                ]);

            $inserted[] = [
                'transaction_id' => $transaction_id,
                'date' => $sale['sale_date'],
                'amount' => $sale['total_amount']
            ];
        }

        $this->response->setOutput(json_encode([
            "status" => "success",
            "agent_id" => $agent_id,
            "inserted" => $inserted,
            "skipped" => $skipped
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function getSyncTransactions(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }


    $agent_id = (int)(
        $this->request->get['agent_id']
        ?? $this->request->post['agent_id']
        ?? 0
    );

    // SELF AGENT
    if (!$agent_id) {
        $agent_id = $user['id'];
    }

    $days = (int)($this->request->get['days'] ?? 7);

    $from_date = $this->request->get['from_date'] ?? '';
    $to_date   = $this->request->get['to_date'] ?? '';

    // DEFAULT LAST DAYS
    if (empty($from_date) || empty($to_date)) {

        $to_date = date('Y-m-d');

        $from_date = date(
            'Y-m-d',
            strtotime('-' . ($days - 1) . ' days')
        );
    }

    $this->load->model('groceries/categories');

    $transactions = $this->model_groceries_categories
        ->getGroupedSyncTransactions(
            $agent_id,
            $from_date,
            $to_date
        );

    $this->response->setOutput(json_encode([
        "status" => "success",
        "agent_id" => $agent_id,
        "from_date" => $from_date,
        "to_date" => $to_date,
        "data" => $transactions
    ]));
}

public function searchCustomerByMobile(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    // ONLY ADMIN CAN ACCESS
    if ($user['type'] != 'admin') {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Only admin can access this Feature"
        ]));

        return;
    }

    $mobile = trim(
        $this->request->get['mobile']
        ?? $this->request->post['mobile']
        ?? ''
    );

    if (!$mobile) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Mobile required"
        ]));

        return;
    }

    $this->load->model('groceries/categories');

    $customer = $this->model_groceries_categories
        ->getCustomerByMobile($mobile);

    if (!$customer) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Customer not found"
        ]));

        return;
    }

    $this->response->setOutput(json_encode([
        "status" => "success",
        "customer" => $customer
    ]));
}

public function addManualTransaction(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        /*
        ADMIN:
        can send agent_id

        STAFF:
        always uses own id
        */

        if ($user['type'] == 'admin') {

            $agent_id = (int)(
                $this->request->post['agent_id']
                ?? $this->request->get['agent_id']
                ?? 0
            );

            if (!$agent_id) {

                throw new \Exception("Agent ID required");
            }

        } else {

            // STAFF SELF ONLY
            $agent_id = $user['id'];
        }

        // AMOUNT
        $amount = (float)(
            $this->request->post['amount']
            ?? 0
        );

        // DATE
        $date = trim(
            $this->request->post['date']
            ?? date('Y-m-d')
        );

       $image = '';

        if (!empty($this->request->post['image'])) {

            $image = $this->saveAgentTransactionImage(
                $this->request->post['image']
            );
        }

        if (empty($image)) {

            throw new \Exception("Image is required");
        }
        

        if ($amount <= 0) {

            throw new \Exception("Invalid amount");
        }

        $this->load->model('groceries/categories');

        // CHECK EXISTING SAME DATE
        $existing = $this->model_groceries_categories
            ->getManualTransactionByDate(
                $agent_id,
                $date
            );

        // UPDATE EXISTING
        if ($existing) {

            $this->model_groceries_categories
                ->updateManualTransaction([
                    'id' => $existing['customer_transaction_id'],
                    'amount' => $amount,
                    'image' => $image
                ]);

            $this->response->setOutput(json_encode([
                "status" => "success",
                "message" => "Amount updated successfully",
                "transaction_id" => $existing['customer_transaction_id']
            ]));

            return;
        }

        // INSERT NEW


        $transaction_id = $this->model_groceries_categories
            ->addManualCustomerTransaction([
                'agent_id' => $agent_id,
                'amount' => $amount,
                'date_added' => $date,
                'image' => $image
            ]);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Transaction added",
            "transaction_id" => $transaction_id,
        
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function editManualTransaction(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        $id = (int)(
            $this->request->post['id']
            ?? 0
        );

        $amount = (float)(
            $this->request->post['amount']
            ?? 0
        );

        $date = trim(
            $this->request->post['date']
            ?? ''
        );

        if (!$id || $amount <= 0 || !$date) {

            throw new \Exception("Invalid data");
        }

        $image = '';

        if (!empty($this->request->post['image'])) {

            $image = $this->saveAgentTransactionImage(
                $this->request->post['image']
            );
        }

        $this->load->model('groceries/categories');

        $transaction = $this->model_groceries_categories
            ->getAgentTransaction($id);

        if (!$transaction) {

            throw new \Exception("Transaction not found");
        }

        /*
        STAFF:
        only pending editable
        */

        if (
            $user['type'] != 'admin'
            && $transaction['status'] == 'approved'
        ) {

            throw new \Exception(
                "Approved transaction cannot be edited"
            );
        }

     

        if (
            $user['type'] != 'admin'
            && $transaction['agent_id'] != $user['id']
        ) {

            throw new \Exception("Unauthorized");
        }

        $this->model_groceries_categories
            ->editAgentTransaction([
                'id' => $id,
                'amount' => $amount,
                'date' => $date,
                'image' => $image
            ]);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Transaction updated"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function deleteManualTransaction(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        $id = (int)(
            $this->request->post['id']
            ?? 0
        );

        if (!$id) {

            throw new \Exception("Transaction ID required");
        }

        $this->load->model('groceries/categories');

        $transaction = $this->model_groceries_categories
            ->getAgentTransaction($id);

        if (!$transaction) {

            throw new \Exception("Transaction not found");
        }

        /*
        STAFF:
        cannot delete approved
        */

        if (
            $user['type'] != 'admin'
            && $transaction['status'] == 'approved'
        ) {

            throw new \Exception(
                "Approved transaction cannot be deleted"
            );
        }

        /*
        STAFF OWN ONLY
        */

        if (
            $user['type'] != 'admin'
            && $transaction['agent_id'] != $user['id']
        ) {

            throw new \Exception("Unauthorized");
        }

        $this->model_groceries_categories
            ->deleteAgentTransaction($id);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Transaction deleted"
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}

public function approveManualTransaction(): void {

    $this->response->addHeader('Content-Type: application/json');

    $user = $this->validateToken();

    if (!$user) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => "Invalid Token"
        ]));

        return;
    }

    try {

        // ✅ ONLY ADMIN
        if ($user['type'] != 'admin') {

            throw new \Exception(
                "Only admin can approve transactions"
            );
        }

        $id = (int)(
            $this->request->post['id']
            ?? $this->request->get['id']
            ?? 0
        );

        if (!$id) {

            throw new \Exception(
                "Transaction ID required"
            );
        }

        $this->load->model('groceries/categories');

        // CHECK TRANSACTION
        $transaction = $this->model_groceries_categories
            ->getAgentTransaction($id);

        if (!$transaction) {

            throw new \Exception(
                "Transaction not found"
            );
        }

        // ALREADY APPROVED
        if ($transaction['status'] == 'approved') {

            throw new \Exception(
                "Transaction already approved"
            );
        }

        // APPROVE
        $this->model_groceries_categories
            ->approveAgentTransaction($id);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "message" => "Transaction approved successfully",
            "transaction_id" => $id
        ]));

    } catch (\Throwable $e) {

        $this->response->setOutput(json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]));
    }
}
    // Payment Methods API Endpoints

    public function addPaymentMethod(): void {

        $this->response->addHeader('Content-Type: application/json');

        $user = $this->validateToken();

        if (!$user) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        if (!$this->request->post) {

            $input = json_decode(file_get_contents("php://input"), true);
            $this->request->post = $input;
        }

        try {

            if (empty($this->request->post['name'])) {
                throw new \Exception("Name is required");
            }

            if (empty($this->request->post['store_id'])) {
                throw new \Exception("Store is required");
            }


            $this->load->model('groceries/categories');

            $payment_method_id = $this->model_groceries_categories->addPaymentMethod($this->request->post);

            $this->response->setOutput(json_encode([
                "status" => "success",
                "message" => "Payment method added successfully",
                "payment_method_id" => $payment_method_id
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

    public function editPaymentMethod(): void {

        $this->response->addHeader('Content-Type: application/json');

        $user = $this->validateToken();

        if (!$user) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        if (!$this->request->post) {

            $input = json_decode(file_get_contents("php://input"), true);
            $this->request->post = $input;
        }

        try {

            $payment_method_id = (int)($this->request->post['payment_method_id'] ?? 0);

            if (!$payment_method_id) {
                throw new \Exception("Payment method ID is required");
            }

            if (empty($this->request->post['name'])) {
                throw new \Exception("Name is required");
            }

            if (empty($this->request->post['store_id'])) {
                throw new \Exception("Store is required");
            }


            $this->load->model('groceries/categories');

            $this->model_groceries_categories->editPaymentMethod($payment_method_id, $this->request->post);

            $this->response->setOutput(json_encode([
                "status" => "success",
                "message" => "Payment method updated successfully"
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

    public function deletePaymentMethod(): void {

        $this->response->addHeader('Content-Type: application/json');

        $user = $this->validateToken();

        if (!$user) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        if (!$this->request->post) {

            $input = json_decode(file_get_contents("php://input"), true);
            $this->request->post = $input;
        }

        try {

            $payment_method_id = (int)($this->request->post['payment_method_id'] ?? 0);

            if (!$payment_method_id) {
                throw new \Exception("Payment method ID is required");
            }

            $this->load->model('groceries/categories');

            $this->model_groceries_categories->deletePaymentMethod($payment_method_id);

            $this->response->setOutput(json_encode([
                "status" => "success",
                "message" => "Payment method deleted successfully"
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

    public function getPaymentMethods(): void {
    $this->response->addHeader('Content-Type: application/json');
    $user = $this->validateToken();
    if (!$user) {
        $this->response->setOutput(json_encode(["status" => "error", "message" => "Invalid Token"]));
        return;
    }

    try {
        $this->load->model('groceries/categories');
        $data = array();

        if (!empty($this->request->get['store_id'])) {
            $data['store_id'] = $this->request->get['store_id'];
        }
        if (isset($this->request->get['sort']))  $data['sort']  = $this->request->get['sort'];
        if (isset($this->request->get['order'])) $data['order'] = $this->request->get['order'];
        if (isset($this->request->get['start'])) $data['start'] = $this->request->get['start'];
        if (isset($this->request->get['limit'])) $data['limit'] = $this->request->get['limit'];

        $payment_methods = $this->model_groceries_categories->getPaymentMethods($data);
        $total = $this->model_groceries_categories->getTotalPaymentMethods($data);

        $this->response->setOutput(json_encode([
            "status" => "success",
            "data" => $payment_methods,
            "total" => $total
        ]));
    } catch (\Exception $e) {
        $this->response->setOutput(json_encode(["status" => "error", "message" => $e->getMessage()]));
    }
}

    public function getPaymentMethod(): void {

        $this->response->addHeader('Content-Type: application/json');

        $user = $this->validateToken();

        if (!$user) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        try {

            $payment_method_id = (int)($this->request->get['payment_method_id'] ?? 0);

            if (!$payment_method_id) {
                throw new \Exception("Payment method ID is required");
            }

            $store_id = !empty($this->request->get['store_id']) ? (int)$this->request->get['store_id'] : null;

            $this->load->model('groceries/categories');

            $payment_method = $this->model_groceries_categories->getPaymentMethod($payment_method_id, $store_id);

            if (!$payment_method) {
                throw new \Exception("Payment method not found");
            }

            $this->response->setOutput(json_encode([
                "status" => "success",
                "data" => $payment_method
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

    // Order Cancellation Request API Endpoints

    public function requestOrderCancellation(): void {

        $this->response->addHeader('Content-Type: application/json');

        $customer_id = $this->validateToken();

        if (!$customer_id) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        if (!$this->request->post) {

            $input = json_decode(file_get_contents("php://input"), true);
            $this->request->post = $input;
        }
        

        try {

            if (empty($this->request->post['order_id'])) {
                throw new \Exception("Order ID is required");
            }

            if (empty($this->request->post['reason'])) {
                throw new \Exception("Reason is required");
            }

            $this->load->model('groceries/categories');

            // Check if order belongs to customer
            $order_query = $this->db->query("SELECT customer_id FROM `" . DB_PREFIX . "order` WHERE order_id = '" . (int)$this->request->post['order_id'] . "'");
            
            if (!$order_query->row || $order_query->row['customer_id'] != $customer_id['id']) {
                throw new \Exception("Order not found or does not belong to you");
            }

            // Check if cancellation request already exists for this order
            $existing_request = $this->model_groceries_categories->getCancellationRequests([
                'order_id' => $this->request->post['order_id'],
                'status' => 0
            ]);

            if ($existing_request) {
                throw new \Exception("Cancellation request already pending for this order");
            }

            $request_id = $this->model_groceries_categories->addCancellationRequest([
                'order_id' => $this->request->post['order_id'],
                'customer_id' => $customer_id['id'],
                'reason' => $this->request->post['reason']
            ]);

            $this->response->setOutput(json_encode([
                "status" => "success",
                "message" => "Cancellation request submitted successfully",
                "request_id" => $request_id
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

    public function getCancellationRequests(): void {

        $this->response->addHeader('Content-Type: application/json');

        $user = $this->validateToken();

        if (!$user) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        try {

            $this->load->model('groceries/categories');

            $data = array();

            if (!empty($this->request->get['order_id'])) {
                $data['order_id'] = $this->request->get['order_id'];
            }

            if (!empty($this->request->get['customer_id'])) {
                $data['customer_id'] = $this->request->get['customer_id'];
            }

            if (isset($this->request->get['status'])) {
                $data['status'] = $this->request->get['status'];
            }

            if (isset($this->request->get['start'])) {
                $data['start'] = $this->request->get['start'];
            }

            if (isset($this->request->get['limit'])) {
                $data['limit'] = $this->request->get['limit'];
            }

            $requests = $this->model_groceries_categories->getCancellationRequests($data);
            $total = $this->model_groceries_categories->getTotalCancellationRequests($data);

            $this->response->setOutput(json_encode([
                "status" => "success",
                "data" => $requests,
                "total" => $total
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

    public function approveCancellationRequest(): void {

        $this->response->addHeader('Content-Type: application/json');

        $user = $this->validateToken();

        if (!$user) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        if (!$this->request->post) {

            $input = json_decode(file_get_contents("php://input"), true);
            $this->request->post = $input;
        }

        try {

            if (empty($this->request->post['request_id'])) {
                throw new \Exception("Request ID is required");
            }

            if (empty($this->request->post['amount'])) {
                throw new \Exception("Refund amount is required");
            }

            $amount = (float)$this->request->post['amount'];
            if ($amount <= 0) {
                throw new \Exception("Amount must be greater than 0");
            }

            $this->load->model('groceries/categories');

            $request = $this->model_groceries_categories->getCancellationRequest($this->request->post['request_id']);

            if (!$request) {
                throw new \Exception("Cancellation request not found");
            }

            if ($request['status'] != 0) {
                throw new \Exception("Request already processed");
            }

            // Load checkout/order model for wallet operations
            $this->load->model('checkout/order');

            // Add refund amount to customer wallet
            $description = 'Order cancellation refund for order #' . $request['order_id'];
            $wallet_result = $this->model_checkout_order->adjustWallet(
                $request['customer_id'],
                $amount,
                'CREDIT',
                'TRADE',
                $description
            );

            if (!$wallet_result) {
                throw new \Exception("Failed to add refund to wallet");
            }

            // Update cancellation request status to approved
            $this->model_groceries_categories->updateCancellationRequest(
                $this->request->post['request_id'],
                1,
                $this->request->post['admin_comment'] ?? ''
            );

            // Update order status to 7 (cancelled)
            $this->model_groceries_categories->updateOrderStatus(
                $request['order_id'],
                7
            );

            $this->response->setOutput(json_encode([
                "status" => "success",
                "message" => "Cancellation request approved, refund added to wallet, and order status updated to cancelled"
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

    public function rejectCancellationRequest(): void {

        $this->response->addHeader('Content-Type: application/json');

        $user = $this->validateToken();

        if (!$user) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => "Invalid Token"
            ]));

            return;
        }

        if (!$this->request->post) {

            $input = json_decode(file_get_contents("php://input"), true);
            $this->request->post = $input;
        }

        try {

            if (empty($this->request->post['request_id'])) {
                throw new \Exception("Request ID is required");
            }

            $this->load->model('groceries/categories');

            $request = $this->model_groceries_categories->getCancellationRequest($this->request->post['request_id']);

            if (!$request) {
                throw new \Exception("Cancellation request not found");
            }

            if ($request['status'] != 0) {
                throw new \Exception("Request already processed");
            }

            // Update cancellation request status to rejected
            $this->model_groceries_categories->updateCancellationRequest(
                $this->request->post['request_id'],
                2,
                $this->request->post['admin_comment'] ?? ''
            );

            $this->response->setOutput(json_encode([
                "status" => "success",
                "message" => "Cancellation request rejected"
            ]));

        } catch (\Exception $e) {

            $this->response->setOutput(json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]));
        }
    }

}

