<?php
/*
 * System Information Model
 * author: lzx
 */

class Sys_info_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_sys_info() {
		$sys_info = $this->db->get_where('imsSysInfo', array('active' => TRUE));

		if ($sys_info->num_rows() == 1) {
			return $sys_info->row_array();
		} else {
			$sys_info = array('semester' => 0,
				'begin_time' => '0000-00-00',
				'end_time' => '0000-00-00',
				'active' => FALSE);
			return $sys_info;
		}
	}

	public function get_log($limit = 10, $offset = 0) {
		$query = $this->db->get('imsLog', $limit, $offset);

		return $query->result_array();
	}

	public function get_statistic() {
		$info_query = $this->db->get_where('imsLog', array('class' => 0));
		$warning_query = $this->db->get_where('imsLog', array('class' => 1));
		$error_query = $this->db->get_where('imsLog', array('class' => 2));

		$stati['info'] = $info_query->num_rows();
		$stati['warning'] = $warning_query->num_rows();
		$stati['error'] = $error_query->num_rows();

		return $stati;
	}
}