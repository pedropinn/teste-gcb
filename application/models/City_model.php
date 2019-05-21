<?php class City_model extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	 // Traz todos as cidades cadastradas do estado selecionado.
	public function getCityByStates($CodigoUF = null) {
		return $this->db
		->where("Codigo", $CodigoUF)
		->order_by('Nome')
		->get('city');
	}

	public function selectCity()
	{
		
	}


}
