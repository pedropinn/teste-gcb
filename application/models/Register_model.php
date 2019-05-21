<?php 
class Register_model extends CI_Model {
	public function salve($doctor){
		$this->db>insert("doctors", $doctor);
	}

} 
