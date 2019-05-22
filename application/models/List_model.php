<?php class List_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	 //recebe todas as informações cadastradas em doctors.
	public function getAllDoctors() {
		return $this->db
		->get("doctors")->result_array();
	}
	

}
