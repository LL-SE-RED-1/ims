<?php
class Search_student_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function search($info) {
		// $str="select * from imsStudent where"
		$query = $this->db->get_where('imsStudent', $info);
		return $query->result_array();
	}
	public function searchAll() {
		$query = $this->db->get('imsStudent');
		return $query->result_array();
	}
}
?>