<?php

/*
* Login Controller
* author: lzx
*/

if( ! defined('BASEPATH')){
	exit('Access Denied');
}

class Login extends CI_Controller
{
	public function index($result_num = 0)
	{
		//if($this->session->userdata('is_logged_in') != FALSE){
		//	redirect('ims/ims_permission');
		//}
		$this->session->unset_userdata('is_logged_in');

		$data['result_num'] = $result_num;
		if($result_num == 2)
			$data['result_info'] = "用户名或密码错误！";
		
		$this->output->enable_profiler(FALSE);
		$this->load->view('template/header');
		$this->load->view('login_view',$data);	
	}

	public function verify()
	{
		$this->load->model('ims/user_model');

		$post = $this->input->post();
		$result = $this->user_model->verify_user($post);
		
		if($result)
		{
			// 可以先不用加
			$data = array('uid' => $this->input->post('uid'),
						  'user_type' => $this->input->post('userType'),
						  'is_logged_in' => TRUE
						  );
			//session
			$this->session->set_userdata($data);
			if ($data['user_type'] == 4) {
				redirect('ims/ims_system');
			} else if ($data['user_type'] == 1) {
				redirect('ims/ims_basic_info');
			} else if ($data['user_type'] == 2) {
				redirect('ims/ims_basic_info_teacher');
			} else {
				redirect('ims/ims_permission');
			}			//$this->index();
		}
		else
		{
			redirect('login/index/2');
		}
		
	}
}