<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_search_course extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		}
		$this->load->model('ims/search_course_model');
	}

	public function index($info = NULL) {
		$data['navi'] = 2;

		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		if ($info != NULL) {
			$data['info'] = $info;
		}

		$this->load->view('template/header');
		$this->load->view('template/navigator2', $data);

		$this->load->view('template/side_navi');
		$this->load->view('ims/ims_search_course');
	}

	public function search() {
		if ($this->input->post('text') == NULL) {
			$result = $this->search_course_model->searchAll();
			$this->index($result);
		} else {
			$info = array( //0->equ,1->not equ,2->larger,3->less,4->contain,5->not contain
				$this->input->post('var') => $this->input->post('text'),
			);
			$result = $this->search_course_model->search($info);
			$this->index($result);
		}
	}
}
?>