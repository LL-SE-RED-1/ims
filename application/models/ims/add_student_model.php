<?php
class Add_student_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function writeInfo($info) {
		$this->db->insert('imsStudent', $info);
		//成功失败反馈
	}

	public function deleteInfo($info) {
		$this->db->delete('imsStudent', $info);
	}
}
?>