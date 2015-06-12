<?php

class Check_course_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function search($info) {
		$query = $this->db->get_where('imsCourseReq', $info);
		return $query->result_array();
	}

}
?>