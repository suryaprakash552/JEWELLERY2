<?php
namespace Opencart\Admin\Model\Sale;

class DeliveryBoy extends \Opencart\System\Engine\Model {
	public function addDeliveryBoy(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "delivery_boy` SET name = '" . $this->db->escape((string)$data['name']) . "', telephone = '" . $this->db->escape((string)$data['telephone']) . "', status = '" . (int)$data['status'] . "', date_added = NOW()");

		return $this->db->getLastId();
	}

	public function editDeliveryBoy(int $delivery_boy_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "delivery_boy` SET name = '" . $this->db->escape((string)$data['name']) . "', telephone = '" . $this->db->escape((string)$data['telephone']) . "', status = '" . (int)$data['status'] . "' WHERE delivery_boy_id = '" . (int)$delivery_boy_id . "'");
	}

	public function deleteDeliveryBoy(int $delivery_boy_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "delivery_boy` WHERE delivery_boy_id = '" . (int)$delivery_boy_id . "'");
	}

	public function getDeliveryBoy(int $delivery_boy_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "delivery_boy` WHERE delivery_boy_id = '" . (int)$delivery_boy_id . "'");

		return $query->row;
	}

	public function getDeliveryBoys(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "delivery_boy`";

		$sort_data = [
			'name',
			'telephone',
			'status'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalDeliveryBoys(): int {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "delivery_boy`");

		return (int)$query->row['total'];
	}

    public function getDeliveryBoyReports($data = []): array {
        $sql = "SELECT db.name, db.telephone, db.status, db.date_added, 
                COUNT(o.order_id) as total_orders,
                SUM(CASE WHEN o.order_status_id NOT IN (0, 5, 7, 8, 9, 10, 11, 12, 13, 14, 16) THEN 1 ELSE 0 END) as in_progress_orders,
                SUM(CASE WHEN o.order_status_id = 5 THEN 1 ELSE 0 END) as completed_orders,
                SUM(CASE WHEN o.order_status_id = 7 THEN 1 ELSE 0 END) as cancelled_orders
                FROM `" . DB_PREFIX . "delivery_boy` db
                LEFT JOIN `" . DB_PREFIX . "order` o ON (db.delivery_boy_id = o.delivery_boy_id AND o.order_status_id > 0";
                
        if (!empty($data['filter_date_start'])) {
            $sql .= " AND DATE(o.date_added) >= DATE('" . $this->db->escape((string)$data['filter_date_start']) . "')";
        }
        if (!empty($data['filter_date_end'])) {
            $sql .= " AND DATE(o.date_added) <= DATE('" . $this->db->escape((string)$data['filter_date_end']) . "')";
        }
        
        $sql .= ") WHERE 1=1";
        
        if (!empty($data['filter_name'])) {
            $sql .= " AND db.name LIKE '%" . $this->db->escape((string)$data['filter_name']) . "%'";
        }

        $sql .= " GROUP BY db.delivery_boy_id ORDER BY db.name ASC";
        
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getTotalDeliveryBoyReports($data = []): int {
        $sql = "SELECT COUNT(DISTINCT db.delivery_boy_id) as total FROM `" . DB_PREFIX . "delivery_boy` db WHERE 1=1";
        
        if (!empty($data['filter_name'])) {
            $sql .= " AND db.name LIKE '%" . $this->db->escape((string)$data['filter_name']) . "%'";
        }
        
        $query = $this->db->query($sql);
        return (int)$query->row['total'];
    }
}
