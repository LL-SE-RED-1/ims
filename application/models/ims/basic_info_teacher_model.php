<?php

class Basic_info_teacher_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function readInfo($userID) {
		$result = $this->db->get_where('imsTeacher', array('uid' => $userID));
		return $result->row_array();
	}

	public function writeInfo($info, $userID) {
		$this->db->update('imsTeacher', $info, array('uid' => $userID));
	}
}
?>
