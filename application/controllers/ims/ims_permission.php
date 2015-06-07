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
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navigator');
		$this->load->view('ims/ims_permission_view');
	}
}