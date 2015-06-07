<?php

/*
* Ims_welcome Controller
* author: lzx
*/

if( ! defined('BASEPATH')){
	exit('Access Denied');
}

class Ims_welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('ims/ims_welcome_view');
	}
}