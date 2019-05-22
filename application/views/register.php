<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Registro Médico</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

	<script type="text/javascript">
	var base_url = "<?php echo base_url() ?>";
		$(function(){
			$("#state").change(function(){
				$('#city').html("<option>Carregando...</option>");
				var Uf = $('#state').val();
				$.post(base_url+'index.php/ajax/city/getCitys', {
					Uf : Uf
				}, function(data){
					$('#city').html(data);
				}
				);
			});
		});
	</script>
</head>
<body>
	<h1 class="text-center"> Registro Médico</h1>
<div class="container">
<form method="POST" action="Sucess.php" >	
	<div class="row">
		<?php echo form_label("Nome");
		echo form_input( array(
			'name'=> 'Nome',
			'type' => 'Nome',
			'set_value' => 'Nome',
			'id' => 'inputNome',
			'class' => 'form-control',
			'maxlength'   => '40',
			'aria-describedby' => 'nameHelp',
			'placeholder' => 'Digite seu nome"'
		));
			?> 
	</div>
	<div class="row">
		<?php echo form_label("CRM");
		echo form_input( array(
			'name'=> 'Crm',
			'set_value' => 'Crm',
			'type' => 'Crm',
			'id' => 'inputCrm',
			'class' => 'form-control',
			'maxlength'   => '13',
			'aria-describedby' => 'crmHelp',
			'placeholder' => 'Digite seu CRM"'
		));
			?> 
	</div>
	<div class="row">
		<?php echo form_label("Phone");
		echo form_input( array(
			'name'=> 'Phone',
			'type' => 'Phone',
			'set_value' => 'Phone',
			'id' => 'inputPhone',
			'class' => 'form-control',
			'maxlength'   => '10',
			'aria-describedby' => 'phoneHelp',
			'placeholder' => 'Digite seu Telefone"'
		));
			?> 
	</div>
		<div class="row">
			<label for="state">Estado</label>
			<select id="state" name="state" class="form-control" set_value="State">
			<?php echo $options_states ?> 
			</select>
		</div>	
		<div class="row">
			<label fot="city">Cidade</label>
			<select id="city" name="city" class="form-control"  set_value="City"><option>Primeiro selecione o estado</option></select>
		</div>
		
	<br />
		<div class="row">
			<div class="mx-auto" style="width: 200px;">
				<?php echo form_button(array(
					"type" => "submit",
					"class" => "btn btn-outline-primary btn-lg btn-block",
					"content" => "Cadastrar",
					"set_value" => "Insert"
				));
				?> 
			</div>

		</div>
		</form>
</body>
</html>
