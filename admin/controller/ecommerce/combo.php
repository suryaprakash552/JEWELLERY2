<?php
namespace Opencart\Admin\Controller\Ecommerce;

class Combo extends \Opencart\System\Engine\Controller {

    public function index(): void {
        $this->document->setTitle('Products / Offers');

        // Note: The tables xwzk_app_products and xwzk_app_product_variants were created via terminal script.

        $page  = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
        $limit = 15;
        $start = ($page - 1) * $limit;

        $total = (int)$this->db->query("SELECT COUNT(*) as total FROM `" . DB_PREFIX . "app_products`")->row['total'];

        $results = $this->db->query("
            SELECT * FROM `" . DB_PREFIX . "app_products`
            ORDER BY id DESC
            LIMIT " . (int)$start . ", " . (int)$limit);

        $data['products'] = [];
        foreach ($results->rows as $row) {
            $variants = $this->db->query("SELECT * FROM `" . DB_PREFIX . "app_product_variants`
                WHERE `app_product_id` = '" . (int)$row['id'] . "' ORDER BY is_default DESC, weight ASC")->rows;

            $variant_list = [];
            foreach ($variants as $v) {
                $qty_label = $row['is_combo'] ? 'Min ' . $v['variant_qty'] : 'POS Qty ' . $v['variant_qty'];
                $variant_list[] = (float)$v['weight'] . $v['weight_unit'] . ' (' . $qty_label . ') = ₹' . number_format($v['price'], 2);
            }
            $chunks       = array_chunk($variant_list, 3);
            $variants_html = implode('<br>', array_map(fn($c) => implode(' | ', $c), $chunks));

            $data['products'][] = [
                'id'            => $row['id'],
                'product_id'    => $row['product_id'],
                'product_name'  => $row['product_name'],
                'sku'           => $row['sku'],
                'is_combo'      => $row['is_combo'],
                'is_featured'   => $row['is_featured'],
                'variants'      => $variants_html,
                'variant_count' => count($variants),
                'status'        => $row['status'],
                'date_added'    => date('d-M-Y', strtotime($row['date_added'])),
            ];
        }

        $this->load->model('tool/image');
        $data['placeholder'] = $this->model_tool_image->resize('profile.png', 100, 100);
        $data['categories'] = $this->db->query("SELECT c.category_id, cd.name FROM `" . DB_PREFIX . "category` c LEFT JOIN `" . DB_PREFIX . "category_description` cd ON (c.category_id = cd.category_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY cd.name ASC")->rows;

        $data['pagination'] = $this->load->controller('common/pagination', [
            'total' => $total,
            'page'  => $page,
            'limit' => $limit,
            'url'   => $this->url->link('ecommerce/combo', 'user_token=' . $this->session->data['user_token'] . '&page={page}')
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
            ['text' => 'Home',              'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])],
            ['text' => 'E-Commerce',        'href' => ''],
            ['text' => 'Products / Offers', 'href' => $this->url->link('ecommerce/combo', 'user_token=' . $this->session->data['user_token'])],
        ];

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('ecommerce/combo_list', $data));
    }

    public function save(): void {
        $json = [];
        if ($this->request->server['REQUEST_METHOD'] === 'POST') {
            $product_name = trim($this->db->escape($this->request->post['product_name'] ?? ''));
            $sku          = trim($this->db->escape($this->request->post['sku'] ?? ''));
            $quantity     = (int)($this->request->post['quantity'] ?? 0);
            $spl_price    = (float)($this->request->post['spl_price'] ?? 0);
            $is_featured  = (int)($this->request->post['is_featured'] ?? 0);
            $is_combo     = (int)($this->request->post['is_combo'] ?? 0);
            $status       = (int)($this->request->post['status'] ?? 1);
            $image        = $this->db->escape($this->request->post['image'] ?? '');
            $category_id  = (int)($this->request->post['category_id'] ?? 0);
            $cost_price   = (float)($this->request->post['cost_price'] ?? 0);
            $selling_price= (float)($this->request->post['selling_price'] ?? 0);
            $edit_id      = (int)($this->request->post['edit_id'] ?? 0);
            $variants     = $this->request->post['variants'] ?? [];
            $lang_id      = (int)$this->config->get('config_language_id');

            $valid_variants = [];
            foreach ($variants as $k => $v) {
                $weight = (float)($v['weight'] ?? 0);
                $price  = (float)($v['price'] ?? 0);
                if ($weight > 0 && $price > 0) {
                    $valid_variants[] = [
                        'weight'      => $weight,
                        'weight_unit' => $this->db->escape($v['weight_unit'] ?? 'KG'),
                        'variant_qty' => (int)($v['variant_qty'] ?? 0),
                        'price'       => $price,
                        'spl_price'   => (float)($v['spl_price'] ?? 0),
                        'is_default'  => (int)($v['is_default'] ?? 0)
                    ];
                }
            }

            if (!$product_name)             { $json['error'] = 'Product name is required!'; }
            elseif (empty($valid_variants)) { $json['error'] = 'Add at least one piece/unit!'; }
            else {
                // Determine base price from the default variant or first variant
                $base_price = $valid_variants[0]['price'];
                foreach ($valid_variants as $v) {
                    if ($v['is_default']) { $base_price = $v['price']; break; }
                }

                if ($edit_id) {
                    $existing = $this->db->query("SELECT product_id FROM `" . DB_PREFIX . "app_products` WHERE id = '" . $edit_id . "'")->row;
                    $new_product_id = (int)($existing['product_id'] ?? 0);
                    $is_combo_str = $is_combo ? 'Yes' : 'No';

                    // Update main record
                    $this->db->query("UPDATE `" . DB_PREFIX . "app_products` SET
                        `product_name` = '" . $product_name . "',
                        `sku`          = '" . $sku . "',
                        `quantity`     = '" . $quantity . "',
                        `spl_price`    = '" . $spl_price . "',
                        `is_featured`  = '" . $is_featured . "',
                        `is_combo`     = '" . $is_combo . "',
                        `status`       = '" . $status . "',
                        `image`        = '" . $image . "',
                        `category_id`  = '" . $category_id . "',
                        `cost_price`   = '" . $cost_price . "',
                        `selling_price`= '" . $selling_price . "'
                        WHERE `id` = '" . $edit_id . "'");

                    if ($new_product_id) {
                        $this->db->query("UPDATE `" . DB_PREFIX . "product` SET
                            `image`         = '" . $image . "',
                            `sku`           = '" . $sku . "',
                            `price`         = '" . $base_price . "',
                            `quantity`      = '" . $quantity . "',
                            `status`        = '" . $status . "',
                            `is_combo`      = '" . $is_combo_str . "',
                            `date_modified` = NOW()
                            WHERE `product_id` = '" . $new_product_id . "'");
                        $this->db->query("UPDATE `" . DB_PREFIX . "product_description` SET
                            `name` = '" . $product_name . "'
                            WHERE `product_id` = '" . $new_product_id . "' AND `language_id` = '" . $lang_id . "'");

                        $this->db->query("DELETE FROM `" . DB_PREFIX . "product_to_category` WHERE product_id = '" . $new_product_id . "'");
                        if ($category_id) {
                            $this->db->query("INSERT INTO `" . DB_PREFIX . "product_to_category` SET product_id = '" . $new_product_id . "', category_id = '" . $category_id . "'");
                        }
                    }

                    $offer_id = $edit_id;
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "app_product_variants` WHERE `app_product_id` = '" . $offer_id . "'");

                    $json['success'] = 'Product updated successfully!';
                } else {
                    $model = 'APP-' . strtoupper(preg_replace('/[^a-zA-Z0-9]/', '', $product_name)) . '-' . time();
                    $is_combo_str = $is_combo ? 'Yes' : 'No';

                    $this->db->query("INSERT INTO `" . DB_PREFIX . "product` SET
                        `model`        = '" . $this->db->escape($model) . "',
                        `image`        = '" . $image . "',
                        `sku`          = '" . $sku . "',
                        `price`        = '" . $base_price . "',
                        `quantity`     = '" . $quantity . "',
                        `status`       = '" . $status . "',
                        `is_combo`     = '" . $is_combo_str . "',
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

                    if ($category_id) {
                        $this->db->query("INSERT INTO `" . DB_PREFIX . "product_to_category` SET product_id = '" . $new_product_id . "', category_id = '" . $category_id . "'");
                    }

                    $this->db->query("INSERT INTO `" . DB_PREFIX . "app_products` SET
                        `product_id`   = '" . $new_product_id . "',
                        `product_name` = '" . $product_name . "',
                        `sku`          = '" . $sku . "',
                        `quantity`     = '" . $quantity . "',
                        `spl_price`    = '" . $spl_price . "',
                        `is_featured`  = '" . $is_featured . "',
                        `is_combo`     = '" . $is_combo . "',
                        `status`       = '" . $status . "',
                        `image`        = '" . $image . "',
                        `category_id`  = '" . $category_id . "',
                        `cost_price`   = '" . $cost_price . "',
                        `selling_price`= '" . $selling_price . "',
                        `date_added`   = NOW()");
                    $offer_id = $this->db->getLastId();

                    $json['success']    = 'Product created! ID: #' . $new_product_id;
                    $json['product_id'] = $new_product_id;
                }

                foreach ($valid_variants as $v) {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "app_product_variants` SET
                        `app_product_id` = '" . (int)$offer_id . "',
                        `weight`         = '" . $v['weight'] . "',
                        `weight_unit`    = '" . $v['weight_unit'] . "',
                        `variant_qty`    = '" . $v['variant_qty'] . "',
                        `price`          = '" . $v['price'] . "',
                        `spl_price`      = '" . $v['spl_price'] . "',
                        `is_default`     = '" . $v['is_default'] . "'");
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
            $rows = $this->db->query("SELECT product_id FROM `" . DB_PREFIX . "app_products`
                WHERE `id` IN (" . implode(',', $ids) . ")")->rows;

            foreach ($rows as $row) {
                $pid = (int)$row['product_id'];
                if ($pid) {
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "product_description` WHERE product_id = '" . $pid . "'");
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "product_to_store`    WHERE product_id = '" . $pid . "'");
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "product`             WHERE product_id = '" . $pid . "'");
                }
            }

            $this->db->query("DELETE FROM `" . DB_PREFIX . "app_product_variants`
                WHERE `app_product_id` IN (" . implode(',', $ids) . ")");
            $this->db->query("DELETE FROM `" . DB_PREFIX . "app_products`
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
            $offer = $this->db->query("SELECT * FROM `" . DB_PREFIX . "app_products`
                WHERE id = '" . $id . "'")->row;

            if ($offer) {
                $this->load->model('tool/image');
                if (is_file(DIR_IMAGE . $offer['image'])) {
                    $offer['thumb'] = $this->model_tool_image->resize($offer['image'], 100, 100);
                } else {
                    $offer['thumb'] = $this->model_tool_image->resize('profile.png', 100, 100);
                }

                $variants = $this->db->query("SELECT * FROM `" . DB_PREFIX . "app_product_variants`
                    WHERE `app_product_id` = '" . $id . "' ORDER BY is_default DESC, weight ASC")->rows;
                $offer['variants'] = $variants;
                $json = $offer;
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
