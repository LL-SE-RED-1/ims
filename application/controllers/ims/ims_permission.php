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

	public function index($result_num = 0)
	{
		$data['navi'] = 3;
		$data['uid'] = $this->session->userdata('uid');
		$data['type'] = $this->session->userdata('user_type');
		$data['permission'] = $this->permission_model->get_per();
		$data['result_num'] = $result_num;
		switch($result_num){
			case 1: 
				$data['result_info'] = "创建成功！";
				break;
			case 2:
				$data['result_info'] = "创建失败，请重试。";
				break;
			case 3: 
				$data['result_info'] = "更新成功！";
				break;
			case 4:
				$data['result_info'] = "更新失败，请重试。";
				break;
			case 5: 
				$data['result_info'] = "删除成功！";
				break;
			case 6:
				$data['result_info'] = "删除失败，请重试。";
				break;
		}

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
			redirect('ims/ims_permission/index/1');
		}
		else
		{
			redirect('ims/ims_permission/index/2');
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
			redirect('ims/ims_permission/index/3');
		}
		else
		{
			redirect('ims/ims_permission/index/4');
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
			redirect('ims/ims_permission/index/5');
		}
		else
		{
			redirect('ims/ims_permission/index/6');
		}
	}

}
