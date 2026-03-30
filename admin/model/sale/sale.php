<?php
namespace Opencart\Admin\Model\Sale;

class Sale extends \Opencart\System\Engine\Model {

    public function getOrders(array $data = []): array {
        $sql = "
        SELECT inv.order_id, DATE(MAX(o.date_added)) AS date_added,
           GREATEST(MAX(inv.cash_amount) - IFNULL(MAX(inv.returnable_balance),0),0) AS cash,
GREATEST(MAX(inv.upi_amount) - IFNULL(MAX(inv.returnable_balance),0),0) AS upi,
           MAX(inv.advance_used)  AS advance,
            MAX(inv.balance) AS balance, MAX(inv.discount) AS discount,
            MAX(inv.upi_ref) AS ref, MAX(inv.sub_total) AS s_price,
            MAX(inv.total_tax) AS s_tax, MAX(inv.total_received) AS s_total,
            SUM(op.quantity * p.received_price) AS r_price,
            SUM(op.quantity * p.r_tax) AS r_tax,
            SUM(op.quantity * p.received_price + op.quantity * p.r_tax) AS r_total,
            MAX(o.sellerid) AS seller_id
        FROM `" . DB_PREFIX . "order_invoice` inv
        LEFT JOIN `" . DB_PREFIX . "order` o ON o.order_id = inv.order_id
        LEFT JOIN `" . DB_PREFIX . "order_product` op ON op.order_id = inv.order_id
        LEFT JOIN `" . DB_PREFIX . "product` p ON p.product_id = op.product_id
        WHERE 1";

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND DATE(o.date_added) >= '" . $this->db->escape($data['filter_date_added']) . "'";
        }
        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND DATE(o.date_added) <= '" . $this->db->escape($data['filter_date_modified']) . "'";
        }

        $sql .= " GROUP BY inv.order_id ORDER BY inv.order_id DESC ";

        if (isset($data['start'], $data['limit'])) {
            $sql .= " LIMIT " . (int)$data['start'] . ", " . (int)$data['limit'];
        }

        return $this->db->query($sql)->rows;
    }

    public function getTotalOrders(array $data = []): int {
        $sql = "SELECT COUNT(DISTINCT inv.order_id) AS total
        FROM `" . DB_PREFIX . "order_invoice` inv
        LEFT JOIN `" . DB_PREFIX . "order` o ON o.order_id = inv.order_id WHERE 1";

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND DATE(o.date_added) >= '" . $this->db->escape($data['filter_date_added']) . "'";
        }
        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND DATE(o.date_added) <= '" . $this->db->escape($data['filter_date_modified']) . "'";
        }

        return (int)$this->db->query($sql)->row['total'];
    }

   public function getDailyOrderSummary(array $data = []): array {
    $sql = "
    SELECT order_date, COUNT(*) AS no_orders, SUM(no_products) AS no_products,
        SUM(r_price) AS r_price, SUM(r_tax) AS r_tax, SUM(r_total) AS r_total,
        SUM(s_price) AS s_price, SUM(s_tax) AS s_tax, SUM(s_total) AS s_total,
        SUM(discount) AS discount
    FROM (
        SELECT DATE(o.date_added) AS order_date, o.order_id, o.order_status_id,
            SUM(op.quantity) AS no_products,
            SUM(op.quantity * p.received_price) AS r_price,
            SUM(op.quantity * p.r_tax) AS r_tax,
            SUM(op.quantity * p.received_price + op.quantity * p.r_tax) AS r_total,
            MAX(inv.sub_total) AS s_price,

            /* s_tax: return completed = 0 */
            CASE
                WHEN o.order_status_id = 6 THEN 0
                ELSE MAX(inv.total_tax)
            END AS s_tax,

            /* s_total: return completed = sub_total, else normal */
            CASE
                WHEN o.order_status_id = 6 THEN MAX(inv.sub_total)
                ELSE MAX(inv.total_received)
            END AS s_total,

            MAX(inv.discount) AS discount
        FROM `" . DB_PREFIX . "order` o
        LEFT JOIN `" . DB_PREFIX . "order_product` op ON op.order_id = o.order_id
        LEFT JOIN `" . DB_PREFIX . "product` p ON p.product_id = op.product_id
        LEFT JOIN `" . DB_PREFIX . "order_invoice` inv ON inv.order_id = o.order_id
        WHERE o.order_status_id IN (5, 6)
        GROUP BY o.order_id
    ) t
    GROUP BY order_date ORDER BY order_date DESC ";

    if (isset($data['start'], $data['limit'])) {
        $sql .= " LIMIT " . (int)$data['start'] . ", " . (int)$data['limit'];
    }

    return $this->db->query($sql)->rows;
}
    public function getTotalOrderDays(): int {
        return (int)$this->db->query(
            "SELECT COUNT(DISTINCT DATE(date_added)) AS total FROM `" . DB_PREFIX . "order`"
        )->row['total'];
    }

   public function getDailyProductReport(array $data = []): array {
    $sql = "
    SELECT order_date, SUM(total_products) AS total_products,
        SUM(r_price) AS r_price, SUM(r_tax) AS r_tax, SUM(r_total) AS r_total,
        SUM(s_price) AS s_price, SUM(s_tax) AS s_tax, SUM(s_total) AS s_total,
        SUM(discount) AS discount
    FROM (
        SELECT DATE(o.date_added) AS order_date, o.order_id, o.order_status_id,
            SUM(op.quantity) AS total_products,
            SUM(op.quantity * p.received_price) AS r_price,
            SUM(op.quantity * p.r_tax) AS r_tax,
            SUM(op.quantity * p.received_price + op.quantity * p.r_tax) AS r_total,
            MAX(inv.sub_total) AS s_price,

            /* s_tax: return completed = 0 */
            CASE
                WHEN o.order_status_id = 6 THEN 0
                ELSE MAX(inv.total_tax)
            END AS s_tax,

            /* s_total: return completed = sub_total, else normal */
            CASE
                WHEN o.order_status_id = 6 THEN MAX(inv.sub_total)
                ELSE MAX(inv.total_received)
            END AS s_total,

            MAX(inv.discount) AS discount
        FROM `" . DB_PREFIX . "order` o
        LEFT JOIN `" . DB_PREFIX . "order_product` op ON op.order_id = o.order_id
        LEFT JOIN `" . DB_PREFIX . "product` p ON p.product_id = op.product_id
        LEFT JOIN `" . DB_PREFIX . "order_invoice` inv ON inv.order_id = o.order_id
        WHERE o.order_status_id IN (5, 6)
        GROUP BY o.order_id
    ) t
    GROUP BY order_date ORDER BY order_date DESC ";

    if (isset($data['start'], $data['limit'])) {
        $sql .= " LIMIT " . (int)$data['start'] . ", " . (int)$data['limit'];
    }

    return $this->db->query($sql)->rows;
}
    public function getTotalDays(): int {
        return (int)$this->db->query(
            "SELECT COUNT(DISTINCT DATE(date_added)) AS total FROM `" . DB_PREFIX . "order`"
        )->row['total'];
    }

public function getSalesByNumber(array $data = []): array {
    $where = " WHERE o.telephone IS NOT NULL AND o.telephone <> '' AND o.order_status_id IN (5, 6) ";

    if (!empty($data['filter_phone'])) {
        $where .= " AND o.telephone LIKE '%" . $this->db->escape($data['filter_phone']) . "%' ";
    }

    $sql = "
        SELECT
            o.telephone AS number,
            /* Latest Name For That Number */
            (
                SELECT CONCAT(o2.firstname, ' ', o2.lastname)
                FROM `" . DB_PREFIX . "order` o2
                WHERE o2.telephone = o.telephone
                ORDER BY o2.date_added DESC
                LIMIT 1
            ) AS name,
            COUNT(DISTINCT o.order_id) AS no_orders,
            SUM(prod.no_products) AS no_products,

            /* cash: return completed = sub_total, else normal */
            SUM(CASE
                WHEN o.order_status_id = 6 THEN COALESCE(inv.sub_total, 0)
                ELSE COALESCE(inv.cash_amount, 0)
            END) AS cash,

            /* upi: return completed = 0, else normal */
            SUM(CASE
                WHEN o.order_status_id = 6 THEN 0
                ELSE COALESCE(inv.upi_amount, 0)
            END) AS upi,

            /* due: return completed = 0, else normal */
            SUM(CASE
                WHEN o.order_status_id = 6 THEN 0
                ELSE COALESCE(inv.balance, 0)
            END) AS due,

            /* advance: return completed = 0, else normal */
            SUM(CASE
                WHEN o.order_status_id = 6 THEN 0
                ELSE COALESCE(inv.advance_used, 0)
            END) AS advance,

            /* s_total: return completed = sub_total, else total_received */
            SUM(CASE
                WHEN o.order_status_id = 6 THEN COALESCE(inv.sub_total, 0)
                ELSE COALESCE(inv.total_received, 0)
            END) AS s_total,

            /* profit: s_total - r_total */
            (
                SUM(CASE
                    WHEN o.order_status_id = 6 THEN COALESCE(inv.sub_total, 0)
                    ELSE COALESCE(inv.total_received, 0)
                END) - SUM(prod.r_total)
            ) AS profit

        FROM `" . DB_PREFIX . "order` o
        /* PRODUCT AGGREGATION PER ORDER */
        LEFT JOIN (
            SELECT
                op.order_id,
                SUM(op.quantity) AS no_products,
                SUM(op.quantity * (p.received_price + p.r_tax)) AS r_total
            FROM `" . DB_PREFIX . "order_product` op
            LEFT JOIN `" . DB_PREFIX . "product` p
                ON p.product_id = op.product_id
            GROUP BY op.order_id
        ) prod ON prod.order_id = o.order_id
        /* INVOICE DATA */
        LEFT JOIN `" . DB_PREFIX . "order_invoice` inv
            ON inv.order_id = o.order_id
        $where
        GROUP BY o.telephone
        ORDER BY o.telephone ASC
    ";

    if (isset($data['start']) && isset($data['limit'])) {
        $sql .= " LIMIT " . (int)$data['start'] . ", " . (int)$data['limit'];
    }

    return $this->db->query($sql)->rows;
}
public function getTotalSalesByNumber(array $data = []): int {

    $where = " WHERE telephone IS NOT NULL AND telephone <> '' ";

    if (!empty($data['filter_phone'])) {
        $where .= " AND telephone LIKE '%" . $this->db->escape($data['filter_phone']) . "%' ";
    }

    $sql = "
        SELECT COUNT(DISTINCT telephone) AS total
        FROM `" . DB_PREFIX . "order`
        $where
    ";

    return (int)$this->db->query($sql)->row['total'];
}
public function getCustomerOrderHistory(string $phone): array {

    $sql = "
        SELECT
            o.order_id,
            DATE(o.date_added) AS order_date,
            SUM(op.quantity) AS no_products,
            COALESCE(inv.total_received,0) AS s_total,
            COALESCE(inv.cash_amount,0) AS cash,
            COALESCE(inv.upi_amount,0) AS upi,
            COALESCE(inv.advance_used,0) AS advance,
            COALESCE(inv.balance,0) AS due

        FROM `" . DB_PREFIX . "order` o

        LEFT JOIN `" . DB_PREFIX . "order_product` op
            ON op.order_id = o.order_id

        LEFT JOIN `" . DB_PREFIX . "order_invoice` inv
            ON inv.order_id = o.order_id

        WHERE o.telephone = '" . $this->db->escape($phone) . "'

        GROUP BY o.order_id
        ORDER BY o.date_added ASC
    ";

    return $this->db->query($sql)->rows;
}
  
/* ================= SALES BY SELLER ================= */
public function getSellerSummary(array $data = []): array {
    $sql = "
    SELECT
        seller_id,
        seller_name,
        seller_phone,
        seller_email,
        MAX(last_order_date)                        AS last_order_date,
        COUNT(DISTINCT order_id)                    AS total_orders,
        SUM(no_products)                            AS total_products,
        SUM(s_price)                                AS sale_total,
        SUM(s_tax)                                  AS tax_total,
        SUM(s_total)                                AS grand_total,
        SUM(discount)                               AS discount_total,
        SUM(s_total) - SUM(r_total)                 AS profit
    FROM (
        SELECT
            c.customer_id                               AS seller_id,
            CONCAT(c.firstname, ' ', c.lastname)        AS seller_name,
            c.telephone                                 AS seller_phone,
            c.email                                     AS seller_email,
            DATE(o.date_added)                          AS last_order_date,
            o.order_id                                  AS order_id,
            o.order_status_id                           AS order_status_id,
            SUM(op.quantity)                            AS no_products,

            /* Purchase cost */
            SUM(op.quantity * p.received_price + op.quantity * p.r_tax) AS r_total,

            /* s_price: sub_total for both */
            MAX(inv.sub_total)                          AS s_price,

            /* s_tax: 0 for return (6), normal for completed (5) */
            CASE
                WHEN o.order_status_id = 6 THEN 0
                ELSE MAX(inv.total_tax)
            END                                         AS s_tax,

            /* s_total: sub_total for return (6), total_received for completed (5) */
            CASE
                WHEN o.order_status_id = 6 THEN MAX(inv.sub_total)
                ELSE MAX(inv.total_received)
            END                                         AS s_total,

            /* discount */
            MAX(inv.discount)                           AS discount

        FROM `" . DB_PREFIX . "order` o
        INNER JOIN `" . DB_PREFIX . "customer` c
                ON c.customer_id = o.customer_group_id
        LEFT JOIN `" . DB_PREFIX . "order_product` op
               ON op.order_id = o.order_id
        LEFT JOIN `" . DB_PREFIX . "product` p
               ON p.product_id = op.product_id
        LEFT JOIN `" . DB_PREFIX . "order_invoice` inv
               ON inv.order_id = o.order_id

        WHERE o.order_status_id IN (5, 6)
    ";

    if (!empty($data['filter_date_added'])) {
        $sql .= " AND DATE(o.date_added) >= '" . $this->db->escape($data['filter_date_added']) . "'";
    }
    if (!empty($data['filter_date_modified'])) {
        $sql .= " AND DATE(o.date_added) <= '" . $this->db->escape($data['filter_date_modified']) . "'";
    }

    $sql .= "
        GROUP BY
            c.customer_id,
            c.firstname,
            c.lastname,
            c.telephone,
            c.email,
            o.order_id
    ) t
    GROUP BY seller_id, seller_name, seller_phone, seller_email
    ORDER BY last_order_date DESC
    ";

    if (isset($data['start'], $data['limit'])) {
        $sql .= " LIMIT " . (int)$data['start'] . ", " . (int)$data['limit'];
    }

    return $this->db->query($sql)->rows;
}

public function getTotalSellers(): int {
    return (int)$this->db->query(
        "SELECT COUNT(DISTINCT c.customer_id) AS total
         FROM `" . DB_PREFIX . "order` o
         INNER JOIN `" . DB_PREFIX . "customer` c
                 ON c.customer_id = o.customer_group_id
         WHERE c.customer_group_id = 3
           AND o.order_status_id IN (5, 6)"
    )->row['total'];
}
    public function getCouponSummary(array $data = []): array {
    $sql = "
    SELECT 
        DATE(o.date_added) AS order_date,
        c.telephone AS number,
        CONCAT(c.firstname, ' ', c.lastname) AS name,
        inv.coupon AS coupon_code,

        COUNT(DISTINCT o.order_id) AS no_orders,
        SUM(op.quantity) AS no_products,

        SUM(op.quantity * p.received_price) AS r_price,
        SUM(op.quantity * p.r_tax) AS r_tax,
        SUM(op.quantity * p.received_price + op.quantity * p.r_tax) AS r_total,

        SUM(inv.sub_total) AS s_price,
        SUM(inv.total_tax) AS s_tax,
        SUM(inv.total_received) AS s_total,
        SUM(inv.discount) AS discount

    FROM `" . DB_PREFIX . "order` o
    LEFT JOIN `" . DB_PREFIX . "order_invoice` inv ON inv.order_id = o.order_id
    LEFT JOIN `" . DB_PREFIX . "order_product` op ON op.order_id = o.order_id
    LEFT JOIN `" . DB_PREFIX . "product` p ON p.product_id = op.product_id
    LEFT JOIN `" . DB_PREFIX . "customer` c ON c.customer_id = o.customer_id

    WHERE  inv.coupon IS NOT NULL
        AND inv.coupon != ''

    GROUP BY order_date, number, coupon_code
    ORDER BY order_date DESC
    ";

    if (isset($data['start'], $data['limit'])) {
        $sql .= " LIMIT " . (int)$data['start'] . ", " . (int)$data['limit'];
    }

    return $this->db->query($sql)->rows;
}


    public function getTotalCoupons(): int {
    $sql = "
        SELECT COUNT(*) AS total FROM (
            SELECT 
                DATE(o.date_added),
                o.customer_id,
                inv.coupon
            FROM `" . DB_PREFIX . "order` o
            LEFT JOIN `" . DB_PREFIX . "order_invoice` inv ON inv.order_id = o.order_id
            WHERE 
                    inv.coupon IS NOT NULL
                AND inv.coupon != ''
            GROUP BY DATE(o.date_added), o.customer_id, inv.coupon
        ) t
    ";

    return (int)$this->db->query($sql)->row['total'];
}
public function getReport(array $data = []): array {
    $sql = "
    SELECT 
        order_date,
        COUNT(*) AS no_orders,
        SUM(no_products) AS no_products,
        SUM(r_price) AS r_price,
        SUM(r_tax) AS r_tax,
        SUM(r_total) AS r_total,
        SUM(s_price) AS s_price,
        SUM(s_tax) AS s_tax,
        SUM(s_total) AS s_total,
        SUM(discount) AS discount,
        SUM(cash) AS cash,
        SUM(upi) AS upi,
        SUM(due) AS due,
        SUM(advance) AS advance
    FROM (
        SELECT 
            DATE(o.date_added) AS order_date,
            o.order_id,
            o.order_status_id,
            SUM(op.quantity) AS no_products,
            SUM(op.quantity * p.received_price) AS r_price,
            SUM(op.quantity * p.r_tax) AS r_tax,
            SUM(op.quantity * p.received_price + op.quantity * p.r_tax) AS r_total,

            /* s_price: same for both */
            MAX(inv.sub_total) AS s_price,

            /* s_tax: return completed = 0 */
            CASE 
                WHEN o.order_status_id = 6 THEN 0
                ELSE MAX(inv.total_tax)
            END AS s_tax,

            /* s_total: return completed = sub_total, else normal */
            CASE 
                WHEN o.order_status_id = 6 THEN MAX(inv.sub_total)
                ELSE MAX(inv.total_received)
            END AS s_total,

            /* discount: same for both */
            MAX(inv.discount) AS discount,

            /* cash: return completed = sub_total, else normal */
            CASE 
                WHEN o.order_status_id = 6 THEN MAX(inv.sub_total)
                ELSE GREATEST(
                    MAX(inv.cash_amount) -
                    IF(MAX(inv.cash_amount) > 0, IFNULL(MAX(inv.returnable_balance),0), 0),
                0)
            END AS cash,

            /* upi: return completed = 0, else normal */
            CASE 
                WHEN o.order_status_id = 6 THEN 0
                ELSE GREATEST(
                    MAX(inv.upi_amount) -
                    IF(MAX(inv.upi_amount) > 0, IFNULL(MAX(inv.returnable_balance),0), 0),
                0)
            END AS upi,

            /* advance: return completed = 0, else normal */
            CASE 
                WHEN o.order_status_id = 6 THEN 0
                ELSE MAX(inv.advance_used)
            END AS advance,

            /* due: return completed = 0, else normal */
            CASE 
                WHEN o.order_status_id = 6 THEN 0
                ELSE MAX(inv.balance)
            END AS due

        FROM `" . DB_PREFIX . "order` o
        LEFT JOIN `" . DB_PREFIX . "order_product` op 
            ON op.order_id = o.order_id
        LEFT JOIN `" . DB_PREFIX . "product` p 
            ON p.product_id = op.product_id
        LEFT JOIN `" . DB_PREFIX . "order_invoice` inv 
            ON inv.order_id = o.order_id
        WHERE o.order_status_id IN (5, 6) ";

    if (!empty($data['filter_date_added'])) {
        $sql .= " AND DATE(o.date_added) >= '" . $this->db->escape($data['filter_date_added']) . "'";
    }
    if (!empty($data['filter_date_modified'])) {
        $sql .= " AND DATE(o.date_added) <= '" . $this->db->escape($data['filter_date_modified']) . "'";
    }

    $sql .= "
        GROUP BY o.order_id
    ) t
    GROUP BY order_date
    ORDER BY order_date DESC ";

    if (isset($data['start'], $data['limit'])) {
        $sql .= " LIMIT " . (int)$data['start'] . ", " . (int)$data['limit'];
    }

    return $this->db->query($sql)->rows;
}
public function getTotalDaysByAmountFiltered(array $data = []): int {
    $sql = "SELECT COUNT(DISTINCT DATE(o.date_added)) AS total
            FROM `" . DB_PREFIX . "order` o
            WHERE 1";

    if (!empty($data['filter_date_added'])) {
        $sql .= " AND DATE(o.date_added) >= '" . $this->db->escape($data['filter_date_added']) . "'";
    }

    if (!empty($data['filter_date_modified'])) {
        $sql .= " AND DATE(o.date_added) <= '" . $this->db->escape($data['filter_date_modified']) . "'";
    }

    return (int)$this->db->query($sql)->row['total'];
}

    public function getTotalDaysByAmount(): int {
        return (int)$this->db->query(
            "SELECT COUNT(DISTINCT DATE(date_added)) AS total FROM `" . DB_PREFIX . "order`"
        )->row['total'];
    }

    public function getInvoiceData(int $order_id): array {
        $sql = "SELECT * FROM `" . DB_PREFIX . "order_invoice` WHERE order_id = " . (int)$order_id;
        $result = $this->db->query($sql)->row;
        return $result ? $result : [];
    }
    
    public function getSalesByTotalForGST(string $from, string $to): array {

    $sql = "
        SELECT 
            DATE(o.date_added) AS date,
            SUM(inv.total_received) AS s_total
        FROM `" . DB_PREFIX . "order` o
        LEFT JOIN `" . DB_PREFIX . "order_invoice` inv 
            ON inv.order_id = o.order_id
        WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($from) . "'
        AND '" . $this->db->escape($to) . "'
        GROUP BY DATE(o.date_added)
        ORDER BY DATE(o.date_added) ASC
    ";

    return $this->db->query($sql)->rows;
}

}
