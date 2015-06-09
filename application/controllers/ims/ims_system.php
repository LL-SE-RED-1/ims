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
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Shanghai");
		if($this->session->userdata('is_logged_in') == FALSE)
		 	redirect('login');
	}
	
	public function index()
	{
		$this->load->model('ims/sys_info_model');
		$this->load->helper('date');

		$data['navi'] = 4;
		$data['sys_info'] = $this->sys_info_model->get_sys_info();
		$log = $this->sys_info_model->get_log();
		$data['log'] = $log['query'];
		$data['log_stati'] = $this->sys_info_model->get_statistic();
		$data['uid'] = $this->session->userdata('uid');

		switch($data['sys_info']['semester'])
		{
			case 0:
				$data['sys_info']['semester']='系统信息错误';
				break;
			case 1:
				$data['sys_info']['semester']='春学期';
				break;
			case 2:
				$data['sys_info']['semester']='夏学期';
				break;
			case 3:
				$data['sys_info']['semester']='短学期';
				break;
			case 4:
				$data['sys_info']['semester']='秋学期';
				break;
			case 5:
				$data['sys_info']['semester']='冬学期';
				break;
			case 6:
				$data['sys_info']['semester']='暑假';
				break;
		}

		$datestring = "%Y-%m-%d";
		$data['sys_info']['date'] = mdate($datestring); 

		$timestring = "%H:%i";
		$data['sys_info']['time'] = mdate($timestring);

	    $this->load->library('pagination');

        $config['base_url'] = site_url('ims/ims_system');
        $config['total_rows'] = $log['num'];
        $config['per_page'] = 1;

        $this->pagination->initialize($config);
        echo $this->pagination->create_links();

		$this->load->view('template/header');
		$this->load->view('template/navigator',$data);
		$this->load->view('template/side_navi',$data);
		$this->load->view('ims/ims_system_view');
	}

}