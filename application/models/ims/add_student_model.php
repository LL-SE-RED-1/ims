<?php
class Add_student_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function writeInfo($info) {
		if (!$this->db->insert('imsStudent', $info)) {
			return $this->db->_error_message();
		}

		if (!$this->db->insert('imsUser', array(
			'uid' => $info['uid'],
			'password' => md5($info['uid']),
			'type' => 1,
			'active' => 1,
		)
		)) {
			return $this->db->_error_message();
		}
		return 0;
	}

	public function deleteInfo($info) {
		if (!$this->db->delete('imsUser', $info)) {
			return $this->db->_error_message();
		}
		if (!$this->db->delete('imsStudent', $info)) {
			return $this->db->_error_message();
		}
		return 0;
	}

	public function modifyInfo($info) {
		if (!$this->db->where('uid', $info['uid'])) {
			return $this->db->_error_message();
		}

		if (!$this->db->update('imsStudent', $info)) {
			return $this->db->_error_message();
		}

		return 0;
	}

	public function readInfo($info) {
		$result = $this->db->get_where('imsStudent', array('uid' => $info));
		return $result->row_array();
	}
}
?>