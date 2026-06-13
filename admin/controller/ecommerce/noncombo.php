<?php
namespace Opencart\Admin\Controller\Ecommerce;

class Noncombo extends \Opencart\System\Engine\Controller {

    public function index(): void {
        $this->document->setTitle('Non-Combo Offers');

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "noncombo_offers` (
            `id`           INT AUTO_INCREMENT PRIMARY KEY,
            `product_id`   INT(11) NOT NULL DEFAULT 0,
            `product_name` VARCHAR(255) NOT NULL DEFAULT '',
            `sku`          VARCHAR(64) NOT NULL DEFAULT '',
            `status`       TINYINT(1) NOT NULL DEFAULT 1,
            `date_added`   DATETIME DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "noncombo_offer_variants` (
            `id`          INT AUTO_INCREMENT PRIMARY KEY,
            `offer_id`    INT(11) NOT NULL,
            `weight`      DECIMAL(10,3) NOT NULL DEFAULT 0.000,
            `weight_unit` VARCHAR(10) NOT NULL DEFAULT 'g',
            `price`       DECIMAL(15,4) NOT NULL DEFAULT 0.0000
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $page  = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
        $limit = 15;
        $start = ($page - 1) * $limit;

        $total = (int)$this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "noncombo_offers`")->row['total'];

        // Read directly from noncombo_offers — no JOIN
        $results = $this->db->query("
            SELECT * FROM `" . DB_PREFIX . "noncombo_offers`
            ORDER BY id DESC
            LIMIT " . (int)$start . ", " . (int)$limit);

        $data['noncombo_offers'] = [];
        foreach ($results->rows as $row) {
            $variants = $this->db->query("SELECT * FROM `" . DB_PREFIX . "noncombo_offer_variants`
                WHERE `offer_id` = '" . (int)$row['id'] . "' ORDER BY weight ASC");
            $variant_list = [];
            foreach ($variants->rows as $v) {
                $variant_list[] = (float)$v['weight'] . $v['weight_unit'] . ' = ₹' . number_format($v['price'], 2);
            }
            $chunks        = array_chunk($variant_list, 5);
            $variants_html = implode('<br>', array_map(fn($c) => implode(' | ', $c), $chunks));

            $data['noncombo_offers'][] = [
                'id'            => $row['id'],
                'product_id'    => $row['product_id'],
                'product_name'  => $row['product_name'],
                'sku'           => $row['sku'],
                'variants'      => $variants_html,
                'variant_count' => count($variant_list),
                'status'        => $row['status'],
                'date_added'    => date('d-M-Y', strtotime($row['date_added'])),
            ];
        }

        $data['pagination'] = $this->load->controller('common/pagination', [
            'total' => $total,
            'page'  => $page,
            'limit' => $limit,
            'url'   => $this->url->link('ecommerce/noncombo', 'user_token=' . $this->session->data['user_token'] . '&page={page}')
        ]);
        $data['results'] = sprintf('Showing %d to %d of %d (%d Pages)',
            $total ? $start + 1 : 0,
            min($start + $limit, $total),
            $total,
            ceil($total / $limit) ?: 1
        );

        $data['success']     = $this->session->data['success'] ?? '';
        $data['error']       = $this->session->data['error'] ?? '';
        unset($this->session->data['success'], $this->session->data['error']);

        $data['user_token']  = $this->session->data['user_token'];
        $data['breadcrumbs'] = [
            ['text' => 'Home',             'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])],
            ['text' => 'E-Commerce',       'href' => ''],
            ['text' => 'Non-Combo Offers', 'href' => $this->url->link('ecommerce/noncombo', 'user_token=' . $this->session->data['user_token'])],
        ];

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('ecommerce/noncombo_list', $data));
    }

    public function save(): void {
        $json = [];
        if ($this->request->server['REQUEST_METHOD'] === 'POST') {
            $product_name = trim($this->db->escape($this->request->post['product_name'] ?? ''));
            $sku          = trim($this->db->escape($this->request->post['sku'] ?? ''));
            $base_price   = (float)($this->request->post['base_price'] ?? 0);
            $status       = (int)($this->request->post['status'] ?? 1);
            $edit_id      = (int)($this->request->post['edit_id'] ?? 0);
            $variants     = $this->request->post['variants'] ?? [];
            $lang_id      = (int)$this->config->get('config_language_id');

            if (!$product_name)       { $json['error'] = 'Product name is required!'; }
            elseif ($base_price <= 0) { $json['error'] = 'Base price must be greater than 0!'; }
            elseif (empty($variants)) { $json['error'] = 'Add at least one weight variant!'; }
            else {
                if ($edit_id) {
                    $existing       = $this->db->query("SELECT product_id FROM `" . DB_PREFIX . "noncombo_offers`
                        WHERE id = '" . $edit_id . "'")->row;
                    $new_product_id = (int)($existing['product_id'] ?? 0);

                    // Update offer record directly
                    $this->db->query("UPDATE `" . DB_PREFIX . "noncombo_offers` SET
                        `product_name` = '" . $product_name . "',
                        `sku`          = '" . $sku . "',
                        `status`       = '" . $status . "'
                        WHERE `id` = '" . $edit_id . "'");

                    // Sync background product
                    if ($new_product_id) {
                        $this->db->query("UPDATE `" . DB_PREFIX . "product` SET
                            `sku`           = '" . $sku . "',
                            `price`         = '" . $base_price . "',
                            `status`        = '" . $status . "',
                            `date_modified` = NOW()
                            WHERE `product_id` = '" . $new_product_id . "'");
                        $this->db->query("UPDATE `" . DB_PREFIX . "product_description` SET
                            `name` = '" . $product_name . "'
                            WHERE `product_id` = '" . $new_product_id . "' AND `language_id` = '" . $lang_id . "'");
                    }

                    $offer_id = $edit_id;
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "noncombo_offer_variants`
                        WHERE `offer_id` = '" . $offer_id . "'");

                    $json['success'] = 'Non-combo offer updated!';
                } else {
                    $model = 'NONCOMBO-' . strtoupper(preg_replace('/[^a-zA-Z0-9]/', '', $product_name)) . '-' . time();

                    // Background product for e-commerce catalog
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "product` SET
                        `model`        = '" . $this->db->escape($model) . "',
                        `sku`          = '" . $sku . "',
                        `price`        = '" . $base_price . "',
                        `quantity`     = 0,
                        `status`       = '" . $status . "',
                        `date_added`   = NOW(),
                        `date_modified`= NOW()");
                    $new_product_id = $this->db->getLastId();

                    $this->db->query("INSERT INTO `" . DB_PREFIX . "product_description` SET
                        `product_id`  = '" . $new_product_id . "',
                        `language_id` = '" . $lang_id . "',
                        `name`        = '" . $product_name . "'");

                    $this->db->query("INSERT INTO `" . DB_PREFIX . "product_to_store` SET
                        `product_id` = '" . $new_product_id . "',
                        `store_id`   = 0");

                    // Offer record stores its own product_name and sku
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "noncombo_offers` SET
                        `product_id`   = '" . $new_product_id . "',
                        `product_name` = '" . $product_name . "',
                        `sku`          = '" . $sku . "',
                        `status`       = '" . $status . "',
                        `date_added`   = NOW()");
                    $offer_id = $this->db->getLastId();

                    $json['success']    = 'Non-combo product created! Product ID: #' . $new_product_id;
                    $json['product_id'] = $new_product_id;
                }

                foreach ($variants as $v) {
                    $weight      = (float)($v['weight'] ?? 0);
                    $weight_unit = $this->db->escape($v['weight_unit'] ?? 'g');
                    $price       = (float)($v['price'] ?? 0);
                    if ($weight > 0 && $price > 0) {
                        $this->db->query("INSERT INTO `" . DB_PREFIX . "noncombo_offer_variants` SET
                            `offer_id`    = '" . (int)$offer_id . "',
                            `weight`      = '" . $weight . "',
                            `weight_unit` = '" . $weight_unit . "',
                            `price`       = '" . $price . "'");
                    }
                }
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete(): void {
        $json     = [];
        $selected = $this->request->post['selected'] ?? [];
        if (!$selected && isset($this->request->get['selected'])) {
            $selected = explode(',', $this->request->get['selected']);
        }
        $id = (int)($this->request->get['id'] ?? 0);
        if ($id) { $selected[] = $id; }

        if ($selected) {
            $ids  = array_map('intval', $selected);
            $rows = $this->db->query("SELECT product_id FROM `" . DB_PREFIX . "noncombo_offers`
                WHERE `id` IN (" . implode(',', $ids) . ")")->rows;

            foreach ($rows as $row) {
                $pid = (int)$row['product_id'];
                if ($pid) {
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "product_description` WHERE product_id = '" . $pid . "'");
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "product_to_store`    WHERE product_id = '" . $pid . "'");
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "product`             WHERE product_id = '" . $pid . "'");
                }
            }

            $this->db->query("DELETE FROM `" . DB_PREFIX . "noncombo_offer_variants`
                WHERE `offer_id` IN (" . implode(',', $ids) . ")");
            $this->db->query("DELETE FROM `" . DB_PREFIX . "noncombo_offers`
                WHERE `id` IN (" . implode(',', $ids) . ")");

            $json['success'] = 'Deleted!';
        } else {
            $json['error'] = 'Invalid ID!';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function getOffer(): void {
        $json = [];
        $id   = (int)($this->request->get['id'] ?? 0);
        if ($id) {
            // Read ONLY from noncombo_offers — no JOIN to product tables
            $offer = $this->db->query("SELECT * FROM `" . DB_PREFIX . "noncombo_offers`
                WHERE id = '" . $id . "'")->row;

            if ($offer) {
                // Also get base_price from the background product for the edit form
                $prod = $this->db->query("SELECT price FROM `" . DB_PREFIX . "product`
                    WHERE product_id = '" . (int)$offer['product_id'] . "'")->row;
                $offer['base_price'] = $prod['price'] ?? 0;

                $variants = $this->db->query("SELECT * FROM `" . DB_PREFIX . "noncombo_offer_variants`
                    WHERE `offer_id` = '" . $id . "' ORDER BY weight ASC")->rows;
                $offer['variants'] = $variants;
                $json = $offer;
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
