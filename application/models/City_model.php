<?php class City_model extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	 // Traz todos as cidades cadastradas do estado selecionado.
	public function getCityByStates($Uf = null) {
		return $this->db
		->where("Uf", $Uf)
		->order_by('Nome')
		->get('city');
	}

	// Cria select com cidades do estado selecionado. 
	public function selectCitys($Uf = null){
		$citys = $this ->getCityByStates($Uf);
		$options = "<option>Selecione a cidade</option>";
		foreach($citys -> result() as $city) {
			$options .= "<option value='{$city->Uf}'>$city->Nome</option>".PHP_EOL;
		}
		return $options;
	}


}
