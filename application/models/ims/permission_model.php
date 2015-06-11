<?php
/*
* Permission Model
* author: lzx
*/

class Permission_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_per()
	{
		$query = $this->db->get('imsPermission');

		return $query->result_array();	
	}

	public function create_per($post)
	{
		$data = array(
					'stuPermi' => $post['stu_per'],
					'teaPermi' => $post['tea_per'],
					'description' => $post['per_name']
					);

		$result = $this->db->insert('imsPermission', $data); 

		return $result;
	}
	
	public function update_per($post)
	{
		$data = array(
               		'stuPermi' => $post['stu_per'],
               		'teaPermi' => $post['tea_per']
            	);

		$result = $this->db->update('imsPermission', $data, array('pid' => $post['pid']));

		return $result;
	}

	public function delete_per($post)
	{
		$result = $this->db->delete('imsPermission', array('pid' => $post['pid'])); 

		return $result;
	}
}