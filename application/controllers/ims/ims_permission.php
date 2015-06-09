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
		 if($this->session->userdata('is_logged_in') == FALSE)
		 	redirect('login');
	}

	public function index()
	{
		$data['navi'] = 3;
		$data['uid'] = $this->session->userdata('uid');

		$this->load->view('template/header');
		$this->load->view('template/navigator',$data);
		$this->load->view('template/side_navi',$data);
		$this->load->view('ims/ims_permission_view');
	}

	public function create()
	{
		if($this->session->userdata('is_logged_in') == FALSE)
			redirect('login');
	}

	public function delete()
	{
		if($this->session->userdata('is_logged_in') == FALSE)
			redirect('login');
	}
}