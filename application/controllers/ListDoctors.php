<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListDoctors extends CI_Controller {
	
	//recebe dados e armazendo am array, executa view.
		public function index(){
			$this->load->model("List_model");
			$list = $this-> List_model -> getAllDoctors();
			$data = array("doctors" => $list);
			$this->load->view('list/index', $data);
		} 
		
		
}
		
	
		

	
		
