<?php
namespace Opencart\Catalog\Controller\Extension\PurpletreePos\Events\Checkout;
class Order extends \Opencart\System\Engine\Controller {
	public function afterAddOrderHistory(&$route, &$data, &$output) {

    $this->load->model('checkout/order');

    // Determine order_id
    if (version_compare(VERSION, '4.0.2.0', '>=')) {
        $order_id = $data[0] ?? 0;
    } else {
        $order_id = $output ?? 0;
    }

    if (!$order_id) {
        return; // no order ID = abort safely
    }

    $order_info = $this->model_checkout_order->getOrder($order_id);
    if (!$order_info) {
        return;
    }

    // Fetch products
    $order_products = $this->model_checkout_order->getProducts($order_id);

    // If no products, stop safely
    if (empty($order_products)) {
        return;   
    }

    $order_status_id = (int)($data[1] ?? 0);
    $processing_status = (array)$this->config->get('config_processing_status');
    $complete_status = (array)$this->config->get('config_complete_status');
    $valid_statuses = array_merge($processing_status, $complete_status);

    $old_status_id = (int)$order_info['order_status_id'];

    $should_subtract = !in_array($old_status_id, $valid_statuses) && in_array($order_status_id, $valid_statuses);
    $should_restock = in_array($old_status_id, $valid_statuses) && !in_array($order_status_id, $valid_statuses);

    if ($should_subtract) {
        foreach ($order_products as $order_product) {
            if (!isset($order_product['order_product_id'])) continue;
            
            $pos_product_order = $this->getPosOrderProducts((int)$order_product['order_product_id']);
            if (!empty($pos_product_order)) {
                $this->db->query("
                    UPDATE " . DB_PREFIX . "pts_pos_product 
                    SET pos_quentity = (pos_quentity - " . (int)$pos_product_order['quantity'] . ") 
                    WHERE product_id = '" . (int)$pos_product_order['product_id'] . "'
                ");
            }
        }
    } elseif ($should_restock) {
        foreach ($order_products as $order_product) {
            if (!isset($order_product['order_product_id'])) continue;
            
            $pos_product_order = $this->getPosOrderProducts((int)$order_product['order_product_id']);
            if (!empty($pos_product_order)) {
                $this->db->query("
                    UPDATE " . DB_PREFIX . "pts_pos_product 
                    SET pos_quentity = (pos_quentity + " . (int)$pos_product_order['quantity'] . ") 
                    WHERE product_id = '" . (int)$pos_product_order['product_id'] . "'
                ");
            }
        }
    }
}

	public function afterEditOrder(&$route, &$product_data, &$output) {
	}
	public function afterAddOrder(&$route, &$data, &$order_id) {

    if (!$order_id) return;

    // Load order model
    $this->load->model('checkout/order');

    // Fetch products for this order
    $order_products = $this->model_checkout_order->getProducts($order_id);

    if (empty($order_products)) {
        return;
    }

    // Extract expected arrays
    $order_data    = $data[0] ?? [];   // from controller $order_data
    $invoice_extra = $data[1] ?? [];   // from controller $invoice_extra

    // ✅ Insert agent_id (coming from controller)
    if (!empty($order_data['agent_id'])) {
        $this->db->query("
            INSERT INTO `" . DB_PREFIX . "pts_pos_order`
            SET order_id = '" . (int)$order_id . "',
                agent_id = '" . (int)$order_data['agent_id'] . "',
                date_added = NOW()
        ");
    }

    // ✅ Insert payment details
    if (!empty($invoice_extra)) {
        if (isset($invoice_extra['cash_amount'])) {
            $this->db->query("
                INSERT INTO `" . DB_PREFIX . "pts_pos_payment_content`
                SET order_id = '" . (int)$order_id . "',
                    title = 'Cash',
                    `value` = '" . (float)$invoice_extra['cash_amount'] . "'
            ");
        }

        if (isset($invoice_extra['upi_amount'])) {
            $this->db->query("
                INSERT INTO `" . DB_PREFIX . "pts_pos_payment_content`
                SET order_id = '" . (int)$order_id . "',
                    title = 'UPI',
                    `value` = '" . (float)$invoice_extra['upi_amount'] . "'
            ");
        }
    }

    // ✅ Insert ALL POS Products and subtract pos_quentity
    foreach ($order_products as $order_product) {
        if (!isset($order_product['order_product_id'])) continue;

        $product_id = (int)$order_product['product_id'];
        $qty        = (int)$order_product['quantity'];

        $this->db->query("
            INSERT INTO `" . DB_PREFIX . "pts_pos_order_product`
            SET order_product_id = '" . (int)$order_product['order_product_id'] . "',
                order_id = '" . (int)$order_id . "',
                product_id = '" . $product_id . "',
                quantity = '" . $qty . "'
        ");

        // Subtract POS quantity immediately when order is placed.
        // NOTE: We do this here instead of afterAddOrderHistory because by the
        // time that event fires, addHistory() has already written the new status
        // to the DB, so getOrder() returns the updated status and the subtract
        // condition is never true for brand-new orders.
        $this->db->query("
            UPDATE `" . DB_PREFIX . "pts_pos_product`
            SET pos_quentity = GREATEST(pos_quentity - " . $qty . ", 0)
            WHERE product_id = '" . $product_id . "'
        ");
    }
}

   public function getPosOrderProducts($order_product_id) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pts_pos_order_product WHERE order_product_id = '" . (int)$order_product_id . "'");
					
					return $query->row;
				}

}
?>