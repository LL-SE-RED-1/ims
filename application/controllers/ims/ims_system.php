<?php

/*
* Ims_system Controller
* author: lzx
*/

if( ! defined('BASEPATH')){
	exit('Access Denied');
}

class Ims_system extends CI_Controller
{
	public function index()
	{
		$data['navi'] = 4;

		$this->load->view('template/header');
		$this->load->view('template/navigator');
		$this->load->view('template/side_navi',$data);
		$this->load->view('ims/ims_system_view');
	}

}