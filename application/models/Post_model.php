<?php class Post_model extends CI_Model {
	
	
	public function saveDoctor($doctor){
		$this->db->insert("doctors", $doctor);
	}
}
