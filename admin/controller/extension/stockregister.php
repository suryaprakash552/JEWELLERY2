<?php
namespace Opencart\Admin\Controller\Extension;

class Stockregister extends \Opencart\System\Engine\Controller {
    
    private $error = [];
    
    public function index() {
        $this->load->language('extension/stockregister');
        
        $this->document->setTitle('POS Batch No');

        // Ensure database tables exist
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "pos_batches` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `batch_no` VARCHAR(50) NOT NULL UNIQUE,
            `received_q` DECIMAL(11,2) NOT NULL DEFAULT 0.00,
            `received_products` INT(11) NOT NULL DEFAULT 0,
            `created_products` INT(11) NOT NULL DEFAULT 0,
            `created_date` DATETIME DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        // Seed pos_batches from existing stock register if empty
        $check_empty = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "pos_batches`")->row['total'];
        if ($check_empty == 0) {
            $this->db->query("INSERT IGNORE INTO `" . DB_PREFIX . "pos_batches` (batch_no, received_q, received_products, created_date)
                SELECT po_number, SUM(received_qty), COUNT(DISTINCT purchase_order_product_id), MIN(createdtime)
                FROM `" . DB_PREFIX . "me_stock_register`
                GROUP BY po_number");
        }

        $data['success'] = $this->session->data['success'] ?? '';
        $data['error'] = $this->session->data['error'] ?? '';
        
        unset($this->session->data['success']);
        unset($this->session->data['error']);

        $data['breadcrumbs'] = [];
        
        $data['breadcrumbs'][] = [
            'text' => 'Home',
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];
        
        $data['breadcrumbs'][] = [
            'text' => 'POS Batch No',
            'href' => $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'])
        ];

        // Handle pagination
        $page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
        if ($page < 1) $page = 1;
        $limit = 10;
        $start = ($page - 1) * $limit;

        // Selected batch products (ProductCreatePage section)
        $selected_batch = $this->request->get['batch_no'] ?? '';
        $data['selected_batch'] = $selected_batch;

        // Query total batches
        $total_query = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "pos_batches`");
        $batches_total = (int)$total_query->row['total'];

        // Handling sort and order
        $sort = isset($this->request->get['sort']) ? $this->request->get['sort'] : 'id';
        $order = isset($this->request->get['order']) ? $this->request->get['order'] : 'DESC';

        $allowed_sorts = [
            'id', 'batch_no', 'received_products', 'created_products', 
            'received_q', 'available_q', 'sold_q', 'created_date'
        ];
        
        if (!in_array($sort, $allowed_sorts)) {
            $sort = 'id';
        }

        // Fetch paginated batches using subqueries to allow sorting by calculated fields
        $sql = "SELECT b.*, DATE_FORMAT(b.created_date, '%d-%b-%Y') as date_created,
                (SELECT COUNT(*) FROM `" . DB_PREFIX . "product` p WHERE p.sku = b.batch_no COLLATE utf8mb4_unicode_ci) as created_products,
                IFNULL((SELECT SUM(quantity) FROM `" . DB_PREFIX . "product` p WHERE p.sku = b.batch_no COLLATE utf8mb4_unicode_ci), 0) as available_q,
                (b.received_q - IFNULL((SELECT SUM(quantity) FROM `" . DB_PREFIX . "product` p WHERE p.sku = b.batch_no COLLATE utf8mb4_unicode_ci), 0)) as sold_q
                FROM `" . DB_PREFIX . "pos_batches` b
                ORDER BY " . $sort . " " . $order . " 
                LIMIT " . (int)$start . ", " . (int)$limit;

        $batches_query = $this->db->query($sql);
        $data['pos_batches'] = [];
        
        foreach ($batches_query->rows as $row) {
            $created_count = (int)$row['created_products'];
            $available_qty = (float)$row['available_q'];
            
            $sold_qty = (float)$row['received_q'] - $available_qty;
            if ($sold_qty < 0) $sold_qty = 0;
            
            $data['pos_batches'][] = [
                'id' => $row['id'],
                'batch_no' => $row['batch_no'],
                'received_products' => $row['received_products'],
                'created_products' => $created_count,
                'received_q' => number_format($row['received_q'], 2),
                'available_q' => number_format($available_qty, 2),
                'sold_q' => number_format($sold_qty, 2),
                'creation_date' => $row['date_created'],
                'creation_date_raw' => date('Y-m-d', strtotime($row['created_date'])),
                'select_link' => $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&page=' . $page . '&batch_no=' . urlencode($row['batch_no']))
            ];
        }

        // Pagination links
        $url = '';
        if ($selected_batch) {
            $url .= '&batch_no=' . urlencode($selected_batch);
        }

        $data['pagination'] = $this->load->controller('common/pagination', [
            'total' => $batches_total,
            'page'  => $page,
            'limit' => $limit,
            'url'   => $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . $url . '&sort=' . $sort . '&order=' . $order . '&page={page}')
        ]);

        $data['results'] = sprintf($this->language->get('text_pagination'), ($batches_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($batches_total - $limit)) ? $batches_total : ((($page - 1) * $limit) + $limit), $batches_total, ceil($batches_total / $limit));
        $data['batch_products'] = [];
        
        if ($selected_batch) {
            $products_query = $this->db->query("SELECT p.*, pd.name FROM `" . DB_PREFIX . "product` p 
                LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.product_id = pd.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "')
                WHERE p.sku = '" . $this->db->escape($selected_batch) . "' 
                ORDER BY p.product_id DESC");
                
            foreach ($products_query->rows as $p_row) {
                $data['batch_products'][] = [
                    'product_id' => $p_row['product_id'],
                    'box_id' => $p_row['box_id'],
                    'name' => $p_row['name'],
                    'received_price' => number_format($p_row['received_price'], 2, '.', ''),
                    'price_type' => $p_row['price_type'] ?? 'global',
                    'wp' => number_format($p_row['wholesale_price'], 2, '.', ''),
                    'swp' => number_format($p_row['special_price'], 2, '.', ''),
                    'rp' => number_format($p_row['price'], 2, '.', ''),
                    'srp' => number_format($p_row['additional_price'], 2, '.', ''),
                    'quantity' => $p_row['quantity'],
                    'barcode' => $p_row['upc'],
                    'barcode_type' => (strlen($p_row['upc']) >= 12) ? 'box' : 'unit',
                    'r_tag' => $p_row['r_tag'] ?? 'R0',
                    'w_tag' => $p_row['w_tag'] ?? 'W0',
                    'rack_code' => $p_row['rack_code'] ?? '',
                    'max_quantity' => $p_row['max_quantity'] ?? 1,
                    'date_added' => date('d-M-Y', strtotime($p_row['date_added'])),
                    'date_added_raw' => date('Y-m-d', strtotime($p_row['date_added'])),
                    'image' => $p_row['image']
                ];
            }
        }
        
        $data['user_token'] = $this->session->data['user_token'];
        
        $data['sort'] = $sort;
        $data['order'] = $order;
        
        $sort_url = '';
        if ($selected_batch) {
            $sort_url .= '&batch_no=' . urlencode($selected_batch);
        }
        if ($order == 'ASC') {
            $sort_url .= '&order=DESC';
        } else {
            $sort_url .= '&order=ASC';
        }
        if (isset($this->request->get['page'])) {
            $sort_url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_batch_no'] = $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&sort=batch_no' . $sort_url);
        $data['sort_received_products'] = $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&sort=received_products' . $sort_url);
        $data['sort_created_products'] = $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&sort=created_products' . $sort_url);
        $data['sort_received_q'] = $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&sort=received_q' . $sort_url);
        $data['sort_available_q'] = $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&sort=available_q' . $sort_url);
        // sold_q is derived from (received_q - available_q) but we can just map it properly.
        $data['sort_sold_q'] = $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&sort=sold_q' . $sort_url);
        $data['sort_created_date'] = $this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token'] . '&sort=created_date' . $sort_url);
        $data['action_printbarcode'] = $this->url->link('extension/purpletree_pos/pos/posproduct|posPrintBarcode', 'user_token=' . $this->session->data['user_token'], true);
        $data['export'] = $this->url->link('extension/stockregister.export', 'user_token=' . $this->session->data['user_token']);
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $wp_val = $this->config->get('config_wp_add_pct');
        if ($wp_val === '' || $wp_val === null) {
            $query = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "setting` WHERE `key` = 'config_wp_add_pct' ORDER BY `store_id` DESC LIMIT 1");
            $wp_val = $query->num_rows ? $query->row['value'] : 20;
        }
        $data['wp_add_pct'] = $wp_val;

        $rp_val = $this->config->get('config_rp_add_pct');
        if ($rp_val === '' || $rp_val === null) {
            $query = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "setting` WHERE `key` = 'config_rp_add_pct' ORDER BY `store_id` DESC LIMIT 1");
            $rp_val = $query->num_rows ? $query->row['value'] : 20;
        }
        $data['rp_add_pct'] = $rp_val;
        
        $this->response->setOutput($this->load->view('extension/stockregister', $data));
    }

    public function addBatch() {
        $json = [];
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->user->hasPermission('modify', 'extension/stockregister')) {
            $batch_no = $this->request->post['batch_no'] ?? '';
            $received_q = (float)($this->request->post['received_q'] ?? 0);
            $received_products = (int)($this->request->post['received_products'] ?? 0);
            $created_date = $this->request->post['created_date'] ?? '';
            
            if (!$batch_no) {
                $json['error'] = 'Batch number is required!';
            } else {
                $db_date = !empty($created_date) ? "'" . $this->db->escape($created_date) . "'" : "NOW()";
                
                $this->db->query("INSERT INTO `" . DB_PREFIX . "pos_batches` SET 
                    `batch_no` = '" . $this->db->escape($batch_no) . "',
                    `received_q` = '" . (float)$received_q . "',
                    `received_products` = '" . (int)$received_products . "',
                    `created_products` = 0,
                    `created_date` = " . $db_date . "
                    ON DUPLICATE KEY UPDATE 
                    `received_q` = '" . (float)$received_q . "',
                    `received_products` = '" . (int)$received_products . "',
                    `created_date` = " . $db_date);
                
                $json['success'] = 'Batch successfully created!';
            }
        } else {
            $json['error'] = 'Warning: You do not have permission to modify batches!';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function addBatchProduct() {
        $json = [];
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->user->hasPermission('modify', 'extension/stockregister')) {
            $batch_no = $this->request->post['batch_no'] ?? '';
            $box_id = $this->request->post['box_id'] ?? '';
            $name = $this->request->post['name'] ?? '';
            $received_price = (float)($this->request->post['received_price'] ?? 0);
            $wp = (float)($this->request->post['wp'] ?? 0);
            $swp = (float)($this->request->post['swp'] ?? 0);
            $rp = (float)($this->request->post['rp'] ?? 0);
            $srp = (float)($this->request->post['srp'] ?? 0);
            $quantity = (int)($this->request->post['quantity'] ?? 0);
            $barcode = $this->request->post['barcode'] ?? '';
            $price_type = $this->request->post['price_type'] ?? 'global';
            
            if (!$batch_no) {
                $json['error'] = 'Batch number is required!';
            } elseif (!$box_id) {
                $json['error'] = 'Box ID is required!';
            } elseif (!$name) {
                $json['error'] = 'Product name is required!';
            } else {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "product` SET 
                    `model` = '" . $this->db->escape($box_id) . "',
                    `box_id` = '" . $this->db->escape($box_id) . "',
                    `sku` = '" . $this->db->escape($batch_no) . "',
                    `quantity` = '" . (int)$quantity . "',
                    `price` = '" . (float)$rp . "',
                    `wholesale_price` = '" . (float)$wp . "',
                    `received_price` = '" . (float)$received_price . "',
                    `special_price` = '" . (float)$swp . "',
                    `additional_price` = '" . (float)$srp . "',
                    `price_type` = '" . $this->db->escape($price_type) . "',
                    `upc` = '" . $this->db->escape($barcode) . "',
                    `status` = 1,
                    `shipping` = 1,
                    `date_available` = CURDATE(),
                    `date_added` = NOW(),
                    `date_modified` = NOW()");
                
                $product_id = $this->db->getLastId();
                
                $this->db->query("INSERT INTO `" . DB_PREFIX . "product_description` SET 
                    `product_id` = '" . (int)$product_id . "',
                    `language_id` = '" . (int)$this->config->get('config_language_id') . "',
                    `name` = '" . $this->db->escape($name) . "',
                    `meta_title` = '" . $this->db->escape($name) . "',
                    `description` = '',
                    `meta_description` = '',
                    `meta_keyword` = '',
                    `tag` = ''");
                
                $this->db->query("INSERT INTO `" . DB_PREFIX . "product_to_store` SET 
                    `product_id` = '" . (int)$product_id . "',
                    `store_id` = 0");
                
                // Insert into pts_pos_product to sync POS quantity and enable in POS
                $this->db->query("INSERT INTO `" . DB_PREFIX . "pts_pos_product` SET 
                    `product_id` = '" . (int)$product_id . "',
                    `pos_quentity` = '" . (int)$quantity . "',
                    `pos_status` = 1
                    ON DUPLICATE KEY UPDATE `pos_quentity` = '" . (int)$quantity . "'");
                
                $this->db->query("UPDATE `" . DB_PREFIX . "pos_batches` 
                    SET `created_products` = `created_products` + 1 
                    WHERE `batch_no` = '" . $this->db->escape($batch_no) . "'");
                
                $json['success'] = 'Product successfully created and added to batch!';
            }
        } else {
            $json['error'] = 'Warning: You do not have permission to modify batch products!';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function deleteBatchProduct() {
        $json = [];
        if ($this->user->hasPermission('modify', 'extension/stockregister')) {
            $product_ids = [];
            if (isset($this->request->get['product_id'])) {
                $product_ids[] = (int)$this->request->get['product_id'];
            } elseif (isset($this->request->post['selected_products'])) {
                $product_ids = array_map('intval', $this->request->post['selected_products']);
            }
            
            if ($product_ids) {
                foreach ($product_ids as $product_id) {
                    $product_query = $this->db->query("SELECT sku FROM `" . DB_PREFIX . "product` WHERE product_id = '" . (int)$product_id . "' LIMIT 1");
                    
                    if ($product_query->num_rows) {
                        $batch_no = $product_query->row['sku'];
                        $this->db->query("DELETE FROM `" . DB_PREFIX . "product` WHERE product_id = '" . (int)$product_id . "'");
                        $this->db->query("DELETE FROM `" . DB_PREFIX . "product_description` WHERE product_id = '" . (int)$product_id . "'");
                        $this->db->query("DELETE FROM `" . DB_PREFIX . "product_to_store` WHERE product_id = '" . (int)$product_id . "'");
                        
                        $this->db->query("UPDATE `" . DB_PREFIX . "pos_batches` 
                            SET `created_products` = GREATEST(0, `created_products` - 1) 
                            WHERE `batch_no` = '" . $this->db->escape($batch_no) . "'");
                    }
                }
                $json['success'] = 'Product(s) deleted successfully!';
            } else {
                $json['error'] = 'No products selected!';
            }
        } else {
            $json['error'] = 'Warning: You do not have permission to modify batch products!';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function editBatchProduct() {
        $json = [];
        $this->log->write("editBatchProduct called. POST: " . print_r($this->request->post, true));
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->user->hasPermission('modify', 'extension/stockregister')) {
            $product_id = (int)($this->request->post['product_id'] ?? 0);
            $box_id = $this->request->post['box_id'] ?? '';
            $name = $this->request->post['name'] ?? '';
            $received_price = (float)($this->request->post['received_price'] ?? 0);
            $wp = (float)($this->request->post['wp'] ?? 0);
            $swp = (float)($this->request->post['swp'] ?? 0);
            $rp = (float)($this->request->post['rp'] ?? 0);
            $srp = (float)($this->request->post['srp'] ?? 0);
            $quantity = (int)($this->request->post['quantity'] ?? 0);
            $barcode = $this->request->post['barcode'] ?? '';
            $created_date = $this->request->post['created_date'] ?? '';
            $price_type = $this->request->post['price_type'] ?? 'global';
            $image = $this->request->post['image'] ?? '';
            $rack_code = $this->request->post['rack'] ?? '';
            
            if ($created_date) {
                $created_date = date('Y-m-d', strtotime(str_replace('/', '-', $created_date)));
            }
            
            if (!$product_id) {
                $json['error'] = 'Product ID is required!';
            } elseif (!$box_id) {
                $json['error'] = 'Box ID is required!';
            } elseif (!$name) {
                $json['error'] = 'Product name is required!';
            } elseif (empty($created_date)) {
                $json['error'] = 'Creation Date is required!';
            } else {
                try {
                    $this->db->query("UPDATE `" . DB_PREFIX . "product` SET 
                        `box_id` = '" . $this->db->escape($box_id) . "',
                        `quantity` = '" . (int)$quantity . "',
                        `price` = '" . (float)$rp . "',
                        `wholesale_price` = '" . (float)$wp . "',
                        `received_price` = '" . (float)$received_price . "',
                        `special_price` = '" . (float)$swp . "',
                        `additional_price` = '" . (float)$srp . "',
                        `price_type` = '" . $this->db->escape($price_type) . "',
                        `upc` = '" . $this->db->escape($barcode) . "',
                        `image` = '" . $this->db->escape($image) . "',
                        `rack_code` = '" . $this->db->escape($rack_code) . "',
                        `date_added` = '" . $this->db->escape($created_date) . "',
                        `date_modified` = NOW()
                        WHERE `product_id` = '" . (int)$product_id . "'");
                    
                    $this->db->query("UPDATE `" . DB_PREFIX . "product_description` SET 
                        `name` = '" . $this->db->escape($name) . "',
                        `meta_title` = '" . $this->db->escape($name) . "'
                        WHERE `product_id` = '" . (int)$product_id . "'");
                    
                    // Sync pts_pos_product quantity
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "pts_pos_product` 
                        (`product_id`, `pos_quentity`, `pos_status`) VALUES (
                            '" . (int)$product_id . "',
                            '" . (int)$quantity . "',
                            1
                        ) ON DUPLICATE KEY UPDATE `pos_quentity` = '" . (int)$quantity . "'");
                    
                    $json['success'] = 'Product updated successfully!';
                } catch (\Exception $e) {
                    $json['error'] = 'Database Error: ' . $e->getMessage();
                }
            }
        } else {
            $json['error'] = 'Warning: You do not have permission to modify batch products!';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function editBatch() {
        $json = [];
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->user->hasPermission('modify', 'extension/stockregister')) {
            $batch_id = (int)($this->request->post['batch_id'] ?? 0);
            $batch_no = $this->request->post['batch_no'] ?? '';
            $received_q = (float)($this->request->post['received_q'] ?? 0);
            $received_products = (int)($this->request->post['received_products'] ?? 0);
            $created_date = $this->request->post['created_date'] ?? '';
            
            if (!$batch_id) {
                $json['error'] = 'Invalid Batch ID!';
            } elseif (empty($batch_no)) {
                $json['error'] = 'Batch Number is required!';
            } elseif (empty($created_date)) {
                $json['error'] = 'Creation Date is required!';
            } else {
                $old_batch_query = $this->db->query("SELECT batch_no FROM `" . DB_PREFIX . "pos_batches` WHERE id = '" . (int)$batch_id . "' LIMIT 1");
                if ($old_batch_query->num_rows) {
                    $old_batch_no = $old_batch_query->row['batch_no'];
                    
                    if ($old_batch_no !== $batch_no) {
                        $duplicate_check = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "pos_batches` WHERE batch_no = '" . $this->db->escape($batch_no) . "' AND id != '" . (int)$batch_id . "'");
                        if ($duplicate_check->row['total'] > 0) {
                            $json['error'] = 'Batch Number already exists!';
                        }
                    }
                    
                    if (empty($json['error'])) {
                        $this->db->query("UPDATE `" . DB_PREFIX . "pos_batches` SET 
                            `batch_no` = '" . $this->db->escape($batch_no) . "',
                            `received_q` = '" . (float)$received_q . "',
                            `received_products` = '" . (int)$received_products . "',
                            `created_date` = '" . $this->db->escape($created_date) . "'
                            WHERE `id` = '" . (int)$batch_id . "'");
                            
                        if ($old_batch_no !== $batch_no) {
                            $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `sku` = '" . $this->db->escape($batch_no) . "' WHERE `sku` = '" . $this->db->escape($old_batch_no) . "'");
                        }
                        $json['success'] = 'Batch updated successfully!';
                    }
                } else {
                    $json['error'] = 'Batch not found!';
                }
            }
        } else {
            $json['error'] = 'Warning: You do not have permission to modify batches!';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function deleteBatch() {
        $json = [];
        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->user->hasPermission('modify', 'extension/stockregister')) {
            $selected = $this->request->post['selected'] ?? [];
            if ($selected) {
                foreach ($selected as $batch_id) {
                    $batch_query = $this->db->query("SELECT batch_no FROM `" . DB_PREFIX . "pos_batches` WHERE id = '" . (int)$batch_id . "' LIMIT 1");
                    if ($batch_query->num_rows) {
                        $batch_no = $batch_query->row['batch_no'];
                        $this->db->query("DELETE FROM `" . DB_PREFIX . "pos_batches` WHERE id = '" . (int)$batch_id . "'");
                        $this->db->query("DELETE FROM `" . DB_PREFIX . "product` WHERE sku = '" . $this->db->escape($batch_no) . "'");
                        $this->db->query("DELETE pd FROM `" . DB_PREFIX . "product_description` pd INNER JOIN `" . DB_PREFIX . "product` p ON pd.product_id = p.product_id WHERE p.sku = '" . $this->db->escape($batch_no) . "'");
                        $this->db->query("DELETE pts FROM `" . DB_PREFIX . "product_to_store` pts INNER JOIN `" . DB_PREFIX . "product` p ON pts.product_id = p.product_id WHERE p.sku = '" . $this->db->escape($batch_no) . "'");
                    }
                }
                $json['success'] = 'Selected batches deleted successfully!';
            } else {
                $json['error'] = 'No batches selected!';
            }
        } else {
            $json['error'] = 'Warning: You do not have permission to modify batches!';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function uploadImage() {
        $json = array();

        if (isset($this->request->files['file']) && is_file($this->request->files['file']['tmp_name'])) {
            $filename = basename(html_entity_decode($this->request->files['file']['name'], ENT_QUOTES, 'UTF-8'));
            $filename = preg_replace('/[^a-zA-Z0-9\.\-\s+]/', '', $filename);
            
            $directory = DIR_IMAGE . 'catalog/pos_uploads';
            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }
            
            // Add timestamp to prevent overwriting
            $filename = time() . '_' . $filename;
            $file = $directory . '/' . $filename;
            
            move_uploaded_file($this->request->files['file']['tmp_name'], $file);
            
            $json['success'] = 'Image uploaded successfully!';
            $json['image_path'] = 'catalog/pos_uploads/' . $filename;
        } else {
            $json['error'] = 'Please select an image to upload!';
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function export() {
        if ($this->user->hasPermission('access', 'extension/stockregister')) {
            try {
                // Set headers for CSV download
                header('Content-Type: text/csv; charset=utf-8');
                header('Content-Disposition: attachment; filename=pos_batches_' . date('Y-m-d_His') . '.csv');
                
                $output = fopen('php://output', 'w');
                
                // Add BOM for UTF-8
                fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
                
                // CSV Headers
                fputcsv($output, [
                    'SRNO',
                    'Batch No',
                    'Received Products',
                    'Created Products',
                    'Received Quantity',
                    'Available Quantity',
                    'Sold Quantity',
                    'Creation Date'
                ]);
                
                $batches_query = $this->db->query("SELECT *, DATE_FORMAT(created_date, '%d-%b-%Y') as date_created FROM `" . DB_PREFIX . "pos_batches` ORDER BY id DESC");
                
                $srno = 1;
                foreach ($batches_query->rows as $row) {
                    // Count actual products inside product with sku = batch_no
                    $created_count_query = $this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "product` WHERE sku = '" . $this->db->escape($row['batch_no']) . "'");
                    $created_count = (int)$created_count_query->row['total'];
                    
                    // Get sum of available quantities
                    $qty_query = $this->db->query("SELECT SUM(quantity) as total FROM `" . DB_PREFIX . "product` WHERE sku = '" . $this->db->escape($row['batch_no']) . "'");
                    $available_qty = (float)($qty_query->row['total'] ?? 0);
                    
                    $sold_qty = (float)$row['received_q'] - $available_qty;
                    if ($sold_qty < 0) $sold_qty = 0;
                    
                    fputcsv($output, [
                        $srno,
                        $row['batch_no'],
                        $row['received_products'],
                        $created_count,
                        number_format($row['received_q'], 2, '.', ''),
                        number_format($available_qty, 2, '.', ''),
                        number_format($sold_qty, 2, '.', ''),
                        $row['date_created']
                    ]);
                    
                    $srno++;
                }
                
                fclose($output);
                exit;
            } catch (\Exception $e) {
                $this->session->data['error'] = 'Export failed: ' . $e->getMessage();
                $this->response->redirect($this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token']));
            }
        } else {
            $this->session->data['error'] = 'Warning: You do not have permission to access stock register!';
            $this->response->redirect($this->url->link('extension/stockregister', 'user_token=' . $this->session->data['user_token']));
        }
    }
}