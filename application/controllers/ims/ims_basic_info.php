<?php

if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_basic_info extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ims/basic_info_model');
	}

	public function index() {
		echo ("<script>alert('我是弹窗')</script>");
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		} else {
			//echo ("<script> console.log('lala3') </script>");
			$data['basicInfo'] = $this->basic_info_model->readInfo($this->session->userdata('uid'));
			$data['navi'] = 1;

			$data['uid'] = $this->session->userdata('uid');

			$this->load->view('template/header');
			$this->load->view('template/navigator', $data);

			$this->load->view('template/side_navi', $data);
			$this->load->view('ims/ims_basic_info');
		}
	}

	public function update() {
		if ($this->session->userdata('is_logged_in') == False) {
			redirect('login');
		}
		// echo ("<script> console.log('lala') </script>");
		else {
			if ($this->input->post("save")) {
				// echo ("<script> console.log('lala') </script>");
				$info = array('sex' => $this->input->post('sex'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'birthday' => $this->input->post("birthday"),
					'nation' => $this->input->post('nation'),
				);
				$this->basicInfo_model->writeInfo($info, $this->session->userdata('uid'));
				$this->index();
			} else {
				$this->index();
			}
		}
	}
}

?>
