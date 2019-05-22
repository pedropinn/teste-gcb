<?php class State_model extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	 // Traz todos os estados cadastrados ordenado por nome.
	public function getAll() {
		return $this->db
		->order_by('Nome')
		->get('state');
	}
	

	// Cria select de options com estados. 
	public function selectStates()
	{
		$options = "<option value=''>Selecione o estado</option>";
		$states = $this -> getAll();

		foreach($states -> result() as $state) {
			$options .= "<option value='{$state->Uf}'>{$state->Nome}</option>".PHP_EOL;
		}
		return $options;
	}

	public function getAllDoctors() {
		return $this->db
		->get("doctors")->result_array();
	}
	

}
