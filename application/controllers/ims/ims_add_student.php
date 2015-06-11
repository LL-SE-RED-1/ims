<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_add_student extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ims/add_student_model');
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
			$this->load->view('ims/ims_add_student');
		}
	}

	public function writeInfo() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			$info = array('uid' => $this->input->post('uid'),
				'name' => $this->input->post('name'),
				'sex' => $this->input->post('sex'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'nation' => $this->input->post('nation'),
				'birthday' => $this->input->post('birthday'),
				'college' => $this->input->post('college'),
				'department' => $this->input->post('department'),
				'grade' => $this->input->post('grade'),
				'class' => $this->input->post('class'),
			);
			$this->add_student_model->writeInfo($info);
			//成功失败反馈
			$this->index();
		}
	}
}
?>