<?php
class Add_student_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function writeInfo($info) {
		$this->db->insert('imsStudent', $info);
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
		$this->db->delete('imsStudent', $info);
	}

	public function modifyInfo($info) {
		$this->db->where('uid', $info['uid']);
		$this->db->update('imsStudent', $info);
	}

	public function readInfo($info) {
		$result = $this->db->get_where('imsStudent', array('uid' => $info));
		return $result->row_array();
	}
}
?>