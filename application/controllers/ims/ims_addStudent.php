<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_addStudent extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ims/addStudent_model');
	}

	public function index() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			$data['navi'] = 2;
			$this->load->view('template/header');
			$this->load->view('template/navigator2');
			$this->load->view('template/side_navi', $data);
			$this->load->view('ims/ims_addStudent');
		}
	}
}
?>