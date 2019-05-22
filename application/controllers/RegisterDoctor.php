<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterDoctor extends CI_Controller {
	

				public function new(){
				//Executa model para estado e cidades.
				$this->load-> model('State_model');
				$data = [ 'options_states' => $this -> State_model -> selectStates(),
				'options_skills' => $this -> State_model -> selectSkiils() ];
				
				//Executa view register/index recebendo informações do bando de dados.
				$this->load->view('register/index', $data);

				} 
				
				//função para executar o post no db e chamar de novo a view sem dados e com mensagem de suceso.
				public function save(){
					$this->load->library('session');
					$doctor = array(
						"Crm" => $this->input->post("Crm"),
						"Name" => $this->input->post("Name"),
						"Phone" => $this->input->post("Phone"),
						"State" => $this->input->post("State"),
						"City" => $this->input->post("City"),
						"Skill1" => $this->input->post("Skill1"),
						"Skill2" => $this->input->post("Skill2"), 
						
					);
	
					$this->load->model("Post_model");
					$this->Post_model->saveDoctor($doctor);
					$this->session->set_flashdata("success","teste");
					//$this->load->view('register/sucess');
					//$this->new();
				

				
		
				}
			}

	
	
		

	
		
