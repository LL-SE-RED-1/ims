<?php

class User_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function verify_user($post) {
		$where_array = array('uid' => $post['uid'],
			'password' => md5($post['password']),
			'type' => $post['userType']);
		$query = $this->db->get_where('imsUser', $where_array);

		if ($query->num_rows == 1) {
			return TRUE;
		} else {
			return FALSE;
		}

	}

	public function modify_pass($post) {
		$data = array(
			'password' => $post['new_pass'],
		);

		$result = $this->db->update('imsUser', $data, array('uid' => $post['uid']));

		return $result;
	}

}