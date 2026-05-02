<?php
namespace Opencart\Catalog\Model\Groceries;

class Categories extends \Opencart\System\Engine\Model {

    public function loginCustomer($email, $password) {

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer` WHERE email = '" . $this->db->escape($email) . "' AND status = 1 LIMIT 1");

        if (!$query->num_rows) {
            return false;
        }

        $customer = $query->row;

        if (!password_verify($password, $customer['password'])) {
            return false;
        }

        $token = bin2hex(random_bytes(32));

        $this->db->query("UPDATE `" . DB_PREFIX . "customer` SET token = '" . $this->db->escape($token) . "' WHERE customer_id = '" . (int)$customer['customer_id'] . "'");

        return [
            "customer_id" => $customer['customer_id'],
            "token" => $token
        ];
    }

    public function validateToken($token) {

    $query = $this->db->query("SELECT customer_id FROM `" . DB_PREFIX . "customer` WHERE token = '" . $this->db->escape($token) . "' AND status = 1 LIMIT 1");

    if ($query->num_rows) {
        return $query->row['customer_id'];
    }

    return false;
}

    public function getMainCategories() {

        $sql = "SELECT * FROM `" . DB_PREFIX . "category` c
                JOIN `" . DB_PREFIX . "category_description` cd
                ON c.category_id = cd.category_id
                WHERE c.parent_id = 0
                AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        return $this->db->query($sql)->rows;
    }


    public function getAllProducts($start = 0, $limit = 30, $search = '') {

        $sql = "SELECT 
                p.product_id,
                p.price,
                p.image,
                p.special_price,
                pd.name,
                cd.name AS category_name,
                pp.*,
                ptp.piece_id,
                ps.piece
                FROM `" . DB_PREFIX . "product` p
                JOIN `" . DB_PREFIX . "product_description` pd
                ON p.product_id = pd.product_id
                LEFT JOIN " . DB_PREFIX . "pts_pos_product pp
                ON p.product_id = pp.product_id
                LEFT JOIN " . DB_PREFIX . "piece_to_product ptp
                ON p.product_id = ptp.product_id
                LEFT JOIN " . DB_PREFIX . "product_to_category pc ON p.product_id = pc.product_id
                LEFT JOIN " . DB_PREFIX . "category c ON pc.category_id = c.category_id
                LEFT JOIN " . DB_PREFIX . "category_description cd ON c.category_id = cd.category_id

                LEFT JOIN " . DB_PREFIX . "pieces ps
                ON ptp.piece_id = ps.piece_id
                WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        if(!empty($search)){
        $sql .= " AND pd.name LIKE '%".$this->db->escape($search)."%'";
        }

        $sql .= " ORDER BY p.product_id DESC";

        if(empty($search)){
        $sql .= " LIMIT " . (int)$start . ", " . (int)$limit;
        }

        return $this->db->query($sql)->rows;

        }

    public function getSubCategories($category_id) {

        $sql = "SELECT *
                FROM `" . DB_PREFIX . "category` c
                JOIN `" . DB_PREFIX . "category_description` cd
                ON c.category_id = cd.category_id
                WHERE c.parent_id = '" . (int)$category_id . "'
                AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        return $this->db->query($sql)->rows;
    }

    public function getProductsByCategory($category_id) {

        $sql = "SELECT *
                FROM `" . DB_PREFIX . "product_to_category` pc
                JOIN `" . DB_PREFIX . "product` p
                ON pc.product_id = p.product_id
                JOIN `" . DB_PREFIX . "product_description` pd
                ON p.product_id = pd.product_id
                WHERE pc.category_id = '" . (int)$category_id . "'
                AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        return $this->db->query($sql)->rows;
    }
    
    public function getProductsByParentCategory($category_id){

        $sql="SELECT
        
        p.product_id,
        pc.category_id,
        pd.name,
        p.price,
        p.image
        
        FROM " . DB_PREFIX . "product_to_category pc
        
        JOIN " . DB_PREFIX . "product p
        ON pc.product_id=p.product_id
        
        JOIN " . DB_PREFIX . "product_description pd
        ON p.product_id=pd.product_id WHERE
        
        (
        
        pc.category_id='".$this->db->escape($category_id)."'
        
        OR
        
        pc.category_id IN (SELECT category_id FROM ".DB_PREFIX."category WHERE parent_id='".$this->db->escape($category_id)."'))
        
        AND pd.language_id='".(int)$this->config->get('config_language_id')."'";
        
        return $this->db->query($sql)->rows;
    
    }

   public function getProductsOnly($category_id){

    $sql = "SELECT 
            p.product_id,
            p.price,
            p.special_price,
            p.image,
            pd.name,
            c.category_id,
            c.gst,
            pp.pos_status,
            pp.pos_quentity,
            ptp.piece_id,
            ps.piece

            FROM " . DB_PREFIX . "product_to_category pc

            JOIN " . DB_PREFIX . "product p
            ON pc.product_id = p.product_id

            JOIN " . DB_PREFIX . "product_description pd
            ON p.product_id = pd.product_id

            JOIN " . DB_PREFIX . "category c
            ON pc.category_id = c.category_id

            LEFT JOIN " . DB_PREFIX . "pts_pos_product pp
            ON p.product_id = pp.product_id

            LEFT JOIN " . DB_PREFIX . "piece_to_product ptp
            ON p.product_id = ptp.product_id

            LEFT JOIN " . DB_PREFIX . "pieces ps
            ON ptp.piece_id = ps.piece_id

            WHERE pc.category_id = '" . (int)$category_id . "'
            AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'

            ORDER BY p.date_added DESC";

    return $this->db->query($sql)->rows;
}
    
    public function getRandomProducts() {
        $sql = "SELECT *
        FROM `" . DB_PREFIX . "product` p
        JOIN `" . DB_PREFIX . "product_description` pd
            ON p.product_id = pd.product_id
        LEFT JOIN " . DB_PREFIX . "piece_to_product ptp
            ON p.product_id = ptp.product_id
            LEFT JOIN " . DB_PREFIX . "pts_pos_product pp
            ON p.product_id = pp.product_id

            LEFT JOIN " . DB_PREFIX . "pieces ps
            ON ptp.piece_id = ps.piece_id
        WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
        AND p.featured = '1'
        ORDER BY p.date_added DESC
        LIMIT 9";

        return $this->db->query($sql)->rows;
    }
        
        public function getOfferCategories() {

        $sql="SELECT *
        FROM `" . DB_PREFIX . "category` c
        JOIN `" . DB_PREFIX . "category_description` cd
        ON c.category_id=cd.category_id
        WHERE c.offer='1'
        AND c.status='1'
        AND cd.language_id='".(int)$this->config->get('config_language_id')."'";
        
        return $this->db->query($sql)->rows;
        
        }
        
        public function getOfferProducts($category_id){

        $sql="SELECT *
        FROM `" . DB_PREFIX . "product_to_category` pc
        
        JOIN `" . DB_PREFIX . "product` p
        ON pc.product_id=p.product_id
        
        JOIN `" . DB_PREFIX . "product_description` pd
        ON p.product_id=pd.product_id

        LEFT JOIN " . DB_PREFIX . "piece_to_product ptp
            ON p.product_id = ptp.product_id

            LEFT JOIN " . DB_PREFIX . "pieces ps
            ON ptp.piece_id = ps.piece_id
        LEFT JOIN " . DB_PREFIX . "pts_pos_product pp
            ON p.product_id = pp.product_id
        WHERE pc.category_id='".(int)$category_id."'
        
        AND pd.language_id='".(int)$this->config->get('config_language_id')."'
        
        ORDER BY p.date_added DESC";
        return $this->db->query($sql)->rows;
    }

public function getProductDetails($product_id){

    $sql = "SELECT 
            p.*,
            pp.*,
            ps.*,
            pd.name,
            pd.description
            
            FROM `" . DB_PREFIX . "product` p
            
            JOIN `" . DB_PREFIX . "product_description` pd
            ON p.product_id = pd.product_id
            
            LEFT JOIN " . DB_PREFIX . "pts_pos_product pp
            ON p.product_id = pp.product_id
            LEFT JOIN " . DB_PREFIX . "piece_to_product ptp
            ON p.product_id = ptp.product_id

            LEFT JOIN " . DB_PREFIX . "pieces ps
            ON ptp.piece_id = ps.piece_id
            
            WHERE p.product_id = '" . (int)$product_id . "'
            
            AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

    return $this->db->query($sql)->row;
}

public function getRelatedProducts($product_id){

    $sql = "SELECT 
            p.product_id,
            p.price,
            p.image,
            pd.name,
            pp.*,
            ps.*

            FROM `" . DB_PREFIX . "product_related` pr

            JOIN `" . DB_PREFIX . "product` p
            ON pr.related_id = p.product_id

            JOIN `" . DB_PREFIX . "product_description` pd
            ON p.product_id = pd.product_id
            LEFT JOIN " . DB_PREFIX . "pts_pos_product pp
            ON p.product_id = pp.product_id
            LEFT JOIN " . DB_PREFIX . "piece_to_product ptp
            ON p.product_id = ptp.product_id

            LEFT JOIN " . DB_PREFIX . "pieces ps
            ON ptp.piece_id = ps.piece_id

            WHERE pr.product_id = '" . (int)$product_id . "'

            AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

    return $this->db->query($sql)->rows;
}

public function loginCustomerOtp($telephone) {

    $telephone = trim($telephone);

    if (!$telephone) {
        return [
            'status' => false,
            'message' => 'Telephone is required'
        ];
    }

    // CHECK CUSTOMER EXISTS
    $query = $this->db->query(
        "SELECT customer_id 
         FROM " . DB_PREFIX . "customer 
         WHERE telephone = '" . $this->db->escape($telephone) . "' 
         AND status = '1' 
         LIMIT 1"
    );

    if ($query->num_rows) {

        $customer_id = $query->row['customer_id'];

    } else {

        // DEFAULT PASSWORD
        $password = password_hash('Admin@123', PASSWORD_DEFAULT);

        // INSERT CUSTOMER (EMPTY FIELDS)
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "customer SET
            firstname = '',
            lastname  = '',
            email     = '',
            telephone = '" . $this->db->escape($telephone) . "',
            password  = '" . $this->db->escape($password) . "',
            newsletter = '0',
            language_id = '1',
            customer_group_id = '1',
            store_id = '3',
            status = '1',
            date_added = NOW()"
        );

        $customer_id = $this->db->getLastId();
    }

    // GENERATE TOKEN
    $token = bin2hex(random_bytes(32));

    $this->db->query(
        "UPDATE " . DB_PREFIX . "customer 
         SET token = '" . $this->db->escape($token) . "' 
         WHERE customer_id = '" . (int)$customer_id . "'"
    );

    return [
        'status' => true,
        'message' => 'Login successful',
        'customer_id' => $customer_id,
        
        'token' => $token
    ];
}

public function logoutCustomer($token) {

    $query = $this->db->query("
        SELECT customer_id 
        FROM " . DB_PREFIX . "customer
        WHERE token = '" . $this->db->escape($token) . "'
        LIMIT 1
    ");

    if (!$query->num_rows) {
        return false;
    }

    $this->db->query("
        UPDATE " . DB_PREFIX . "customer 
        SET token = '' 
        WHERE customer_id = '" . (int)$query->row['customer_id'] . "'
    ");

    return true;
}

public function addCategory($data): int {


$this->db->query("INSERT INTO `" . DB_PREFIX . "category` SET

image='".$this->db->escape($data['image'])."',

parent_id='".(int)$data['parent_id']."',

offer='".(int)$data['offer']."',

offer_from=".(!empty($data['offer_from']) ? "'".$this->db->escape($data['offer_from'])."'" : "NULL").",

offer_to=".(!empty($data['offer_to']) ? "'".$this->db->escape($data['offer_to'])."'" : "NULL").",

offer_percentage='".(float)$data['offer_percentage']."',

gst='".(float)$data['gst']."',

sort_order='".(int)$data['sort_order']."',

status='".(int)$data['status']."'
");

$category_id = (int)$this->db->getLastId();

/* DESCRIPTION TABLE */

$this->db->query("INSERT INTO `" . DB_PREFIX . "category_description` SET

category_id='".(int)$category_id."',

language_id='".(int)$this->config->get('config_language_id')."',

name='".$this->db->escape($data['name'])."',

description='',

meta_title='".$this->db->escape($data['name'])."',

meta_description='',

meta_keyword=''
");

/* STORE */

$this->db->query("INSERT INTO `" . DB_PREFIX . "category_to_store` SET

category_id='".(int)$category_id."',

store_id='0'
");

/* PATH */

$this->db->query("INSERT INTO `" . DB_PREFIX . "category_path` SET

category_id='".(int)$category_id."',

path_id='".(int)$category_id."',

level='0'
");

return $category_id;

}

public function categoryExists(string $name): bool {

    $query = $this->db->query("
        SELECT category_id 
        FROM `" . DB_PREFIX . "category_description`
        WHERE LOWER(name) = LOWER('" . $this->db->escape(trim($name)) . "')
        AND language_id = '" . (int)$this->config->get('config_language_id') . "'
        LIMIT 1
    ");

    return $query->num_rows > 0;
}
public function getCategories(): array {

    $sql = "SELECT 

    cp.category_id,
    c.image,
    GROUP_CONCAT(cd.name ORDER BY cp.level SEPARATOR ' > ') AS name,
    c.parent_id

    FROM " . DB_PREFIX . "category_path cp

    LEFT JOIN " . DB_PREFIX . "category c
    ON cp.category_id = c.category_id

    LEFT JOIN " . DB_PREFIX . "category_description cd
    ON cp.path_id = cd.category_id

    WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "'
    AND c.status = 1

    GROUP BY cp.category_id

    ORDER BY name ASC";

    $query = $this->db->query($sql);

    return $query->rows;

}

public function editCategory($category_id, $data) {

    $query = $this->db->query("
        SELECT category_id 
        FROM " . DB_PREFIX . "category 
        WHERE category_id = '" . (int)$category_id . "'
    ");

    if (!$query->num_rows) {
        return false;
    }

    $sql = "UPDATE " . DB_PREFIX . "category SET
        parent_id = '" . (int)$data['parent_id'] . "',
        offer = '" . (int)$data['offer'] . "',
        offer_from = " . (!empty($data['offer_from']) ? "'" . $this->db->escape($data['offer_from']) . "'" : "NULL") . ",
        offer_to = " . (!empty($data['offer_to']) ? "'" . $this->db->escape($data['offer_to']) . "'" : "NULL") . ",
        offer_percentage = '" . (float)$data['offer_percentage'] . "',
        gst = '" . (float)$data['gst'] . "',
        sort_order = '" . (int)$data['sort_order'] . "',
        status = '" . (int)$data['status'] . "'";

    if (!empty($data['image'])) {
        $sql .= ", image = '" . $this->db->escape($data['image']) . "'";
    }

    $sql .= " WHERE category_id = '" . (int)$category_id . "'";

    $this->db->query($sql);

    // UPDATE NAME
    $this->db->query("
        UPDATE " . DB_PREFIX . "category_description SET
        name = '" . $this->db->escape($data['name']) . "'
        WHERE category_id = '" . (int)$category_id . "'
        AND language_id = '" . (int)$this->config->get('config_language_id') . "'
    ");

    return true;
}

public function deleteCategory($category_id) {

    $query = $this->db->query("
        SELECT category_id 
        FROM " . DB_PREFIX . "category 
        WHERE category_id = '" . (int)$category_id . "'
    ");

    if (!$query->num_rows) {
        return false;
    }

    // DELETE FROM MAIN TABLE
    $this->db->query("DELETE FROM " . DB_PREFIX . "category WHERE category_id = '" . (int)$category_id . "'");

    // DELETE DESCRIPTION
    $this->db->query("DELETE FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'");

    // DELETE PATH
    $this->db->query("DELETE FROM " . DB_PREFIX . "category_path WHERE category_id = '" . (int)$category_id . "'");
 
    // DELETE STORE
    $this->db->query("DELETE FROM " . DB_PREFIX . "category_to_store WHERE category_id = '" . (int)$category_id . "'");

    return true;
}


public function getFullOrderDetails(int $order_id) {

    $order = $this->db->query("
        SELECT 
            o.*,
            os.name AS order_status
        FROM `" . DB_PREFIX . "order` o
        LEFT JOIN `" . DB_PREFIX . "order_status` os
            ON os.order_status_id = o.order_status_id
            AND os.language_id = '" . (int)$this->config->get('config_language_id') . "'
        WHERE o.order_id = '" . (int)$order_id . "'
    ")->row;

    if (!$order) {
        return false;
    }

    // Products
    $products = $this->db->query("
        SELECT *
        FROM `" . DB_PREFIX . "order_product`
        WHERE order_id = '" . (int)$order_id . "'
    ")->rows;

    // Totals
    $totals = $this->db->query("
        SELECT *
        FROM `" . DB_PREFIX . "order_total`
        WHERE order_id = '" . (int)$order_id . "'
        ORDER BY sort_order
    ")->rows;

    // Invoice
    $invoice = $this->db->query("
        SELECT *
        FROM `" . DB_PREFIX . "order_invoice`
        WHERE order_id = '" . (int)$order_id . "'
    ")->row;

    // Tax
    $tax = $this->db->query("
        SELECT *
        FROM `" . DB_PREFIX . "order_tax_details`
        WHERE order_id = '" . (int)$order_id . "'
    ")->rows;

    // History
    $history = $this->db->query("
        SELECT 
            oh.*,
            os.name AS status_name
        FROM `" . DB_PREFIX . "order_history` oh
        LEFT JOIN `" . DB_PREFIX . "order_status` os
            ON os.order_status_id = oh.order_status_id
            AND os.language_id = '" . (int)$this->config->get('config_language_id') . "'
        WHERE oh.order_id = '" . (int)$order_id . "'
        ORDER BY oh.date_added DESC
    ")->rows;

    return [
        'order_info'  => $order,
        'products'    => $products,
        'totals'      => $totals,
        'invoice'     => $invoice,
        'tax_details' => $tax,
        'history'     => $history
    ];
}



public function getOrdersByDateRange($agentId, $from_date = '', $to_date = '', $order_id = '', $mobile = '', $name = '') {

    $sql = "SELECT o.order_id FROM `" . DB_PREFIX . "order` o WHERE o.customer_group_id = '" . (int)$agentId . "'";
    $isSearch = !empty($order_id) || !empty($mobile) || !empty($name);

    if (!$isSearch && !empty($from_date) && !empty($to_date)) {
        $sql .= " AND DATE(o.date_added) >= '" . $this->db->escape($from_date) . "'";
        $sql .= " AND DATE(o.date_added) <= '" . $this->db->escape($to_date) . "'";
    }

    if (!empty($order_id)) {
        $sql .= " AND o.order_id LIKE '%" . $this->db->escape($order_id) . "%'";
    }

    if (!empty($mobile)) {
        $sql .= " AND o.telephone LIKE '%" . $this->db->escape($mobile) . "%'";
    }
    if (!empty($name)) {
        $sql .= " AND (
            o.firstname LIKE '%" . $this->db->escape($name) . "%'
            OR o.lastname LIKE '%" . $this->db->escape($name) . "%'
            OR CONCAT(o.firstname,' ',o.lastname) LIKE '%" . $this->db->escape($name) . "%'
        )";
    }

    $sql .= " ORDER BY o.order_id DESC";

    $orders = $this->db->query($sql)->rows;

    $full = [];

    foreach ($orders as $order) {
        $full[] = $this->getFullOrderDetails((int)$order['order_id']);
    }

    return $full;
}


public function getOrderTotalsByDateRange($from_date, $to_date, $agentId) {

    $sql = " SELECT

        /* STATUS 5 CASH */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 5 
                THEN (oi.cash_amount - 
                        CASE 
                            WHEN oi.cash_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status5_cash,


        /* STATUS 5 UPI */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 5 
                THEN (oi.upi_amount - 
                        CASE 
                            WHEN oi.upi_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status5_upi,


        /* STATUS 6 CASH */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 6 
                THEN (oi.cash_amount - 
                        CASE 
                            WHEN oi.cash_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status6_cash,


        /* STATUS 6 UPI */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 6 
                THEN (oi.upi_amount - 
                        CASE 
                            WHEN oi.upi_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status6_upi,


        /* OTHER TOTALS */

        COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.sub_total 
        ELSE 0 
    END
),0) AS status5_subtotal,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.sub_total 
        ELSE 0 
    END
),0) AS status6_subtotal,


COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.total_received 
        ELSE 0 
    END
),0) AS status5_total_received,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.total_received 
        ELSE 0 
    END
),0) AS status6_total_received,


COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.returnable_balance 
        ELSE 0 
    END
),0) AS status5_returnable,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.returnable_balance 
        ELSE 0 
    END
),0) AS status6_returnable,


COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.balance 
        ELSE 0 
    END
),0) AS status5_balance,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.balance 
        ELSE 0 
    END
),0) AS status6_balance

        FROM `" . DB_PREFIX . "order` o

        INNER JOIN `" . DB_PREFIX . "order_invoice` oi
        ON oi.order_id = o.order_id

        WHERE DATE(o.date_added) >= '" . $this->db->escape($from_date) . "'
        AND DATE(o.date_added) <= '" . $this->db->escape($to_date) . "'
        AND o.customer_group_id = '" . (int)$agentId . "'
    ";

    return $this->db->query($sql)->row;
}

public function addPiece($piece) {

        $this->db->query("INSERT INTO " . DB_PREFIX . "pieces 
        SET piece = '" . $this->db->escape($piece) . "',
        status = '1',
        date_added = NOW()");

        return $this->db->getLastId();
    }
    
    public function getPieces() {

    $query = $this->db->query("
        SELECT piece_id, piece 
        FROM " . DB_PREFIX . "pieces
        WHERE status = '1'
        ORDER BY piece ASC
    ");

    return $query->rows;
}

public function pieceExists($piece): bool {

    $query = $this->db->query("
        SELECT piece_id 
        FROM " . DB_PREFIX . "pieces
        WHERE LOWER(piece) = LOWER('" . $this->db->escape(trim($piece)) . "')
        LIMIT 1
    ");

    return $query->num_rows > 0;
}

public function addAddress($data){

// If new address is default → remove old default
if(!empty($data['default'])){

$this->db->query("
UPDATE ".DB_PREFIX."address 
SET `default`='0'
WHERE customer_id='".(int)$data['customer_id']."'
");

}

    $this->db->query("INSERT INTO " . DB_PREFIX . "address SET
        customer_id='".(int)$data['customer_id']."',
        firstname='".$this->db->escape($data['firstname'])."',
        lastname='".$this->db->escape($data['lastname'])."',
        contact='".$this->db->escape($data['contact'])."',
        company='".$this->db->escape($data['company'])."',
        address_1='".$this->db->escape($data['address_1'])."',
        address_2='".$this->db->escape($data['address_2'])."',
        city='".$this->db->escape($data['city'])."',
        postcode='".$this->db->escape($data['postcode'])."',
        country_id='".(int)$data['country_id']."',
        zone_id='".(int)$data['zone_id']."',
        custom_field='',
        `default`='".(int)$data['default']."',
        tracking='".$this->db->escape(isset($data['tracking']) ? $data['tracking'] : '')."'
        ");

return $this->db->getLastId();

}

public function getAddress($customer_id,$telephone='',$address_id=0){

    $sql = "SELECT

            a.*,
            c.telephone
            
            FROM ".DB_PREFIX."address a
            
            JOIN ".DB_PREFIX."customer c
            ON a.customer_id = c.customer_id
            
            WHERE a.customer_id='".(int)$customer_id."'
            ";
            
            if(!empty($telephone)){
            $sql .= " AND c.telephone='".$this->db->escape($telephone)."'";
            }
            
            if(!empty($address_id)){
            $sql .= " AND a.address_id='".(int)$address_id."'";
            }
            
            $sql .= " ORDER BY a.address_id DESC";
            
            $query = $this->db->query($sql);
            
            return $query->rows;
            
    }
    
public function editAddress($customer_id,$address_id,$data){

$query = $this->db->query("
SELECT address_id
FROM ".DB_PREFIX."address
WHERE address_id='".(int)$address_id."'
AND customer_id='".(int)$customer_id."'
");

if(!$query->num_rows){
return false;
}

// If setting this address as default → remove previous default
if(!empty($data['default'])){

$this->db->query("
UPDATE ".DB_PREFIX."address
SET `default`='0'
WHERE customer_id='".(int)$customer_id."'
");

}

$this->db->query("
UPDATE ".DB_PREFIX."address SET

firstname='".$this->db->escape($data['firstname'])."',
lastname='".$this->db->escape($data['lastname'])."',
contact='".$this->db->escape($data['contact'])."',
company='".$this->db->escape($data['company'])."',
address_1='".$this->db->escape($data['address_1'])."',
address_2='".$this->db->escape($data['address_2'])."',
city='".$this->db->escape($data['city'])."',
postcode='".$this->db->escape($data['postcode'])."',
country_id='".(int)$data['country_id']."',
zone_id='".(int)$data['zone_id']."',
`default`='".(int)$data['default']."'

WHERE address_id='".(int)$address_id."'
AND customer_id='".(int)$customer_id."'
");

return true;

}

public function deleteAddress($customer_id,$address_id){

    $query = $this->db->query("SELECT address_id FROM ".DB_PREFIX."address WHERE address_id='".(int)$address_id."' AND customer_id='".(int)$customer_id."'");

        if(!$query->num_rows){
        return false;
        }

    $this->db->query("DELETE FROM ".DB_PREFIX."address WHERE address_id='".(int)$address_id."' AND customer_id='".(int)$customer_id."'");

    return true;

 }

 public function getZoneByPostcode($postcode){

$query = $this->db->query("
SELECT zone_id 
FROM ".DB_PREFIX."zone 
WHERE code='".$this->db->escape($postcode)."'
AND status='1'
LIMIT 1
");

if($query->num_rows){
return $query->row['zone_id'];
}

return 0;

}

public function checkZoneAvailability($postcode){

$query = $this->db->query("
SELECT z.zone_id, zd.name
FROM ".DB_PREFIX."zone z
LEFT JOIN ".DB_PREFIX."zone_description zd
ON z.zone_id = zd.zone_id
WHERE z.code='".$this->db->escape($postcode)."'
AND z.status='1'
LIMIT 1
");

return $query->row;

}

public function getCoupon($customer_id){

    $query = $this->db->query("SELECT *  FROM " . DB_PREFIX . "coupon WHERE status = '1'");

    return $query->rows;
 }
 
 public function addStore($data){

    $this->db->query("INSERT INTO " . DB_PREFIX . "store SET
                                                    name = '" . $this->db->escape($data['name']) . "',
                                                    url  = '" . $this->db->escape($data['url']) . "',
                                                    logo = '" . $this->db->escape($data['logo']) . "',
                                                    contact = '" . $this->db->escape($data['contact']) . "',
                                                    min_order_value = '" . $this->db->escape($data['min_order_value']) . "'
                                                ");

        return $this->db->getLastId();
    }
    
    public function editStore($store_id,$data){

        $sql = "UPDATE " . DB_PREFIX . "store SET
            name = '" . $this->db->escape($data['name']) . "',
            url  = '" . $this->db->escape($data['url']) . "',
            contact = '" . $this->db->escape($data['contact']) . "',
            min_order_value = '" . $this->db->escape($data['min_order_value']) . "'";
    
        if(!empty($data['logo'])){
            $sql .= ", logo = '" . $this->db->escape($data['logo']) . "'";
        }
    
        $sql .= " WHERE store_id = '" . (int)$store_id . "'";
    
        $this->db->query($sql);
    }
    
    public function getStores(){

            $query = $this->db->query("
                SELECT *
                FROM " . DB_PREFIX . "store
                ORDER BY store_id DESC
            ");
        
            return $query->rows;
    }
    
    public function getStore(){

    $query = $this->db->query("
        SELECT *
        FROM " . DB_PREFIX . "store
        ORDER BY store_id DESC
        LIMIT 1
    ");

    return $query->row;
}
    public function addAgent($data){

        /* CUSTOMER */
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "customer` SET
        store_id = '" . (int)$data['store_id'] . "',
        language_id = '1',
        customer_group_id = '2',
        firstname = '" . $this->db->escape($data['firstname']) . "',
        lastname = '" . $this->db->escape($data['lastname']) . "',
        email = '" . $this->db->escape($data['email']) . "',
        telephone = '" . $this->db->escape($data['telephone']) . "',
        password = '" . $this->db->escape(password_hash($data['password'], PASSWORD_DEFAULT)) . "',
        status = '1',
        date_added = NOW()");
        
        $customer_id = $this->db->getLastId();
        
        
        /* PAN KYC */
        
        if (!empty($data['kycpanidno']) && !empty($data['kycpanimage'])) {
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
        customerid = '" . (int)$customer_id . "',
        idno = '" . $this->db->escape($data['kycpanidno']) . "',
        image = '" . $this->db->escape($data['kycpanimage']) . "',
        idtype = '1'");
        
        }
        
        
        /* AADHAR KYC */
        
        if (!empty($data['kycaadharidno']) && !empty($data['kycaadharimage'])) {
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
        customerid = '" . (int)$customer_id . "',
        idno = '" . $this->db->escape($data['kycaadharidno']) . "',
        image = '" . $this->db->escape($data['kycaadharimage']) . "',
        idtype = '2'");
        
        }
        
        
        /* PROFILE IMAGE */
        
        if (!empty($data['kycprofileimage'])) {
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
        customerid = '" . (int)$customer_id . "',
        idno = '',
        image = '" . $this->db->escape($data['kycprofileimage']) . "',
        idtype = '3'");
        
        }
        
        
        /* SHOP IMAGE */
        
        if (!empty($data['kycshopimage'])) {
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
        customerid = '" . (int)$customer_id . "',
        idno = '',
        image = '" . $this->db->escape($data['kycshopimage']) . "',
        idtype = '4'");
        
        }
        
        
        /* INSERT AGENT */
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "pts_pos_agent` SET
        customer_id = '" . (int)$customer_id . "',
        agent_status = '2',
        wallet = '0',
        return_order = '0',
        cancel_order = '0',
        delete_order = '0',
        date_added = NOW(),
        date_updated = NOW()");
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "manage_wallet` SET
        user_id = 0,
        customerid = '" . (int)$customer_id . "',
        amount = '0',
        aeps_amount = '0',
        pre_amount = '0',
        apiwallet = '0',
        plan_limit = '0',
        sms_limit = '0',
        pg_amount = '0'");
        
        return $customer_id;
        
        }
        
        
        public function editAgent($customer_id,$data){

            $this->db->query("UPDATE `" . DB_PREFIX . "customer` SET
            store_id = '" . (int)$data['store_id'] . "',
            firstname = '" . $this->db->escape($data['firstname']) . "',
            lastname = '" . $this->db->escape($data['lastname']) . "',
            email = '" . $this->db->escape($data['email']) . "',
            telephone = '" . $this->db->escape($data['telephone']) . "'
            WHERE customer_id = '".(int)$customer_id."'");

            
            if(!empty($data['password'])){
            
            $this->db->query("UPDATE `" . DB_PREFIX . "customer` SET
            password = '".$this->db->escape(password_hash($data['password'], PASSWORD_DEFAULT))."'
            WHERE customer_id = '".(int)$customer_id."'");
            
            }
 
            
            if(!empty($data['kycpanidno'])){
            
            $this->db->query("DELETE FROM `" . DB_PREFIX . "kyc_images`
            WHERE customerid='".(int)$customer_id."' AND idtype='1'");
            
            $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
            customerid='".(int)$customer_id."',
            idno='".$this->db->escape($data['kycpanidno'])."',
            image='".$this->db->escape($data['kycpanimage'])."',
            idtype='1'");
            }
            
 
            
            if(!empty($data['kycaadharidno'])){
            
            $this->db->query("DELETE FROM `" . DB_PREFIX . "kyc_images`
            WHERE customerid='".(int)$customer_id."' AND idtype='2'");
            
            $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
            customerid='".(int)$customer_id."',
            idno='".$this->db->escape($data['kycaadharidno'])."',
            image='".$this->db->escape($data['kycaadharimage'])."',
            idtype='2'");
            }
            
            
            /* UPDATE PROFILE */
            
            if(!empty($data['kycprofileimage'])){
            
            $this->db->query("DELETE FROM `" . DB_PREFIX . "kyc_images`
            WHERE customerid='".(int)$customer_id."' AND idtype='3'");
            
            $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
            customerid='".(int)$customer_id."',
            idno='',
            image='".$this->db->escape($data['kycprofileimage'])."',
            idtype='3'");
            }
            
            
            /* UPDATE SHOP */
            
            if(!empty($data['kycshopimage'])){
            
            $this->db->query("DELETE FROM `" . DB_PREFIX . "kyc_images`
            WHERE customerid='".(int)$customer_id."' AND idtype='4'");
            
            $this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
            customerid='".(int)$customer_id."',
            idno='',
            image='".$this->db->escape($data['kycshopimage'])."',
            idtype='4'");
            }
            
            return true;
            
            }
            
        public function getAgents($store_id,$customer_id = 0){

/* SINGLE AGENT */

if($customer_id){

$query = $this->db->query("SELECT
c.customer_id,
c.firstname,
c.lastname,
c.email,
c.telephone,
c.store_id,
s.name AS store_name,
s.logo AS store_logo,
a.agent_status
FROM " . DB_PREFIX . "customer c
LEFT JOIN " . DB_PREFIX . "store s
ON c.store_id = s.store_id
LEFT JOIN " . DB_PREFIX . "pts_pos_agent a
ON c.customer_id = a.customer_id
WHERE c.customer_group_id='2'
AND c.store_id='".(int)$store_id."'
AND c.customer_id='".(int)$customer_id."'");

$agent = $query->row;

/* GET KYC */

$kyc = $this->db->query("SELECT idtype,idno,image
FROM " . DB_PREFIX . "kyc_images
WHERE customerid='".(int)$customer_id."'");

$agent['kyc'] = $kyc->rows;

return $agent;

}


/* ALL AGENTS */

$query = $this->db->query("SELECT
c.customer_id,
c.firstname,
c.lastname,
c.email,
c.telephone,
c.store_id,
s.name AS store_name,
s.logo AS store_logo,
a.agent_status
FROM " . DB_PREFIX . "customer c
LEFT JOIN " . DB_PREFIX . "store s
ON c.store_id = s.store_id
LEFT JOIN " . DB_PREFIX . "pts_pos_agent a
ON c.customer_id = a.customer_id
WHERE c.customer_group_id='2'
AND c.store_id='".(int)$store_id."'
ORDER BY c.customer_id DESC");

$agents = $query->rows;

foreach($agents as &$agent){

$kyc = $this->db->query("SELECT idtype,idno,image
FROM " . DB_PREFIX . "kyc_images
WHERE customerid='".(int)$agent['customer_id']."'");

$agent['kyc'] = $kyc->rows;

}

/* TOTAL AGENTS */

$total = count($agents);

return [

"total_agents"=>$total,

"agents"=>$agents

];

}

public function addCustomer($data){

/* CUSTOMER */

$this->db->query("INSERT INTO `" . DB_PREFIX . "customer` SET
store_id = '0',
language_id = '1',
customer_group_id = '1',
firstname = '" . $this->db->escape($data['firstname']) . "',
lastname = '" . $this->db->escape($data['lastname']) . "',
email = '" . $this->db->escape($data['email']) . "',
telephone = '" . $this->db->escape($data['telephone']) . "',
password = '" . $this->db->escape(password_hash($data['password'], PASSWORD_DEFAULT)) . "',
status = '1',
date_added = NOW()");

$customer_id = $this->db->getLastId();


/* PAN KYC */

if (!empty($data['kycpanidno']) && !empty($data['kycpanimage'])) {

$this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
customerid = '" . (int)$customer_id . "',
idno = '" . $this->db->escape($data['kycpanidno']) . "',
image = '" . $this->db->escape($data['kycpanimage']) . "',
idtype = '1'");

}


/* AADHAR KYC */

if (!empty($data['kycaadharidno']) && !empty($data['kycaadharimage'])) {

$this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
customerid = '" . (int)$customer_id . "',
idno = '" . $this->db->escape($data['kycaadharidno']) . "',
image = '" . $this->db->escape($data['kycaadharimage']) . "',
idtype = '2'");

}


/* PROFILE IMAGE */

if (!empty($data['kycprofileimage'])) {

$this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
customerid = '" . (int)$customer_id . "',
idno = '',
image = '" . $this->db->escape($data['kycprofileimage']) . "',
idtype = '3'");

}


/* SHOP IMAGE */

if (!empty($data['kycshopimage'])) {

$this->db->query("INSERT INTO `" . DB_PREFIX . "kyc_images` SET
customerid = '" . (int)$customer_id . "',
idno = '',
image = '" . $this->db->escape($data['kycshopimage']) . "',
idtype = '4'");

}


/* WALLET */

$this->db->query("INSERT INTO `" . DB_PREFIX . "manage_wallet` SET
user_id = NULL,
customerid = '" . (int)$customer_id . "',
amount = '0',
aeps_amount = '0',
pre_amount = '0',
apiwallet = '0',
plan_limit = '0',
sms_limit = '0',
pg_amount = '0'");

return $customer_id;

}

public function getCustomerByIdAndPhone($agentId, $telephone) {

        $query = $this->db->query("
            SELECT customer_id 
            FROM " . DB_PREFIX . "customer 
            WHERE customer_id = '" . (int)$agentId . "'
            AND telephone = '" . $this->db->escape($telephone) . "'
            LIMIT 1
        ");

        return $query->row ?? false;
    }

    // UPDATE PROFILE
    public function updateCustomerProfile($customer_id, $firstname, $lastname, $email) {

        $this->db->query("
            UPDATE " . DB_PREFIX . "customer SET
            firstname = '" . $this->db->escape($firstname) . "',
            lastname  = '" . $this->db->escape($lastname) . "',
            email     = '" . $this->db->escape($email) . "'
            WHERE customer_id = '" . (int)$customer_id . "'
        ");
    }

    // INSERT IMAGE
    public function insertKycImage($customer_id, $image_path) {

        $this->db->query("
            INSERT INTO xwzk_kyc_images SET
            customerid = '" . (int)$customer_id . "',
            image = '" . $this->db->escape($image_path) . "',
            idtype = 'profile',
            sort_order = 1
        ");
    }
    public function getCustomerProfile($agentId){

    $customer = $this->db->query("
        SELECT 
            c.customer_id,
            c.firstname,
            c.lastname,
            c.email,
            c.telephone,
            c.store_id,
            s.*
        FROM " . DB_PREFIX . "customer c
        LEFT JOIN " . DB_PREFIX . "store s 
            ON c.store_id = s.store_id
        WHERE c.customer_id = '" . (int)$agentId . "'
        LIMIT 1
    ")->row;

    if(!$customer){
        return false;
    }

    $image = $this->db->query("
        SELECT image
        FROM xwzk_kyc_images
        WHERE customerid = '" . (int)$agentId . "'
        AND idtype = 'profile'
        ORDER BY id DESC
        LIMIT 1
    ")->row;

    $customer['profile_image'] = $image['image'] ?? '';

    return $customer;
}

public function addBanner($data){

        $this->db->query("INSERT INTO " . DB_PREFIX . "banner SET
            name = '" . $this->db->escape($data['name']) . "',
            from_date = '" . $this->db->escape($data['from_date']) . "',
            to_date = '" . $this->db->escape($data['to_date']) . "',
            type = '1',
            status = '" . (int)$data['status'] . "',
            created_at = NOW(),
            updated_at = NOW()");

        return $this->db->getLastId();
    }


    // EDIT BANNER
    public function editBanner($banner_id,$data){

        $this->db->query("UPDATE " . DB_PREFIX . "banner SET
            name = '" . $this->db->escape($data['name']) . "',
            from_date = '" . $this->db->escape($data['from_date']) . "',
            to_date = '" . $this->db->escape($data['to_date']) . "',
            type = '1',
            status = '" . (int)$data['status'] . "',
            updated_at = NOW()
            WHERE banner_id = '" . (int)$banner_id . "'");
    }


    // ADD BANNER IMAGE
    public function addBannerImage($data){

        $this->db->query("INSERT INTO " . DB_PREFIX . "banner_image SET
            banner_id = '" . (int)$data['banner_id'] . "',
            language_id = '1',
            title = '" . $this->db->escape($data['title']) . "',
            link = '" . $this->db->escape($data['link']) . "',
            image = '" . $this->db->escape($data['image']) . "',
            sort_order = '" . (int)$data['sort_order'] . "'");
    }


    // DELETE BANNER IMAGES
    public function deleteBannerImages($banner_id){

        $this->db->query("DELETE FROM " . DB_PREFIX . "banner_image
        WHERE banner_id = '" . (int)$banner_id . "'");
    }


    // GET BANNER
    public function getBanner($banner_id){

        $query = $this->db->query("SELECT *
        FROM " . DB_PREFIX . "banner
        WHERE banner_id = '" . (int)$banner_id . "'
        AND type = '1'");

        return $query->row;
    }


    // GET BANNER IMAGES
    public function getBannerImages($banner_id){

        $query = $this->db->query("SELECT *
        FROM " . DB_PREFIX . "banner_image
        WHERE banner_id = '" . (int)$banner_id . "'
        ORDER BY sort_order ASC");

        return $query->rows;
    }

    public function getActiveBanners(){

    $sql = "SELECT 
                b.*,
                bi.title,
                bi.link,
                bi.image,
                bi.sort_order
            FROM " . DB_PREFIX . "banner b
            LEFT JOIN " . DB_PREFIX . "banner_image bi 
                ON b.banner_id = bi.banner_id
            WHERE b.status = 1
            AND b.type = 1
            AND b.from_date IS NOT NULL
            AND b.to_date IS NOT NULL
            AND CURDATE() BETWEEN b.from_date AND b.to_date
            ORDER BY bi.sort_order ASC";

    $query = $this->db->query($sql);

    return $query->rows;
}

public function getAllBanners(){

    $sql = "SELECT 
                b.*,
                bi.title,
                bi.link,
                bi.image,
                bi.sort_order
            FROM " . DB_PREFIX . "banner b
            LEFT JOIN " . DB_PREFIX . "banner_image bi 
                ON b.banner_id = bi.banner_id
            WHERE b.type = 1
            ORDER BY bi.sort_order ASC";

    $query = $this->db->query($sql);

    return $query->rows;
}

public function updateBannerImage($data): void {
    $this->db->query("
        UPDATE " . DB_PREFIX . "banner_image 
        SET title = '" . $this->db->escape($data['title']) . "',
            link  = '" . $this->db->escape($data['link'])  . "',
            image = '" . $this->db->escape($data['image']) . "',
            sort_order = '" . (int)$data['sort_order'] . "'
        WHERE banner_id = '" . (int)$data['banner_id'] . "'
    ");
}

public function addRunningBanner($data){

        $this->db->query("INSERT INTO " . DB_PREFIX . "banner SET
            name = '" . $this->db->escape($data['name']) . "',
            from_date = '" . $this->db->escape($data['from_date']) . "',
            to_date = '" . $this->db->escape($data['to_date']) . "',
            type = '2',
            status = '" . (int)$data['status'] . "',
            created_at = NOW(),
            updated_at = NOW()");

        return $this->db->getLastId();
    }


    // EDIT BANNER
    public function editRunningBanner($banner_id,$data){

        $this->db->query("UPDATE " . DB_PREFIX . "banner SET
            name = '" . $this->db->escape($data['name']) . "',
            from_date = '" . $this->db->escape($data['from_date']) . "',
            to_date = '" . $this->db->escape($data['to_date']) . "',
            type = '2',
            status = '" . (int)$data['status'] . "',
            updated_at = NOW()
            WHERE banner_id = '" . (int)$banner_id . "'");
    }


    // ADD BANNER IMAGE
    public function addRunningBannerImage($data){

        $this->db->query("INSERT INTO " . DB_PREFIX . "banner_image SET
            banner_id = '" . (int)$data['banner_id'] . "',
            language_id = '1',
            title = '" . $this->db->escape($data['title']) . "',
            link = '" . $this->db->escape($data['link']) . "',
            image = '" . $this->db->escape($data['image']) . "',
            sort_order = '" . (int)$data['sort_order'] . "'");
    }


    // DELETE BANNER IMAGES
    public function deleteRunningBannerImages($banner_id){

        $this->db->query("DELETE FROM " . DB_PREFIX . "banner_image
        WHERE banner_id = '" . (int)$banner_id . "'");
    }


    // GET BANNER
    public function getRunningBanner($banner_id){

        $query = $this->db->query("SELECT *
        FROM " . DB_PREFIX . "banner
        WHERE banner_id = '" . (int)$banner_id . "'
        AND type = '2'");

        return $query->row;
    }


    // GET BANNER IMAGES
    public function getRunningBannerImages($banner_id){

        $query = $this->db->query("SELECT *
        FROM " . DB_PREFIX . "banner_image
        WHERE banner_id = '" . (int)$banner_id . "'
        ORDER BY sort_order ASC");

        return $query->rows;
    }

    public function getActiveRunningBanners(){

    $sql = "SELECT 
                b.*,
                bi.title,
                bi.link,
                bi.image,
                bi.sort_order
            FROM " . DB_PREFIX . "banner b
            LEFT JOIN " . DB_PREFIX . "banner_image bi 
                ON b.banner_id = bi.banner_id
            WHERE b.status = 1
            AND b.type = 2
            AND b.from_date IS NOT NULL
            AND b.to_date IS NOT NULL
            AND CURDATE() BETWEEN b.from_date AND b.to_date
            ORDER BY bi.sort_order ASC";

    $query = $this->db->query($sql);


    return $query->rows;
}

public function getAllRunningBanners(){

    $sql = "SELECT 
                b.*,
                bi.title,
                bi.link,
                bi.image,
                bi.sort_order
            FROM " . DB_PREFIX . "banner b
            LEFT JOIN " . DB_PREFIX . "banner_image bi 
                ON b.banner_id = bi.banner_id
            WHERE b.type = 2
            ORDER BY bi.sort_order ASC";

    $query = $this->db->query($sql);

    return $query->rows;
}

public function updateRunningBannerImage($data): void {
    $this->db->query("
        UPDATE " . DB_PREFIX . "banner_image 
        SET title = '" . $this->db->escape($data['title']) . "',
            link  = '" . $this->db->escape($data['link'])  . "',
            image = '" . $this->db->escape($data['image']) . "',
            sort_order = '" . (int)$data['sort_order'] . "'
        WHERE banner_id = '" . (int)$data['banner_id'] . "'
    ");
}


public function addBottomBanner($data){

        $this->db->query("INSERT INTO " . DB_PREFIX . "banner SET
            name = '" . $this->db->escape($data['name']) . "',
            from_date = '" . $this->db->escape($data['from_date']) . "',
            to_date = '" . $this->db->escape($data['to_date']) . "',
            type = '3',
            status = '" . (int)$data['status'] . "',
            created_at = NOW(),
            updated_at = NOW()");

        return $this->db->getLastId();
    }


    // EDIT BANNER
    public function editBottomBanner($banner_id,$data){

        $this->db->query("UPDATE " . DB_PREFIX . "banner SET
            name = '" . $this->db->escape($data['name']) . "',
            from_date = '" . $this->db->escape($data['from_date']) . "',
            to_date = '" . $this->db->escape($data['to_date']) . "',
            type = '3',
            status = '" . (int)$data['status'] . "',
            updated_at = NOW()
            WHERE banner_id = '" . (int)$banner_id . "'");
    }


    // ADD BANNER IMAGE
    public function addBottomBannerImage($data){

        $this->db->query("INSERT INTO " . DB_PREFIX . "banner_image SET
            banner_id = '" . (int)$data['banner_id'] . "',
            language_id = '1',
            title = '" . $this->db->escape($data['title']) . "',
            link = '" . $this->db->escape($data['link']) . "',
            image = '" . $this->db->escape($data['image']) . "',
            sort_order = '" . (int)$data['sort_order'] . "'");
    }


    // DELETE BANNER IMAGES
    public function deleteBottomBannerImages($banner_id){

        $this->db->query("DELETE FROM " . DB_PREFIX . "banner_image
        WHERE banner_id = '" . (int)$banner_id . "'");
    }


    // GET BANNER
    public function getBottomBanner($banner_id){

        $query = $this->db->query("SELECT *
        FROM " . DB_PREFIX . "banner
        WHERE banner_id = '" . (int)$banner_id . "'
        AND type = '3'");

        return $query->row;
    }


    // GET BANNER IMAGES
    public function getBottomBannerImages($banner_id){

        $query = $this->db->query("SELECT *
        FROM " . DB_PREFIX . "banner_image
        WHERE banner_id = '" . (int)$banner_id . "'
        ORDER BY sort_order ASC");

        return $query->rows;
    }

    public function getActiveBottomBanners(){

    $sql = "SELECT 
                b.*,
                bi.title,
                bi.link,
                bi.image,
                bi.sort_order
            FROM " . DB_PREFIX . "banner b
            LEFT JOIN " . DB_PREFIX . "banner_image bi 
                ON b.banner_id = bi.banner_id
            WHERE b.status = 1
            AND b.type = 3
            AND b.from_date IS NOT NULL
            AND b.to_date IS NOT NULL
            AND CURDATE() BETWEEN b.from_date AND b.to_date
            ORDER BY bi.sort_order ASC";

    $query = $this->db->query($sql);


    return $query->rows;
}

public function getAllBottomBanners(){

    $sql = "SELECT 
                b.*,
                bi.title,
                bi.link,
                bi.image,
                bi.sort_order
            FROM " . DB_PREFIX . "banner b
            LEFT JOIN " . DB_PREFIX . "banner_image bi 
                ON b.banner_id = bi.banner_id
            WHERE b.type = 3
            ORDER BY bi.sort_order ASC";

    $query = $this->db->query($sql);

    return $query->rows;
}

public function updateBottomBannerImage($data): void {
    $this->db->query("
        UPDATE " . DB_PREFIX . "banner_image 
        SET title = '" . $this->db->escape($data['title']) . "',
            link  = '" . $this->db->escape($data['link'])  . "',
            image = '" . $this->db->escape($data['image']) . "',
            sort_order = '" . (int)$data['sort_order'] . "'
        WHERE banner_id = '" . (int)$data['banner_id'] . "'
    ");
}

public function getRewardPoints($customer_id) {
    $query = $this->db->query("SELECT SUM(points) AS total FROM `" . DB_PREFIX . "customer_reward` WHERE customer_id = '" . (int)$customer_id . "' AND status = 'active'");
    return (int)($query->row['total'] ?? 0);
}

public function addRelatedProducts($product_id, $related_ids) {

    if (!empty($related_ids)) {

        foreach ($related_ids as $related_id) {

            // ❌ prevent self relation
            if ($product_id == $related_id) {
                continue;
            }

            // ✅ check forward relation
            $check1 = $this->db->query("
                SELECT * FROM " . DB_PREFIX . "product_related 
                WHERE product_id = '" . (int)$product_id . "' 
                AND related_id = '" . (int)$related_id . "'
            ");

            if (!$check1->num_rows) {
                // insert forward
                $this->db->query("
                    INSERT INTO " . DB_PREFIX . "product_related 
                    SET product_id = '" . (int)$product_id . "', 
                        related_id = '" . (int)$related_id . "'
                ");
            }

            // ✅ check reverse relation
            $check2 = $this->db->query("
                SELECT * FROM " . DB_PREFIX . "product_related 
                WHERE product_id = '" . (int)$related_id . "' 
                AND related_id = '" . (int)$product_id . "'
            ");

            if (!$check2->num_rows) {
                // insert reverse
                $this->db->query("
                    INSERT INTO " . DB_PREFIX . "product_related 
                    SET product_id = '" . (int)$related_id . "', 
                        related_id = '" . (int)$product_id . "'
                ");
            }
        }
    }
}

public function deleteRelatedProducts($product_id) {

    $this->db->query("
        DELETE FROM " . DB_PREFIX . "product_related 
        WHERE product_id = '" . (int)$product_id . "' 
        OR related_id = '" . (int)$product_id . "'
    ");
}

public function getAllOrdersByDateRange($from_date = '', $to_date = '', $order_id = '', $mobile = '', $name = '') {

$sql = "SELECT o.order_id FROM `" . DB_PREFIX . "order` o WHERE 1";

$isSearch = !empty($order_id) || !empty($mobile) || !empty($name);

if (!$isSearch && !empty($from_date) && !empty($to_date)) {
$sql .= " AND DATE(o.date_added) >= '" . $this->db->escape($from_date) . "'";
$sql .= " AND DATE(o.date_added) <= '" . $this->db->escape($to_date) . "'";
}

if (!empty($order_id)) {
$sql .= " AND o.order_id LIKE '%" . $this->db->escape($order_id) . "%'";
}

if (!empty($mobile)) {
$sql .= " AND o.telephone LIKE '%" . $this->db->escape($mobile) . "%'";
}

if (!empty($name)) {
$sql .= " AND (
o.firstname LIKE '%" . $this->db->escape($name) . "%'
OR o.lastname LIKE '%" . $this->db->escape($name) . "%'
OR CONCAT(o.firstname,' ',o.lastname) LIKE '%" . $this->db->escape($name) . "%'
)";
}

$sql .= " ORDER BY o.order_id DESC";

$orders = $this->db->query($sql)->rows;

$full = [];

foreach ($orders as $order) {
$full[] = $this->getFullOrderDetails((int)$order['order_id']);
}

return $full;

}


public function getAllOrderTotalsByDateRange($from_date, $to_date) {

    $sql = " SELECT

        /* STATUS 5 CASH */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 5 
                THEN (oi.cash_amount - 
                        CASE 
                            WHEN oi.cash_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status5_cash,


        /* STATUS 5 UPI */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 5 
                THEN (oi.upi_amount - 
                        CASE 
                            WHEN oi.upi_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status5_upi,


        /* STATUS 6 CASH */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 6 
                THEN (oi.cash_amount - 
                        CASE 
                            WHEN oi.cash_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status6_cash,


        /* STATUS 6 UPI */
        COALESCE(SUM(
            CASE 
                WHEN o.order_status_id = 6 
                THEN (oi.upi_amount - 
                        CASE 
                            WHEN oi.upi_amount > 0 
                            THEN oi.returnable_balance 
                            ELSE 0 
                        END
                     )
                ELSE 0
            END
        ),0) AS status6_upi,


        /* OTHER TOTALS */

        COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.sub_total 
        ELSE 0 
    END
),0) AS status5_subtotal,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.sub_total 
        ELSE 0 
    END
),0) AS status6_subtotal,


COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.total_received 
        ELSE 0 
    END
),0) AS status5_total_received,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.total_received 
        ELSE 0 
    END
),0) AS status6_total_received,


COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.returnable_balance 
        ELSE 0 
    END
),0) AS status5_returnable,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.returnable_balance 
        ELSE 0 
    END
),0) AS status6_returnable,


COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 5 
        THEN oi.balance 
        ELSE 0 
    END
),0) AS status5_balance,

COALESCE(SUM(
    CASE 
        WHEN o.order_status_id = 6 
        THEN oi.balance 
        ELSE 0 
    END
),0) AS status6_balance

        FROM `" . DB_PREFIX . "order` o

        INNER JOIN `" . DB_PREFIX . "order_invoice` oi
        ON oi.order_id = o.order_id

        WHERE DATE(o.date_added) >= '" . $this->db->escape($from_date) . "'
        AND DATE(o.date_added) <= '" . $this->db->escape($to_date) . "'
    ";

    return $this->db->query($sql)->row;
}

public function insertOrderTracking($order_id){

        $status_list = $this->db->query("
        SELECT track_status_id 
        FROM ".DB_PREFIX."track_status
        ")->rows;

        foreach($status_list as $status){

        $track_status_id = (int)$status['track_status_id'];

        $status_value = ($track_status_id == 1) ? 1 : 0;

        $this->db->query("
        INSERT INTO ".DB_PREFIX."track_order SET
        order_id='".(int)$order_id."',
        track_status_id='".$track_status_id."',
        status='".$status_value."'
        ");

        }

    }

    public function getTrackOrder($order_id){

        $sql = "
        SELECT
        ts.track_status_id,
        ts.name,
        IFNULL(to1.status,0) as status

        FROM ".DB_PREFIX."track_status ts

        LEFT JOIN ".DB_PREFIX."track_order to1
        ON ts.track_status_id = to1.track_status_id
        AND to1.order_id='".(int)$order_id."'

        ORDER BY ts.track_status_id ASC
        ";

        $query = $this->db->query($sql);

        return $query->rows;

    }

    public function updateTrackStatus($order_id,$track_status_id){

    $this->db->query("
    UPDATE ".DB_PREFIX."track_order
    SET status = 1
    WHERE order_id='".(int)$order_id."'
    AND track_status_id='".(int)$track_status_id."'
    ");

    }

    public function getProductStockReport($data = []) {

        $sql = "SELECT 
                p.product_id,
                pd.name AS product_name,
                IFNULL(pp.pos_quentity,0) AS pos_quentity,
                c.category_id,
                cd.name AS category_name

                FROM " . DB_PREFIX . "product p

                JOIN " . DB_PREFIX . "product_description pd 
                    ON p.product_id = pd.product_id

                LEFT JOIN " . DB_PREFIX . "pts_pos_product pp 
                    ON p.product_id = pp.product_id

                LEFT JOIN " . DB_PREFIX . "product_to_category pc 
                    ON p.product_id = pc.product_id

                LEFT JOIN " . DB_PREFIX . "category c 
                    ON pc.category_id = c.category_id

                LEFT JOIN " . DB_PREFIX . "category_description cd 
                    ON c.category_id = cd.category_id

                WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
                AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        // 🔍 SEARCH
        if (!empty($data['search'])) {
            $sql .= " AND pd.name LIKE '%" . $this->db->escape($data['search']) . "%'";
        }

        $sql .= " GROUP BY p.product_id";

        // 🔥 LOW STOCK FIRST (MAIN LOGIC)
        $sql .= " ORDER BY 
                    CASE 
                        WHEN IFNULL(pp.pos_quentity,0) = 0 THEN 0
                        WHEN IFNULL(pp.pos_quentity,0) <= 10 THEN 1
                        ELSE 2
                    END,
                    IFNULL(pp.pos_quentity,0) ASC";

        // 📄 PAGINATION
        if (isset($data['start']) && isset($data['limit'])) {
            $start = (int)$data['start'];
            $limit = (int)$data['limit'];
            $sql .= " LIMIT $start,$limit";
        }

        return $this->db->query($sql)->rows;
    }

    public function getCategoryWiseStockTotal() {

        $sql = "SELECT 
                c.category_id,
                cd.name AS category_name,
                SUM(IFNULL(pp.pos_quentity,0)) AS total_stock

                FROM " . DB_PREFIX . "product p

                LEFT JOIN " . DB_PREFIX . "pts_pos_product pp 
                    ON p.product_id = pp.product_id

                LEFT JOIN " . DB_PREFIX . "product_to_category pc 
                    ON p.product_id = pc.product_id

                LEFT JOIN " . DB_PREFIX . "category c 
                    ON pc.category_id = c.category_id

                LEFT JOIN " . DB_PREFIX . "category_description cd 
                    ON c.category_id = cd.category_id

                WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "'

                GROUP BY c.category_id";

        return $this->db->query($sql)->rows;
    }


}