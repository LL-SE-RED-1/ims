<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}
class Ims_request_manage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		}
		$this->load->model('ims/request_manage_model');
	}

	public function index($info = NULL, $func = 0) {
		$data['navi'] = 2;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		$data['info'] = $info;
		$data['func'] = $func;

		$this->load->view('template/header');
		$this->load->view('template/navigator2', $data);
		$this->load->view('template/side_navi');
		$this->load->view('ims/Ims_request_manage');
	}

	public function manage($func) {
		$a = $this->input->post();
		if ($func == 1) {
			if ($this->input->post('delete')) {
				$this->updateInfo($a, 1);
			} else {
				$this->updateInfo($a, 0);
			}
		} else {
			$this->writeInfo($a);
		}
	}

	public function updateInfo($a, $t) {
		$this->request_manage_model->updateInfo($a, $t);
	}

	public function writeInfo($a) {
		$this->request_manage_model->writeInfo($a);
	}

}
?>