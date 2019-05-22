<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterDoctor extends CI_Controller {
	

				public function new(){
				//Executa model para estado e cidades.
				$this->load-> model('State_model');
				$data = [ 'options_states' => $this -> State_model -> selectStates()];
				
				//Executa lista de médicos
				$list = $this-> State_model -> getAllDoctors();
				$doctors = array("doctors" => $list);
				
				//Executa view register.
				$this->load->view('register/index', $data);
				//$this->load->view('list/index', $doctors);
				} 
				
				public function save(){
					$doctor = array(
						"Crm" => $this->input->post("Crm"),
						"Name" => $this->input->post("Nome"),
						"Phone" => $this->input->post("Phone"),
						"State" => $this->input->post("State"),
						"City" => $this->input->post("City")
					);
	
					$this->load->model("Post_model");
					$this->Post_model->saveDoctor($doctor);
					$this->load->view('register/registered');
				} 
				
		
		} 
	
	
		

	
		
