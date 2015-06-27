<?php

class Add_course_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function batchInsert($info) {
		if (!$this->db->insert_batch('imsCourse', $info)) {
			return $this->db->_error_message();
		}
		return 0;
	}

	//添加课程，返回结果
	public function writeInfo($info) {
		if (!$this->db->insert('imsCourse', $info)) {
			return $this->db->_error_message();
		}
		return 0;
	}

	//删除课程，返回结果
	public function deleteInfo($info) {
		if (!$this->db->delete('imsCourse', $info)) {
			return $this->db->_error_message();
		}
		return 0;
	}

	//修改课程，返回结果
	public function modifyInfo($info) {
		if (!$this->db->where('cid', $info['cid'])) {
			return $this->db->_error_message();
		}

		if (!$this->db->update('imsCourse', $info)) {
			return $this->db->_error_message();
		}

		return 0;
	}

	//读取课程基本信息
	public function readInfo($info) {
		$query = $this->db->get_where('imsCourse', array('cid' => $info));
		return $query->row_array();
	}
}
?>