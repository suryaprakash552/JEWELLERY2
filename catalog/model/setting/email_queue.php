<?php
namespace Opencart\Catalog\Model\Setting;
/**
 * Class EmailQueue
 *
 * Can be called using $this->load->model('setting/email_queue');
 *
 * @package Opencart\Catalog\Model\Setting
 */
class EmailQueue extends \Opencart\System\Engine\Model {
	/**
	 * Add Email to Queue
	 *
	 * Add email record to the queue.
	 *
	 * @param array<string, mixed> $data
	 *
	 * @return int email_queue_id
	 */
	public function addEmail(array $data): int {
		$store_email = isset($data['store_email']) ? $data['store_email'] : '';
		
		$this->db->query("INSERT INTO `" . DB_PREFIX . "email_queue` SET 
			`to_email` = '" . $this->db->escape($data['to_email']) . "', 
			`subject` = '" . $this->db->escape($data['subject']) . "', 
			`html` = '" . $this->db->escape($data['html']) . "', 
			`text` = '" . $this->db->escape($data['text'] ?? '') . "', 
			`store_email` = '" . $this->db->escape($store_email) . "',
			`status` = 'pending', 
			`attempts` = 0, 
			`date_added` = NOW()");
		
		return $this->db->getLastId();
	}

	/**
	 * Get Pending Emails
	 *
	 * Get pending emails from queue.
	 *
	 * @param int $limit
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getPendingEmails(int $limit = 10): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "email_queue` 
			WHERE `status` = 'pending' AND `attempts` < 5 
			ORDER BY `date_added` ASC LIMIT " . (int)$limit);
		
		return $query->rows;
	}

	/**
	 * Update Email Status
	 *
	 * Update email status in queue.
	 *
	 * @param int    $email_queue_id
	 * @param string $status
	 * @param string $error_message
	 *
	 * @return void
	 */
	public function updateStatus(int $email_queue_id, string $status, string $error_message = ''): void {
		$fields = "`status` = '" . $this->db->escape($status) . "'";
		
		if ($status == 'sent') {
			$fields .= ", `date_sent` = NOW()";
		}
		
		if ($error_message) {
			$fields .= ", `error_message` = '" . $this->db->escape($error_message) . "'";
		}
		
		$this->db->query("UPDATE `" . DB_PREFIX . "email_queue` SET " . $fields . " 
			WHERE `email_queue_id` = '" . (int)$email_queue_id . "'");
	}

	/**
	 * Increment Attempts
	 *
	 * Increment email send attempts.
	 *
	 * @param int $email_queue_id
	 *
	 * @return void
	 */
	public function incrementAttempts(int $email_queue_id): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "email_queue` SET 
			`attempts` = `attempts` + 1 
			WHERE `email_queue_id` = '" . (int)$email_queue_id . "'");
	}

	/**
	 * Delete Old Emails
	 *
	 * Delete sent emails older than 30 days.
	 *
	 * @return void
	 */
	public function deleteOldEmails(): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "email_queue` 
			WHERE `status` = 'sent' AND `date_sent` < DATE_SUB(NOW(), INTERVAL 30 DAY)");
	}
}
