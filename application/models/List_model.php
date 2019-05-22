<?php class List_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	 // Traz todos os médicos
	public function getAllDoctors() {
		return $this->db
		->get("doctors")->result_array();
	}
	

}
