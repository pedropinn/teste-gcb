<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterDoctor extends CI_Controller {
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
	
	

		public function new(){
		//Executa model para estado e cidades.
		$this->load->model('State_model');
		$data = [ 'options_states' => $this -> State_model -> selectStates(),
		'options_skills' => $this -> State_model -> selectSkiils() ];
		
		//Executa view register/index recebendo informações do bando de dados.
		$this->load->view('register/index', $data);

		} 
		
		//função para executar o post no db e chamar de novo a view sem dados e com mensagem de suceso.
		public function save(){
			
			$this->form_validation->set_rules("nameInput", "nameId", "required");
			
			$sucess = $this->form_validation->run();
				if($sucess){
						$doctor = array(
						'Crm' => $this->input->post('crmInput'),
						'Name' => $this->input->post('nameInput'),
						'Phone' => $this->input->post('phoneInput'),
						'State' => $this->input->post('stateSelect'),
						'City' => $this->input->post('citySelect'),
						'Skill1' => $this->input->post('skillSelect1'),
						'Skill2' => $this->input->post('skillSelect2'), 
						);
	
					$this->load->model('Post_model');
					$this->Post_model->saveDoctor($doctor);
					//$this->session->set_flashdata('success','teste');
					$this->load->view('register/sucess');
					$this->new(); 
			}else{ 
				$this->load->view('register/reject');
				$this->new(); 
				}	

			
			
			
			
		

		

		}
	}

	
	
		

	
		
