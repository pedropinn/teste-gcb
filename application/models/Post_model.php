<?php class Post_model extends CI_Model {
	
	//insere no db a variavel recebida em doctors.
	public function saveDoctor($doctor){
		$this->db->insert("doctors", $doctor);
	}
}
