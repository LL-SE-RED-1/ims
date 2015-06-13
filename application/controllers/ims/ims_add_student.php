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

	public function index($info = NULL, $func = 0, $ret_result = 0, $error_info = NULL) {
		if ($this->session->userdata('user_type') != 3) {
		} else {
			$data['navi'] = 2;
			$data['uid'] = $this->session->userdata('uid');
			$data['type'] = $this->session->userdata('user_type');
			$data['func'] = $func;
			if ($info != NULL) {
				$data['info'] = $this->add_student_model->readInfo($info);
			}
			// echo ("<script> console.log('" . $ret_result . "') </script>");
			$data['result_num'] = $ret_result;
			$data['result_info'] = $error_info;
			$this->load->view('template/header');
			$this->load->view('template/navigator2', $data);
			$this->load->view('template/side_navi');
			$this->load->view('ims/ims_add_student');
		}
	}

	public function manage($func) {
		$a = $this->input->post();
		if ($this->input->post('delete')) {
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
		$info = array('uid' => $a['uid'],
			'name' => $a['name'],
			'sex' => ($a['sex'] == NULL) ? NULL : $a['sex'],
			'email' => ($a['email'] == NULL) ? NULL : $a['email'],
			'phone' => ($a['phone'] == NULL) ? NULL : $a['phone'],
			'nation' => ($a['nation'] == NULL) ? NULL : $a['nation'],
			'birthday' => ($a['birthday'] == NULL) ? NULL : $a['birthday'],
			'college' => ($a['college'] == NULL) ? NULL : $a['college'],
			'department' => ($a['department'] == NULL) ? NULL : $a['department'],
			'grade' => ($a['grade'] == NULL) ? NULL : $a['grade'],
			'class' => ($a['class'] == NULL) ? NULL : $a['class'],
		);
		if ($func == 0) {
			$ret = $this->add_student_model->writeInfo($info);
		} else {
			$ret = $this->add_student_model->modifyInfo($info);
		}
		// die(var_dump($ret));
		return $ret;
	}

	public function deleteInfo($a) {
		$info = array('uid' => $a['uid'],
		);
		$ret = $this->add_student_model->deleteInfo($info);
		return $ret;
	}

}
?>