<?php

/*
* Modify Password Controller
* author: lzx
*/

if( ! defined('BASEPATH')){
	exit('Access Denied');
}

class Modify_pass extends CI_Controller
{

	public function __construct(){
		parent::__construct();
 
		//先构造，后用session
		if($this->session->userdata('is_logged_in') == FALSE)
		 	redirect('login');
		$this->load->model('ims/user_model');

	}

	public function index($result_num = 0)
	{
		$data['navi'] = 0;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		$data['result_num'] = $result_num;
		switch($result_num){
			case 1: 
				$data['result_info'] = "修改成功！";
				break;
			case 2:
				$data['result_info'] = "修改失败，请重试。";
				break;
			case 3:
				$data['result_info'] = "原密码错误";
		}

		$this->load->view('template/header');
		$this->load->view('template/navigator',$data);		
		$this->load->view('template/side_navi');
		$this->load->view('modify_pass_view',$data);	
	}

	public function modify()
	{
		$post['uid'] = $this->session->userdata('uid');
		$post['userType'] = $this->session->userdata('user_type');
		$post['password'] = $this->input->post('old_pass');
		$post['new_pass'] = $this->input->post('new_pass');
		
		//前端检查两次输入是否相同
		if($this->user_model->verify_user($post))
		{
			if($this->user_model->modify_pass($post))
			{
				redirect('modify_pass/index/1');
			}
			else
			{
				redirect('modify_pass/index/2');
			}
		}
		else
		{
			redirect('modify_pass/index/3');
		}


	}

}