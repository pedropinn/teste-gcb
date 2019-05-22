<?php class State_model extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	 // Traz todos as proficiencias cadastrados ordenado por nome.
	public function getAllSkills() {
		return $this->db
		->order_by('Nome')
		->get('skills');
	}
	

	// Cria select com skills. 
	public function selectSkiils()
	{
		$options = "<option value=''>Selocione especialidade</option>";
		$skills = $this -> getAll();

		foreach($skills -> result() as $skill) {
			$options .= "<option value='{$skill->Id}'>{$skill->Skill}</option>".PHP_EOL;
		}
		return $options;
	}

}
