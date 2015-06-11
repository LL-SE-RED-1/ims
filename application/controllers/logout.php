<?php

/*
* Logout Controller
* author: lzx
*/

if( ! defined('BASEPATH')){
	exit('Access Denied');
}

class Logout extends CI_Controller
{
	public function index()
	{
		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('userType');
		$this->session->unset_userdata('is_logged_in');

		redirect('login');
	}
}
