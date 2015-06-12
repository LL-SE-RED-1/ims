<?php
/*
* Ims Interface Model
* author: lzx
*/

class Ims_interface_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_sys_info()
	{
		$this->load->model('ims/sys_info_model');
		$sys_info = $this->sys_info_mode->get_sys_info();
		return $sys_info;
	}
	
	public write_log($post)
	{
		$this->load->model('ims/sys_info_model');
		$result = $this->sys_info_model->write_log($post);
		return $result;
	}

	public verify_user($post)
	{
		$this->load->model('ims/user_model');
		$result = $this->user_model->verify_user($post);
		return $result;
	}

	public getStudent($userID)
	{	
		$this->load->model('ims/basic_info_model');
		$student = $this->basic_info_model->readInfo($userID);
		return $student;
	}

	public getTeacher($userID)
	{
		$this->load->model('ims/basic_info_teacher_model');
		$teacher = $this->basic_info_teacher_model->readInfo($userID);
		return $teacher;
	}

}