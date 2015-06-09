<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_addCourse extends CI_Controller {
	public function __construct() {
		parent::__construct('ims/addCourse_model');
	}

	public function index() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			$data['navi'] = 2;
			$this->load->view('template/header');
			$this->load->view('template/navigator2');
			$this->load->view('template/side_navi', $data);
			$this->load->view('ims/Ims_addCourse');
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
				'semester' => 2,
			);
			echo "<script>console.log('" . $info . "')</script>";
			echo "<script>console.log('ok1')</script>";
			$this->addCourse_model->writeInfo($info);
			echo "<script>console.log('ok2')</script>";
			//反馈
			$this->index();
		}
	}
}
?>