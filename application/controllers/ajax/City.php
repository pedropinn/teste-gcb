<?php
class City extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

//recebe dados do db e atribui a array
	public function getCitys()
	{   
		$this -> load -> model('City_model');
		$Uf = $this->input->post('Uf');
		echo $this->City_model->selectCitys($Uf);


	}
}
