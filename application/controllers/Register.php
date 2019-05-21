<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index(){
		$this -> load -> model('State_model');
			$data = [
			'options_states' => $this -> State_model -> selectStates()
					];
		$this->load->view('register', $data);
		}
	
		

	public function salve(){
		$doctor = array(
			"Nome" => $this->input->post("Nome"),
			"Crm" => $this->input->post("Crm"),
			"Phone" => $this->input->post("Phone"),
			"State" => $this->input->post("State"),
			"City" => $this->input->post("City")
		);
		$this -> load -> model('Register_model');
		$salve = $this -> Register_model -> salve($doctor);
		$this-> load -> view('sucess');		
		}

	}
