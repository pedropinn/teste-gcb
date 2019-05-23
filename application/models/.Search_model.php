<?php class Search_model extends CI_Model {
	public function searchDoctor(){
		return $this->db->get('doctors') -> result_array();
	}

 



}
