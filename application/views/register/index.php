<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css")?>">
	<title>Registro Médico</title>

	<script type="text/javascript">
	var base_url = "<?php echo base_url() ?>";
		$(function(){
			$("#State").change(function(){
				$('#City').html("<option>Carregando...</option>");
				var Uf = $('#State').val();
				$.post(base_url+'index.php/ajax/city/getCitys', {
					Uf : Uf
				}, function(data){
					$('#City').html(data);
				}
				);
			});
		});
	</script>
</head>
<body>
	<h1 class="text-center"> Registro Médico</h1>
<div class="container">
		<?php echo form_open('RegisterDoctor/save');
			echo form_label("Nome");
			echo form_input( array(
				'name'=> 'Name',
				'type' => 'Name',
				'set_value' => 'Name',
				'id' => 'Name',
				'class' => 'form-control',
				'maxlength'   => '40',
				'aria-describedby' => 'nameHelp',
				'placeholder' => 'Digite seu nome"'
			));
			echo form_label("CRM");
			echo form_input( array(
				'name'=> 'Crm',
				'set_value' => 'Crm',
				'type' => 'Crm',
				'id' => 'Crm',
				'class' => 'form-control',
				'maxlength'   => '13',
				'aria-describedby' => 'crmHelp',
				'placeholder' => 'Digite seu CRM"'
			));
			echo form_label("Phone");
			echo form_input( array(
				'name'=> 'Phone',
				'type' => 'Phone',
				'set_value' => 'Phone',
				'id' => 'Phone',
				'class' => 'form-control',
				'maxlength'   => '10',
				'aria-describedby' => 'phoneHelp',
				'placeholder' => 'Digite seu Telefone"'
		));
		?>
	
	
			<label for="state">Estado</label>
			<select id="State" name="state" class="form-control" set_value="State">
			<?php echo $options_states ?> 
			</select>
	
	
			<label fot="city">Cidade</label>
			<select id="City" name="city" class="form-control"  set_value="City"><option>Primeiro selecione o estado</option></select>
			<br />
			<div class="mx-auto" style="width: 200px;">
			<?php echo form_button(array(
				'class' => 'btn btn-outline-success btn-lg btn-block',
				"type" => "submit",
				"content" => "Cadastrar"

			)); ?>
	
			
		  
		</div>
		<?= form_close(); ?>
	
		



	
	
	
</body>
</html>
