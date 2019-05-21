<?php
class City extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function getCitys()
	{   
		$this -> load -> model('City_model');
		$CodigoUf = $this->input->post('CodigoUf');
		echo $this->City_model->selectCity($CodigoUf);


	}
}
