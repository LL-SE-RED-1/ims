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
	public function index()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->view('login_view');	
	}

	public function verify()
	{
		$this->load->model('ims/user_model');
		$result = $this->user_model->verify_user();
		
		if($result)
		{
			$data = array('uid' => $this->input->post('uid'),
						  'user_type' => $this->input->post('userType'),
						  'is_logged_in' => TRUE
						  );
			$this->session->set_userdata($data);

			redirect('ims/ims_welcome');
			//$this->index();
		}
		else
		{
			$this->index();
			//redirect('ims/ims_welcome');
		}
		
	}
}