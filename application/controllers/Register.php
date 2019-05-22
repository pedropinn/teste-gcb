<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	

	/*	public function index(){
			$this->form();
		}
*/
		public function index(){
			//Executa model para estado e cidades.
			$this->load-> model('State_model');
			$data = [ 'options_states' => $this -> State_model -> selectStates()];
			
			//Executa botão de salvar
			$this->load->model('Register_model');
			
			//Executa view register.
			$this->load->view('register', $data);
		} 

/*
		public function register_doctor() {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->model('Register_model');

			$doctor = array(
				"Nome" => $this->input->post("Nome"),
				"Crm" => $this->input->post("Crm"),
				"Phone" => $this->input->post("Phone"),
				"State" => $this->input->post("State"),
				"City" => $this->input->post("City"),
			);
		}
*/
			

		
}
		
	
		

	
		
