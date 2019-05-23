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
	

	// Cria select com estados. 
	public function selectStates()
	{
		$options = "<option value=''>Selecione o estado</option>";
		$states = $this -> getAll();

		foreach($states -> result() as $state) {
			$options .= "<option value='{$state->Uf}'>{$state->Nome}</option>".PHP_EOL;
		}
		return $options;
	}


		 // Traz todos as proficiencias cadastrados ordenado por nome.
		 public function getAllSkills() {
			return $this->db
			->order_by('Skill')
			->get('skills');
		}
		
	
		// Cria select com skills. 
		public function selectSkiils()
		{
			$options = "<option value=''>Selocione especialidade</option>";
			$skill = $this -> getAllSkills();
	
			foreach($skill -> result() as $skills) {
				$options .= "<option value='{$skills->Skill}'>{$skills->Skill}</option>".PHP_EOL;
			}
			return $options;
		}
	
	}
		

