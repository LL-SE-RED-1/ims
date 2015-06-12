<?php

class Add_course_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function writeInfo($info) {
		$this->db->insert('imsCourse', $info);
		//反馈
	}

	public function deleteInfo($info) {
		$this->db->delete('imsCourse', $info);
	}

	public function modifyInfo($info) {
		$this->db->where('cid', $info['cid']);
		$this->db->update('imsCourse', $info);
	}

	public function readInfo($info) {
		$query = $this->db->get_where('imsCourse', array('cid' => $info));
		return $query->row_array();
	}
}
?>