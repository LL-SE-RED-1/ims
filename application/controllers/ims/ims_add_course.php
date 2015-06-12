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

	public function index($info = NULL, $func = 0, $ret_result = 0, $error_info = NULL) {
		$data['navi'] = 2;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		$data['func'] = $func;
		if ($info != NULL) {
			$data['info'] = $this->add_course_model->readInfo($info);
		}
		$data['result_num'] = $ret_result;
		$data['result_info'] = $error_info;
		$this->load->view('template/header');
		$this->load->view('template/navigator2', $data);
		$this->load->view('template/side_navi');
		$this->load->view('ims/ims_add_course');

	}

	public function manage($func) {
		$a = $this->input->post();
		if ($this->input->post('cancel')) {
			$ret = $this->deleteInfo($a);
		} elseif ($this->input->post('submit')) {
			$ret = $this->writeInfo($a, $func);
		}
		if ($ret === 0) {
			//操作成功
			$this->index(NULL, 0, 1, NULL);
		} else {
			//操作失败
			$this->index(NULL, 0, 2, $ret);
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
			$ret = $this->add_course_model->writeInfo($info);
		} else {
			$ret = $this->add_course_model->modifyInfo($info);
		}
		return $ret;
	}

	public function deleteInfo($a) {
		$info = array('cid' => $a['cid'],
		);
		$ret = $this->add_course_model->deleteInfo($info);
		return $ret;
	}
}
?>