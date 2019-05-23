<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {
	
	//recebe dados e armazendo am array, executa view com a lista de dados recebidas.
		public function listDoctor(){
			$this->load->model('List_model');
			$list = $this-> List_model -> getAllDoctors();
			$data = array('doctors' => $list);
			$this->load->view('templates/header');
			$this->load->view('templates/nav-top');
			$this->load->view('list/index', $data);
			$this->load->view('templates/footer');	
			$this->load->view('templates/js');
		} 
		
		// recebe dados e armazendo am array, executa view com a lista de dados recebidas.
		public function editList(){
			$this->load->model('List_model');
			$list = $this-> List_model -> getAllDoctors();
			$data = array('doctors' => $list);
			$this->load->view('templates/header');
			$this->load->view('templates/nav-top');
			$this->load->view('list/edit', $data);
			$this->load->view('templates/footer');	
			$this->load->view('templates/js');
			
		} 

		//buscar por nome
		public function resultDoctors(){
			$this->load->model('List_model');
			$data ['resultSearch'] = $this->List_model->search($_POST);


			$this->load->view('templates/header');
			$this->load->view('templates/nav-top');
			$this->load->view('list/result', $data);
			$this->load->view('templates/footer');	
			$this->load->view('templates/js');
	}
	
	
}


		
	
		

	
		
