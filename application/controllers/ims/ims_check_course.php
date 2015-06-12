<?php

if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_check_course extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ims/check_course_model');
	}

	public function index($info = NULL) {
		$data['navi'] = 2;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		$data['info'] = $info;

		$this->load->view('template/header');
		$this->load->view('template/navigator2', $data);
		$this->load->view('template/side_navi');
		$this->load->view('ims/ims_course_check');
	}

	public function search() {
		$info = array( //0->equ,1->not equ,2->larger,3->less,4->contain,5->not contain
			$this->input->post('var') => $this->input->post('text'),
		);
		$result = $this->check_course_model->search($info);
		$this->index($result);
	}

}
?>