<?php
class Add_teacher_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function writeInfo($info) {
		$this->db->insert('imsTeacher', $info);
		$this->db->insert('imsUser',
			array('uid' => $info['uid'],
				'password' => md5($info['uid']),
				'type' => 1,
				'active' => 1,
			)
		);
		//成功失败反馈
	}
	public function deleteInfo($info) {
		$this->db->delete('imsUser', $info);
		$this->db->delete('imsTeacher', $info);
	}

	public function modifyInfo($info) {
		$this->db->where('uid', $info['uid']);
		$this->db->update('imsTeacher', $info);
	}

	public function readInfo($info) {
		$query = $this->db->get_where('imsTeacher', array('uid' => $info));
		return $query->row_array();
	}
}
?>