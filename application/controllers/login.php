<?php

/*
 * Login Controller
 * author: lzx
 */

if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Login extends CI_Controller {
	public function index() {
		//if($this->session->userdata('is_logged_in') != FALSE){
		//	redirect('ims/ims_permission');
		//}
		$this->session->unset_userdata('is_logged_in');

		$this->output->enable_profiler(FALSE);
		$this->load->view('template/header');
		$this->load->view('login_view');
	}

	public function verify() {
		$this->load->model('ims/user_model');
		$result = $this->user_model->verify_user();

		if ($result) {
			// 可以先不用加
			$data = array('uid' => $this->input->post('uid'),
				'user_type' => $this->input->post('userType'),
				'is_logged_in' => TRUE,
			);
			//session
			$this->session->set_userdata($data);

			if ($data['uid'] == '0000000000') {
				redirect('ims/ims_system');
			} else if ($data['user_type'] == 1) {
				redirect('ims/ims_basicInfo');
			} else if ($data['user_type'] == 2) {
				redirect('ims/ims_tea_welcome');
			} else {
				redirect('ims/ims_permission');
			}

			//$this->index();
		} else {
			$this->index();
			//redirect('ims/ims_welcome');
		}

	}
}

//上传照片
//搜索功能debug
//登录选项框
//教师request页面
//
