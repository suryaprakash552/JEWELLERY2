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

    // Fetch products
    $order_products = $this->model_checkout_order->getProducts($order_id);

    if (empty($order_products)) {
        return;
    }

    // Sum quantities product-wise
    $product_qty = [];

    foreach ($order_products as $product) {

        $product_id = (int)$product['product_id'];

        $product_qty[$product_id] =
            ($product_qty[$product_id] ?? 0) + (int)$product['quantity'];
    }

    // Update stock once per product
    foreach ($product_qty as $product_id => $qty) {

        $this->db->query("
            UPDATE `" . DB_PREFIX . "pts_pos_product`
            SET pos_quentity = GREATEST(
                pos_quentity - " . (int)$qty . ",
                0
            )
            WHERE product_id = '" . (int)$product_id . "'
        ");
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

    // Take first product for POS table
    $first = $order_products[0];
    $order_product_id = (int)$first['order_product_id'];
    $product_id       = (int)$first['product_id'];
    $quantity         = (int)$first['quantity'];

    // Extract expected arrays
    $order_data    = $data[0] ?? [];   // from controller $order_data
    $invoice_extra = $data[1] ?? [];   // from controller $invoice_extra
    // $reward_extra = $data[2] ?? [];  // not needed here

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

    // ✅ Insert POS Product
    $this->db->query("
        INSERT INTO `" . DB_PREFIX . "pts_pos_order_product`
        SET order_product_id = '" . $order_product_id . "',
            order_id = '" . $order_id . "',
            product_id = '" . $product_id . "',
            quantity = '" . $quantity . "'
    ");
}


	



   public function getPosOrderProducts($order_product_id) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pts_pos_order_product WHERE order_product_id = '" . (int)$order_product_id . "'");
					
					return $query->row;
				}

}
?>