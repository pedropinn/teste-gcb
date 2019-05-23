<?php class List_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	 //recebe todas as informações cadastradas em doctors.
	public function getAllDoctors() {
		return $this->db
		->get('doctors')->result_array();
	}
	
	public function search($doctor){
		if (empty($doctor))
		return array();

	$doctor = $this->input->post('search');
	$this->db->like('Name', $doctor);
	$query = $this->db->get('doctors');
	return $query->result_array();
 }

}
