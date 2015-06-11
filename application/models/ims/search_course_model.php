<?php
class Search_course_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function search($info) {
		// $str="select * from imsCourse where"
		$query = $this->db->get_where('imsCourse', $info);
		return $query->result_array();
	}
}
?>