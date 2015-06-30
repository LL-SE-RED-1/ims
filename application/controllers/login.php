<?php

/*
 * Login Controller
 * Implement login function
 * author: lzx
 */

if (!defined('BASEPATH')) {
	exit('Access Denied');
}

$smtpserver = "smtp.googlemail.com";//SMTP服务器
$smtpserverport =25;//SMTP服务器端口
$smtpusermail = "ZJULLSE@163.com";//SMTP服务器的用户邮箱
$smtpemailto = "xuyhhh@gmail.com";//发送给谁
$smtpuser = "ZJULLSE";//SMTP服务器的用户帐号
$smtppass = "llse2015";//SMTP服务器的用户密码
$mailtype = "txt";//邮件格式（HTML/TXT）,TXT为文本邮件

class Login extends CI_Controller {
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

		//load views
		$this->output->enable_profiler(FALSE);
		$this->load->view('template/header');
		$this->load->view('login_view', $data);
	}

	//verify user who want to login
	public function verify() {
		//load user model

		$this->load->model('ims/user_model');

		$post = $this->input->post();
		// use post data to search database and get result
		$result = $this->user_model->verify_user($post);

		if ($result) {
			//if login succeed
			//save user's information in session
			$data = array('uid' => $this->input->post('uid'),
				'user_type' => $this->input->post('userType'),
				'is_logged_in' => TRUE,
			);
			$this->session->set_userdata($data);
			redirect('ims/ims_welcome');
		} else {
			//if login failed
			//redirect to login page and echo error message
			redirect('login/index/2');

		}

	}

	public function reset_pswd($result_num = 0){
		$this->session->unset_userdata('is_logged_in');

		$data['result_num'] = $result_num;
		if($result_num == 1){
			$data['result_info'] = "已发送重置密码邮件，请查收你的校网邮箱";
		}
		else if($result_num == 2){
			$data['result_info'] = "该用户不存在";
		}

		$this->load->view('reset_pswd_view',$data);
	}

	public function send_email(){
		$this->load->model('ims/user_model');

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
			echo $this->email->print_debugger();

			//redirect('login/reset_pswd/1');
		}
		else{
			redirect('login/reset_pswd/2');
		}
	}


}
