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

	public function index()
	{
		$data['navi'] = 0;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');

		$this->load->view('template/header');
		$this->load->view('template/navigator');
		$this->load->view('modify_passwd_view');	
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
			if($this->user_model->modify_pass())
			{
				switch($post['userType'])
				{
					case 1:
						redirect('ims/ims_basic_info');
						break;
					case 2:
						redirect('ims/ims_basic_info_teacher');
						break;
					case 3:
						redirect('ims/ims_management');
						break;
					case 4:
						redirect('ims/ims_system');
						break;
				}
			}
			else
			{
				//do something
			}
		}
		else
		{
			// do something
		}


	}

}