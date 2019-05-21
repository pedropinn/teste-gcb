<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Doctor extends CI_Controller {
	public function newDoctor()	{
		
		$doctor = array(
			"Nome" => $this->input->post("Nome"),
			"Crm" => $this->input->post("Crm"),
			"Phone" => $this->input->post("Phone"),
			"State" => $this->input->post("State"),
			"City" => $this->input->post("City")
		);
		$this -> load -> model('Register_model');
		$this->Register_model->salve($doctor);
		$this-> load -> view('sucess');

}
}

	