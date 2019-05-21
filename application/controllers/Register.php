<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$this -> load -> model('State_model');
		
		$data = [
			'options_states' => $this -> State_model -> selectStates()
		];


		$this->load->view('register', $data);
	}
}
