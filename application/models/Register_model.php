<?php class Register_model extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}


	public function insertDoctor(){
		$Crm = $this->input->post("Crm");
		$Nome = $this->input->post("Nome");
		$Phone = $this->input->post("Phone");
		$State = $this->input->post("State");
	 	$City = $this->input->post("City");
		
		$sql = "INSERT INTO doctors (`Crm`, `Nome`, `Phone`, `State`, `City`) 
		VALUES 	(". $this->db->escape($Crm) .",
				". $this->db->escape($Name) .",
				". $this->db->escape($Phone) .",
				". $this->db->escape($State) .",
				". $this->db->escape($City) .")";
	
		$result = $this->db->query($sql);
	}
	
	public function btnInsert(){ 
		form_button(array(
			"type" => "submit",
			"class" => "btn btn-outline-primary btn-lg btn-block",
			"content" => "Cadastrar",));
		}


} 
