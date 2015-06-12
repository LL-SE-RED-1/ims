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
		if ($info != NULL) {
			$data['info'] = $this->add_course_model->readInfo($info);
		}

		$this->load->view('template/header');
		$this->load->view('template/navigator2', $data);

		$this->load->view('template/side_navi');
		$this->load->view('ims/Ims_add_course');

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
		$info = array('cid' => $a['cid'],
			'name' => $a['name'],
			'semester' => $a['semester'],
			'credit' => $a['credit'],
			'ctype' => $a['ctype'],
			'college' => $a['college'],
			'department' => $a['department'],
			'info' => ($a['info'] == NULL) ? NULL : $a['info'],
		);
		if ($func == 0) {
			$this->add_course_model->writeInfo($info);
		} else {
			$this->add_course_model->modifyInfo($info);
		}

		//成功失败反馈
		redirect('ims/ims_add_course');
	}

	public function deleteInfo() {
		$info = array('cid' => $a['cid'],
		);
		$this->add_course_model->deleteInfo($info);
	}
}
?>