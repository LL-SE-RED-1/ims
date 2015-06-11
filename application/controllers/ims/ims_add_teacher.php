<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_add_teacher extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ims/add_teacher_model');
	}

	public function index() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			$data['navi'] = 2;
			$data['uid'] = $this->session->userdata('uid');
			$data['type'] = $this->session->userdata('user_type');
			$this->load->view('template/header');
			$this->load->view('template/navigator2', $data);
			$this->load->view('template/side_navi');
			$this->load->view('ims/ims_add_teacher');
		}
	}

	public function writeInfo() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			$info = array(
				'uid' => $this->input->post('uid'),
				'name' => $this->input->post('name'),
				'sex' => $this->input->post('sex'),
				'birthday' => $this->input->post('birthday'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'nation' => $this->input->post('nation'),
				'college' => $this->input->post('college'),
				'department' => $this->input->post('department'),
				'position' => $this->input->post('position'),
				'education' => $this->input->post('education'),
				'info' => $this->input->post('info'),
			);
			$this->add_teacher_model->writeInfo($info);
			//成功和失败的反馈
			$this->index();
		}
	}
}
?>