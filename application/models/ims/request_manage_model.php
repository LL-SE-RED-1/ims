<?php

class Requeset_manage_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->helper('date');
		$this->load->database();
	}

	public function writeInfo($a) {
		$this->db->insert('imsCourseReq',
			array('rid' => $a['rid'],
				'cid' => $a['cid'],
				'uid' => $this->session->userdata['uid'],
				'name' => $a['name'],
				'time' => time(),
				'reason' => ($a['reason']==NULL)?NULL:$a['reason'],
				'state' => 0,
				'ctype' => $a['ctype'],
				'college' => $a['college'],
				'department' => $a['department'],
				'credit' => $a['credit'],
				'semester' => $a['semester'],
				'info' => ($a['info']==NULL)?NULL:$a['info'],
				)
			);
	}

	public function updateInfo($a, $t) {
		$this->db->where('rid', $a['rid']);
		if ($t == 1) {
			$this->db->update('imsCourseReq', array('state' => 2));
		} else {
			$this->db->update('imsCourseReq', array('state' => 1));
			$this->db->insert('imsCourse', array(
				'cid' => $a['cid'],
				'name'=>$a['name'],
				'ctype' => $a['ctype'],
				'college' => $a['college'],
				'department' => $a['department'],
				'credit' => $a['credit'],
				'semester' => $a['semester'],
				'info' => $a['info'],
				)
			);
		//反馈
		}
	}

	public function readInfo($info){
		$query=$this->db->get_where('imsCourseReq',array('rid'=>$info));
		return $query->row_array();
	}

	public function readPerson($ID){
		$query=$this->db->get_where('imsTeacher',array('uid'=>$ID));
		$result=$query->row_array();
		return $result['name'];
	}

}
}
?>