<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_add_course extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		}
		$this->load->model('ims/add_course_model');
	}

	public function index($info = NULL, $func = 0) {
		$data['navi'] = 2;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		$data['func'] = $func;
		$data['info'] = $info;

		$this->load->view('template/header');
		$this->load->view('template/navigator2', $data);

		$this->load->view('template/side_navi');
		$this->load->view('ims/Ims_add_course');

	}

	public function writeInfo() {
		$info = array('cid' => $this->input->post('cid'),
			'name' => $this->input->post('name'),
			'ctype' => $this->input->post('ctype'),
			'credit' => $this->input->post('credit'),
			'college' => $this->input->post('college'),
			'department' => $this->input->post('department'),
			'semester' => $this->input->post('semester'),
			'info' => $this->input->post('info'),
		);
		$this->add_course_model->writeInfo($info);
		//反馈
		$this->index();

	}

	public function deleteInfo() {

	}
}
?>