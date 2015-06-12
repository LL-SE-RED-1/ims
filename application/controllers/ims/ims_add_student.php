<?php
if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_add_student extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		}
		$this->load->model('ims/add_student_model');
	}

	public function index($info = NULL, $func = 0) {
		if ($this->session->userdata('user_type') != 3) {
		} else {
			$data['navi'] = 2;
			$data['uid'] = $this->session->userdata('uid');
			$data['type'] = $this->session->userdata('user_type');
			$data['func'] = $func;
			$data['info'] = $info;

			$this->load->view('template/header');
			$this->load->view('template/navigator2', $data);
			$this->load->view('template/side_navi');
			$this->load->view('ims/ims_add_student');
		}
	}

	public function manage($func) {
		$a = $this->input->post();
		if ($this->input->post('delete')) {
			$this->deleteInfo($a);
			redirect('ims/ims_management');
		} elseif ($this->input->post('submit')) {
			$this->writeInfo($a, $func);
		}
	}

	public function writeInfo($a, $func) {
		$info = array('uid' => $a['uid'],
			'name' => $a['name'],
			'sex' => $a['sex'],
			'email' => $a['email'],
			'phone' => $a['phone'],
			'nation' => $a['nation'],
			'birthday' => $a['birthday'],
			'college' => $a['college'],
			'department' => $a['department'],
			'grade' => $a['grade'],
			'class' => $a['class'],
		);
		if ($func == 0) {
			$this->add_student_model->writeInfo($info);
		} else {
			$this->add_student_model->modifyInfo($info);
		}

		//成功失败反馈
		redirect('ims/ims_add_student');
	}

	public function deleteInfo($arr) {
		$info = array('uid' => $a['uid'],
		);
		$this->add_student_model->deleteInfo($info);
	}

}
?>