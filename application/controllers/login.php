<?php

/*
 * Login Controller
 * Implement login function
 * author: lzx
 */

if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//装载后端model
		$this->load->model('ims/user_model');
	}

	public function index($result_num = 0) {
		//if($this->session->userdata('is_logged_in') != FALSE){
		//	redirect('ims/ims_permission');
		//}

		//unset seesion to relogin
		$this->session->unset_userdata('is_logged_in');

		$data['result_num'] = $result_num;
		//if login failed, echo error information
		if ($result_num == 2) {
			$data['result_info'] = "用户名或密码错误！";
		}
		else if($result_num == 3){
			$data['result_info'] = "无效链接";
		}

		//load views
		$this->output->enable_profiler(FALSE);
		$this->load->view('template/header');
		$this->load->view('login_view', $data);
	}

	//verify user who want to login
	public function verify() {
		//load user model

		// $this->load->model('ims/user_model');

		$post = $this->input->post();
		// use post data to search database and get result
		$result = $this->user_model->verify_user($post);

		if ($result) {
			//if login succeed
			//save user's information in session
			$data = array('uid' => $this->input->post('uid'),
				'user_type' => $this->input->post('userType'),
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata($data);
			redirect('ims/ims_welcome');
		} else {
			//if login failed
			//redirect to login page and echo error message
			redirect('login/index/2');

		}

	}

	//reset界面的控制器
	public function reset_pswd($result_num = 0){
		$this->session->unset_userdata('is_logged_in');

		$data['result_num'] = $result_num;
		if($result_num == 1){
			$data['result_info'] = "已发送重置密码邮件，请查收你的校网邮箱";
		}
		else if($result_num == 2){
			$data['result_info'] = "该用户不存在";
		}

		$this->load->view('template/header');
		$this->load->view('reset_pswd_view',$data);
	}

	//检测用户是否存在并发送重置密码的邮件
	public function send_email(){
		// $this->load->model('ims/user_model');

		$uid = $this->input->post('uid');
		$user = $this->user_model->get_user($uid);

		if($user){
			$token = md5($uid.$user['password']);
			$url = site_url('login/modify_pswd')."?uid=".$uid."&token=".$token;

			$this->load->library('email');
			$this->email->mailtype='html';
			$this->email->from('no-reply@llseims.com','IMS子系统');
			$this->email->to($uid."@zju.edu.cn");

			$this->email->subject('重置密码');
			$message = "
			<html>
			<head>
			<title>教务管理系统-重置密码</title>
			</head>
			<body>
				<p>请点击下面的链接以重置密码</p><br/>
				<a href='".$url."'target='_blank'>".$url."</a>
			</body>
			</html>
			";
			$this->email->message($message);
			$this->email->send();

			redirect('login/reset_pswd/1');
		}
		else{
			redirect('login/reset_pswd/2');
		}
	}

	//从邮件中跳转到这个控制器
	//需要修改
	public function modify_pswd(){
		$uid = $this->input->get('uid');
		$token = $this->input->get('token');
		$user = $this->user_model->get_user($uid);

		if ($user) {
			//防止用户通过改动链接的方式来欺骗系统
			$mt = md5($user['uid'].$user['password']);
			if($mt == $token){ 	//通过验证
				$data = array('uid' => $user['uid'],
					'user_type' => $user['type'],
					'is_logged_in' => TRUE
				);
				$this->session->set_userdata($data);
				redirect('modify_pass');
			}
			else{
				redirect('login/index/3');
			}
			
		} else {
			//if login failed
			//redirect to login page and echo error message
			redirect('login/index/3');
		}
	}


}
