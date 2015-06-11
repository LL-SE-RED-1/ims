<?php
class Add_teacher_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function writeInfo($info) {
		$this->db->insert('imsTeacher', $info);
		//成功或失败反馈
	}
}
?>