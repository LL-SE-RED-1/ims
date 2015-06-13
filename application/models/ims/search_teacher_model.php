<?php
class Search_teacher_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function search($info) {
		// $str="select * from imsTeacher where"
		$query = $this->db->get_where('imsTeacher', $info);
		return $query->result_array();
	}

	public function searchAll() {
		$query = $this->db->get('imsTeacher');
		return $query->result_array();
	}
}
?>