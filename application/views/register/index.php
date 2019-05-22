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
	
		 	<div class=row> 
				<div class="col-3"> 	 
			<label for="state">Estado</label>
			<select id="State" name="state" class="form-control" set_value="State">
			<?php echo $options_states ?> 
			</select>
				</div>
				<div class="col-3"> 
			<label fot="city">Cidade</label>
			<select id="City" name="city" class="form-control"  set_value="City"><option>Primeiro selecione o estado</option></select>
			
				</div>
			 
				<div class="col-3"> 	 
			<label for="Skill1">Selecione Especialidade</label>
			<select id="Skill" name="Skill1" class="form-control" set_value="Skill1">
			<?php echo $options_skills ?> 
			</select>
				</div>
				<div class="col-3"> 
				<label for="skill2">Selecione Especialidade nº2</label>
			<select id="Skill2" name="Skill2" class="form-control" set_value="Skill2">
			<?php echo $options_skills ?> 
			</select>
			<br />
				</div>
			</div>


			<div class="row">
			<div class="col"  style="width: 200px;">
			<?= anchor('Doctors/list', 'Voltar', array( 
					'class' => 'btn btn-outline-danger btn-lg btn-block',
					
					));
				?></div>
			<div class="col-8"></div>
			<div class="col"  style="width: 200px;">
 				<?php echo form_button(array(
					'class' => 'btn btn-outline-success btn-lg btn-block',
					"type" => "submit",
					"content" => "Cadastrar"));
				 ?></div>
				 
			</div>
		  
		</div>
		<?= form_close(); ?>
	
		



	
	
	
</body>
</html>
