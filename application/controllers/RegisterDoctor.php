<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterDoctor extends CI_Controller {
		public function new(){
		//Executa model para estado e cidades.
		$this->load->model('State_model');
		$data = [ 'select_states' => $this -> State_model -> selectStates(),
		'select_skills' => $this -> State_model -> selectSkiils() ];
		
		//Executa view register/index recebendo informações do bando de dados.
			$this->load->view('templates/header');
			$this->load->view('templates/nav-top');
			$this->load->view('register/index', $data);
			$this->load->view('templates/footer');	
			$this->load->view('templates/js');
		} 
		
		//função para executar o post no db e chamar de novo a view sem dados e com mensagem de sucesso.
		public function save(){
		
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
		
		
		$this->new(); 
		$this->load->view('register/sucess');
	}

	 	//deletar .
		public function delete($id){
			$this->load->model('Post_model');
			$this->Post_model->deleteDoctor($id);
			$this->load->model('List_model');
			

			//recarrega pagina
			$list = $this-> List_model -> getAllDoctors();
			$data = array('doctors' => $list);
			$this->load->view('templates/header');
			$this->load->view('templates/nav-top');
			$this->load->view('register/delete');
			$this->load->view('list/edit', $data);
			$this->load->view('templates/footer');	
			$this->load->view('templates/js');
		}

		//busca informações db
		public function edit(){
						$id = $this->input->get("Id");
			$this->load->model('Post_model');
			$doctor = $this->Post_model->returnId($id);
			$data = array("doctor" => $doctor);
		//Executa view register/index recebendo informações do bando de dados.
			$this->load->view('templates/header');
			$this->load->view('templates/nav-top');
			$this->load->view('register/edit', $data);
			$this->load->view('templates/footer');	
			$this->load->view('templates/js');
		
		} 
		
		//salva edição
			public function saveEdit($id){ 
			$this->load->model("Post_model");
			$this->Post_model->saveEdit($id);


			//volta pra tela de edit mostrando mensagem de sucesso
			$this->load->model('List_model');
			$list = $this-> List_model -> getAllDoctors();
			$data = array('doctors' => $list);
			$this->load->view('templates/header');
			$this->load->view('templates/nav-top');
			$this->load->view('register/sucess');
			$this->load->view('list/edit', $data);
			$this->load->view('templates/footer');	
			$this->load->view('templates/js');
			
			

		} 
	}
		
