<?php
/*
 * Login Model
 * author: lzx
 */

class User_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function verify_user() {
		// echo "<script> console.log('" . md5($this->input->post('password')) . "')</script>";
		$where_array = array('uid' => $this->input->post('uid'),
			'password' => md5($this->input->post('password')),
			'type' => $this->input->post('userType'),
		);
		$query = $this->db->get_where('imsUser', $where_array);

		if ($query->num_rows == 1) {
			return TRUE;
		} else {
			return FALSE;
		}

	}

}