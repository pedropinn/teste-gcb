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
		<?php echo form_open('/controllers/registered');
			echo form_label("Nome");
			echo form_input( array(
				'name'=> 'Name',
				'type' => 'Name',
				'set_value' => 'Name',
				'id' => 'inputNome',
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
				'id' => 'inputCrm',
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
				'id' => 'inputPhone',
				'class' => 'form-control',
				'maxlength'   => '10',
				'aria-describedby' => 'phoneHelp',
				'placeholder' => 'Digite seu Telefone"'
		));
		?>
	
	
			<label for="state">Estado</label>
			<select id="state" name="state" class="form-control" set_value="State">
			<?php echo $options_states ?> 
			</select>
	
	
			<label fot="city">Cidade</label>
			<select id="city" name="city" class="form-control"  set_value="City"><option>Primeiro selecione o estado</option></select>
		
		
	<br />
			<div class="mx-auto" style="width: 200px;">
			<?= anchor('RegisterDoctor/save', 'Novo Cadastro', array('class' => 'btn btn-outline-success btn-lg btn-block')); ?> 
		</div>
		<?= form_close(); ?>
	




	
	
	
</body>
</html>
