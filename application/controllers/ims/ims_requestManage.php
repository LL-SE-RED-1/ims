<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}
class Ims_requestManage extends CI_Controller {
	public function __construct() {
		parent::__construct('ims/requestManage_model');
	}

	public function index() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			$data['navi'] = 2;
			$data['uid'] = $this->session->userdata('uid');
			$this->load->view('template/header');
			$this->load->view('template/navigator2',$data);
			$this->load->view('template/side_navi', $data);
			$this->load->view('ims/Ims_requestManage');
		}
	}
}
?>