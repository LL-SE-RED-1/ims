<?php

if (!defined('BASEPATH')) {
	exit('Access Denied');
}

class Ims_check_course extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
}
?>