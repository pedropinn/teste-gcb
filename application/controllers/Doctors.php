<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {
	
	//recebe dados e armazendo am array, executa view com a lista de dados recebidas.
		public function list(){
			$this->load->model("List_model");
			$list = $this-> List_model -> getAllDoctors();
			$data = array("doctors" => $list);
			$this->load->view('list/index', $data);
		} 
		
		
}
		
	
		

	
		
