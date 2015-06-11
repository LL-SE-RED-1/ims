<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_basic_info_teacher extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		}
		$this->load->model('ims/basic_info_teacher_model');

	}

	public function index() {

		$data['navi'] = 1;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		$data['basicInfo'] = $this->basic_info_teacher_model->readInfo($data['uid']);

		$this->load->view('template/header', $data);
		$this->load->view('template/navigator');
		$this->load->view('template/side_navi');
		$this->load->view('ims/ims_basic_info_teacher');

	}

	public function update() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			if ($this->input->post("save")) {
				// echo ("<script> console.log('lala') </script>");
				$info = array('sex' => $this->input->post('sex'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'birthday' => $this->input->post("birthday"),
					'nation' => $this->input->post('nation'),
					'info' => $this->input->post('info'),
				);
				$this->basic_info_teacher_model->writeInfo($info, $this->session->userdata('uid'));
				redirect('ims/ims_basic_info_teacher');
			} else {
				redirect('ims/ims_basic_info_teacher');
			}
		}
	}
}
?>