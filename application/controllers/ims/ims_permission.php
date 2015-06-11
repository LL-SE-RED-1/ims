<?php

/*
* Ims_permission Controller
* author: lzx
*/

if( ! defined('BASEPATH')){
	exit('Access Denied');
}

class Ims_permission extends CI_Controller
{
	public function __construct(){
		parent::__construct();

		//先构造，后用session
		if($this->session->userdata('is_logged_in') == FALSE)
		 	redirect('login');
		$this->load->model('ims/permission_model');

	}

	public function index()
	{
		$data['navi'] = 3;
		$data['uid'] = $this->session->userdata('uid');

		$data['permission'] = $this->permission_model->get_per();

		$this->load->view('template/header');
		$this->load->view('template/navigator',$data);
		$this->load->view('template/side_navi',$data);
		$this->load->view('ims/ims_permission_view',$data);
	}

	public function create()
	{
		$post['per_name'] = $this->input->post('per_name');
		$post['stu_per'] = ($this->input->post('stu_per') == 'on');		
		$post['tea_per'] = ($this->input->post('tea_per') == 'on');
				
		$result = $this->permission_model->create_per($post);
		
		if($result)
		{
			redirect('ims/ims_permission');
		}
		else{
			// do something
		}
		
	}

	public function modify($pid)
	{
		// die(var_dump($this->input->post()));
		if($this->input->post('update'))
			$this->update($pid);
		else
			$this->delete($pid);

	}

	public function update($pid)
	{	
		$post['pid'] = $pid;
		$post['stu_per'] = ($this->input->post('stu_per') == 'on');		
		$post['tea_per'] = ($this->input->post('tea_per') == 'on');

		$result = $this->permission_model->update_per($post);

		if($result)
		{
			redirect('ims/ims_permission');
		}
		else{
			//do something
		}
	}

	public function delete($pid)
	{	
		$post['pid'] = $pid;
		$post['stu_per'] = ($this->input->post('stu_per') == 'on');		
		$post['tea_per'] = ($this->input->post('tea_per') == 'on');

		$result = $this->permission_model->delete_per($post);

		if($result)
		{
			redirect('ims/ims_permission');
		}
		else{
			//do something
		}

	}

}
