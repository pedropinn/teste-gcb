<?php class Post_model extends CI_Model {
	
	//insere no db a variavel recebida em doctors.
	public function saveDoctor($doctor){
		$this->db->insert('doctors', $doctor);
	}

	//get medicos com base no id
	public function returnId($id){
		return $this->db->get_where("doctors", array(
			'id' => $id)) -> row_array();
	}

	//deleta médico baseado no id
	public function deleteDoctor($id){
		$this->db->where('Id', $id);
		$this->db->delete('doctors');
		return TRUE;
	}

	//salva edição 
	public function saveEdit(){
		$id = $this->input->post('idInput');
		$doctor = array(
			'Crm' => $this->input->post('crmInput'),
			'Name' => $this->input->post('nameInput'),
			'Phone' => $this->input->post('phoneInput'),
			'State' => $this->input->post('stateInput'),
			'City' => $this->input->post('cityInput'),
			'Skill1' => $this->input->post('skill1Input'),
			'Skill2' => $this->input->post('skill2Input'), 
		);

		$this->db->where('Id', $id);
		return $this->db->update('doctors', $doctor);
	}
}
