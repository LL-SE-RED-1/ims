<?php

class BasicInfo_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function readInfo($userID) {
		$result = $this->db->get_where('imsStudent', array('uid' => $userID));
		return $result->row_array();
	}

	public function writeInfo($info, $userID) {
		$this->db->update('imsStudent', $info, array('uid' => $userID));
	}
}
?>
