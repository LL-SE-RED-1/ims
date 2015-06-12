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
		if ($info != NULL) {
			$data['info'] = $this->request_manage_model->readInfo($info);
			$data['person'] = $this->request_manage_model->readPerson($data['info']['uid']);
		}

		$data['func'] = $func;

		$this->load->view('template/header');
		$this->load->view('template/navigator2', $data);
		$this->load->view('template/side_navi');
		$this->load->view('ims/ims_request_manage');
	}

	public function manage($func, $rid = 0) {
		$a = $this->input->post();
		if ($func == 1) {
			if ($this->input->post('delete')) {
				$this->updateInfo($a, 1, $rid);
			} else {
				$this->updateInfo($a, 0, $rid);
			}
			redirect('ims/ims_check_course');
		} else {
			$this->writeInfo($a);
			redirect('ims/ims_request_manage');
		}
	}

	public function updateInfo($a, $t, $rid) {
		$this->request_manage_model->updateInfo($a, $t, $rid);
	}

	public function writeInfo($a) {
		$this->request_manage_model->writeInfo($a);
	}

}
?>