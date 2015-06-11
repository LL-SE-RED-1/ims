<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_add_course extends CI_Controller {
	public function __construct() {
		parent::__construct('ims/add_course_model');
	}

	public function index() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			$data['navi'] = 2;

			$data['uid'] = $this->session->userdata('uid');
			$this->load->view('template/header');
			$this->load->view('template/navigator2', $data);

			$this->load->view('template/side_navi', $data);
			$this->load->view('ims/Ims_add_course');
		}
	}

	public function writeInfo() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
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
	}
}
?>