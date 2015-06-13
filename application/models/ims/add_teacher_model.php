<?php
class Add_teacher_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	//创建新的老师，返回操作结果
	public function writeInfo($info) {
		if (!$this->db->insert('imsTeacher', $info)) {
			return $this->db->_error_message();
		}

		if (!$this->db->insert('imsUser',
			array('uid' => $info['uid'],
				'password' => md5($info['uid']),
				'type' => 2,
				'active' => 1,
			)
		)) {
			return $this->db->_error_message();
		}
		return 0;
	}
	//删除教师
	public function deleteInfo($info) {
		if (!$this->db->delete('imsUser', $info)) {
			return $this->db->_error_message();
		}

		if (!$this->db->delete('imsTeacher', $info)) {
			return $this->db->_error_message();
		}

		return 0;
	}

	//根据传入信息，修改教师基本信息
	public function modifyInfo($info) {
		if (!$this->db->where('uid', $info['uid'])) {
			return $this->db->_error_message();
		}

		if (!$this->db->update('imsTeacher', $info)) {
			return $this->db->_error_message();
		}

		return 0;
	}

	//根据用户ID，读取教师基本信息
	public function readInfo($info) {
		$query = $this->db->get_where('imsTeacher', array('uid' => $info));
		return $query->row_array();
	}
}
?>