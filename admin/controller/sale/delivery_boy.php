<?php
namespace Opencart\Admin\Controller\Sale;

class DeliveryBoy extends \Opencart\System\Engine\Controller {
	private array $error = [];

	public function index(): void {
		$this->load->language('sale/delivery_boy');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('sale/delivery_boy');

		$this->getList();
	}

	public function add(): void {
		$this->load->language('sale/delivery_boy');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('sale/delivery_boy');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_sale_delivery_boy->addDeliveryBoy($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit(): void {
		$this->load->language('sale/delivery_boy');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('sale/delivery_boy');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_sale_delivery_boy->editDeliveryBoy($this->request->get['delivery_boy_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

    public function report(): void {
        $this->load->language('sale/delivery_boy');
        $this->document->setTitle('Delivery Reports');
        $this->load->model('sale/delivery_boy');

        if (isset($this->request->get['filter_name'])) {
            $filter_name = (string)$this->request->get['filter_name'];
        } else {
            $filter_name = '';
        }

        if (isset($this->request->get['filter_date_start'])) {
            $filter_date_start = (string)$this->request->get['filter_date_start'];
        } else {
            $filter_date_start = '';
        }

        if (isset($this->request->get['filter_date_end'])) {
            $filter_date_end = (string)$this->request->get['filter_date_end'];
        } else {
            $filter_date_end = '';
        }

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_date_start'])) {
            $url .= '&filter_date_start=' . $this->request->get['filter_date_start'];
        }

        if (isset($this->request->get['filter_date_end'])) {
            $url .= '&filter_date_end=' . $this->request->get['filter_date_end'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];
        $data['breadcrumbs'][] = [
            'text' => 'Delivery Reports',
            'href' => $this->url->link('sale/delivery_boy.report', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];

        $filter_data = [
            'filter_name'       => $filter_name,
            'filter_date_start' => $filter_date_start,
            'filter_date_end'   => $filter_date_end,
            'start'             => ($page - 1) * $this->config->get('config_pagination_admin'),
            'limit'             => $this->config->get('config_pagination_admin')
        ];

        $data['delivery_boys'] = [];
        
        $delivery_boy_total = $this->model_sale_delivery_boy->getTotalDeliveryBoyReports($filter_data);
        $results = $this->model_sale_delivery_boy->getDeliveryBoyReports($filter_data);

        foreach ($results as $result) {
            $data['delivery_boys'][] = [
                'name'         => $result['name'],
                'telephone'    => $result['telephone'],
                'status'       => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
                'date_added'   => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'total'        => $result['total_orders'],
                'in_progress'  => $result['in_progress_orders'],
                'completed'    => $result['completed_orders'],
                'cancelled'    => $result['cancelled_orders']
            ];
        }

        $data['filter_name'] = $filter_name;
        $data['filter_date_start'] = $filter_date_start;
        $data['filter_date_end'] = $filter_date_end;
        $data['user_token'] = $this->session->data['user_token'];

        $url_pagination = '';

        if (isset($this->request->get['filter_name'])) {
            $url_pagination .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_date_start'])) {
            $url_pagination .= '&filter_date_start=' . $this->request->get['filter_date_start'];
        }

        if (isset($this->request->get['filter_date_end'])) {
            $url_pagination .= '&filter_date_end=' . $this->request->get['filter_date_end'];
        }

        $data['pagination'] = $this->load->controller('common/pagination', [
            'total' => $delivery_boy_total,
            'page'  => $page,
            'limit' => $this->config->get('config_pagination_admin'),
            'url'   => $this->url->link('sale/delivery_boy.report', 'user_token=' . $this->session->data['user_token'] . $url_pagination . '&page={page}', true)
        ]);

        $data['results'] = sprintf($this->language->get('text_pagination'), ($delivery_boy_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($delivery_boy_total - $this->config->get('config_pagination_admin'))) ? $delivery_boy_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $delivery_boy_total, ceil($delivery_boy_total / $this->config->get('config_pagination_admin')));

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('sale/delivery_boy_report', $data));
    }

	public function delete(): void {
		$this->load->language('sale/delivery_boy');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('sale/delivery_boy');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $delivery_boy_id) {
				$this->model_sale_delivery_boy->deleteDeliveryBoy($delivery_boy_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList(): void {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . $url, true)
		];

		$data['add'] = $this->url->link('sale/delivery_boy.add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('sale/delivery_boy.delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['delivery_boys'] = [];

		$filter_data = [
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_pagination_admin'),
			'limit' => $this->config->get('config_pagination_admin')
		];

		$delivery_boy_total = $this->model_sale_delivery_boy->getTotalDeliveryBoys();

		$results = $this->model_sale_delivery_boy->getDeliveryBoys($filter_data);

		foreach ($results as $result) {
			$data['delivery_boys'][] = [
				'delivery_boy_id' => $result['delivery_boy_id'],
				'name'            => $result['name'],
				'telephone'       => $result['telephone'],
				'status'          => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'edit'            => $this->url->link('sale/delivery_boy.edit', 'user_token=' . $this->session->data['user_token'] . '&delivery_boy_id=' . $result['delivery_boy_id'] . $url, true)
			];
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = [];
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_telephone'] = $this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . '&sort=telephone' . $url, true);
		$data['sort_status'] = $this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $delivery_boy_total,
			'page'  => $page,
			'limit' => $this->config->get('config_pagination_admin'),
			'url'   => $this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true)
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($delivery_boy_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($delivery_boy_total - $this->config->get('config_pagination_admin'))) ? $delivery_boy_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $delivery_boy_total, ceil($delivery_boy_total / $this->config->get('config_pagination_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/delivery_boy_list', $data));
	}

	protected function getForm(): void {
		$data['text_form'] = !isset($this->request->get['delivery_boy_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . $url, true)
		];

		if (!isset($this->request->get['delivery_boy_id'])) {
			$data['action'] = $this->url->link('sale/delivery_boy.add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('sale/delivery_boy.edit', 'user_token=' . $this->session->data['user_token'] . '&delivery_boy_id=' . $this->request->get['delivery_boy_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('sale/delivery_boy', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['delivery_boy_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$delivery_boy_info = $this->model_sale_delivery_boy->getDeliveryBoy($this->request->get['delivery_boy_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($delivery_boy_info)) {
			$data['name'] = $delivery_boy_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} elseif (!empty($delivery_boy_info)) {
			$data['telephone'] = $delivery_boy_info['telephone'];
		} else {
			$data['telephone'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($delivery_boy_info)) {
			$data['status'] = $delivery_boy_info['status'];
		} else {
			$data['status'] = true;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/delivery_boy_form', $data));
	}

	protected function validateForm(): bool {
		if (!$this->user->hasPermission('modify', 'sale/delivery_boy')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen($this->request->post['name']) < 3) || (oc_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if ((oc_strlen($this->request->post['telephone']) < 3) || (oc_strlen($this->request->post['telephone']) > 32)) {
			$this->error['telephone'] = $this->language->get('error_telephone');
		}

		return !$this->error;
	}

	protected function validateDelete(): bool {
		if (!$this->user->hasPermission('modify', 'sale/delivery_boy')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

    public function export(): void {
        $this->load->language('sale/delivery_boy');
        $this->load->model('sale/delivery_boy');

        if (isset($this->request->get['filter_name'])) {
            $filter_name = (string)$this->request->get['filter_name'];
        } else {
            $filter_name = '';
        }

        if (isset($this->request->get['filter_date_start'])) {
            $filter_date_start = (string)$this->request->get['filter_date_start'];
        } else {
            $filter_date_start = '';
        }

        if (isset($this->request->get['filter_date_end'])) {
            $filter_date_end = (string)$this->request->get['filter_date_end'];
        } else {
            $filter_date_end = '';
        }

        $filter_data = [
            'filter_name'       => $filter_name,
            'filter_date_start' => $filter_date_start,
            'filter_date_end'   => $filter_date_end
        ];

        $results = $this->model_sale_delivery_boy->getDeliveryBoyReports($filter_data);

        // Send headers for CSV download
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="delivery_boy_report_' . date('Y-m-d') . '.csv"');
        header('Pragma: no-cache');
        header('Expires: 0');

        $output = fopen('php://output', 'w');

        // Output BOM for Excel UTF-8 compatibility
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

        // Column Headers
        fputcsv($output, [
            'S.No.',
            'Delivery Boy Name',
            'Phone / Telephone',
            'Status',
            'Date Added',
            'Total Orders',
            'In Progress',
            'Completed',
            'Cancelled'
        ]);

        $i = 1;
        foreach ($results as $result) {
            fputcsv($output, [
                $i++,
                $result['name'],
                $result['telephone'],
                ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
                date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                $result['total_orders'],
                $result['in_progress_orders'],
                $result['completed_orders'],
                $result['cancelled_orders']
            ]);
        }

        fclose($output);
        exit();
    }
}
