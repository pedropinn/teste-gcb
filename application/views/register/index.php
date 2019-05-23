<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang='pt_br'>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' charset='utf-8'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<link rel='stylesheet' href='<?= base_url('css/bootstrap.css')?>'>
	<title>Registro Médico</title>

	<script type='text/javascript'>
	var base_url = '<?php echo base_url() ?>';
		$(function(){
			$('#stateId').change(function(){
				$('#cityId').html('<option>Carregando...</option>');
				var Uf = $('#stateId').val();
				$.post(base_url+'index.php/ajax/city/getCitys', {
					Uf : Uf
				}, function(data){
					$('#cityId').html(data);
				}
				);
			});
		});
	</script>
</head>
<body>
	<h1 class='text-center'> Registro Médico</h1>
<div class='container'>
	<div class=row> 
		<div class='col-8'> 
		<?php echo form_open('RegisterDoctor/save');
			echo form_label('Nome');
			echo form_input( array(
				'name'=> 'nameInput',
				'set_value' => 'nameValue',
				'id' => 'idNome',
				'class' => 'form-control',
				'maxlength'   => '40',
				'placeholder' => 'Digite seu nome'
			)); ?> 
		</div>
		<div class='col'> 
			<?php
			echo form_label('CRM');
			echo form_input( array(
				'name'=> 'crmInput',
				'set_value' => 'crmValue',
				'id' => 'crmId',
				'class' => 'form-control',
				'maxlength'   => '13',
				'placeholder' => 'Digite seu CRM'
			));?>
		</div>
	</div>
				<div class=row> 
				<div class='col-4'> 	 
			<?php echo form_label('Phone');
			echo form_input( array(
				'name'=> 'phoneInput',
				'set_value' => 'Phone',
				'id' => 'phoneId',
				'class' => 'form-control',
				'maxlength'   => '12',
				'placeholder' => 'Digite seu Telefone'
		));
		?> </div>
					<div class='col-4'> 	 
			<label for='state'>Estado</label>
			<select class='form-control' id='stateId' name='stateSelect'  set_value='StateSelect'>
			<?php echo $options_states ?> 
			</select>
				</div>
				<div class='col-4'> 
			<label fot='city'>Cidade</label>
			<select class='form-control' id='cityId' name='citySelect' set_value='CitySelect'><option>Primeiro selecione o estado</option></select>
			
				</div></div>
				<div class=row> 
				<div class='col'> 	 
			<label for='Skill1'>Selecione Especialidade</label>
			<select class='form-control' id='idSkill1' name='skillSelect1'>
			<?php echo $options_skills ?> 
			</select>
				</div><div class='col'> </div>
				<div class='col'> 
				<label for='skill2'>Selecione Especialidade nº2</label>
			<select  class='form-control' id='idSkill2' name='skillSelect2'>
			<?php echo $options_skills ?> 
			</select>
			<br />
				</div>
			</div>


			<div class='row'>
			<div class='col'  style='width: 200px;'>
			<?= anchor('Doctors/list', 'Voltar', array( 
					'class' => 'btn btn-outline-danger btn-lg btn-block',
					
					));
				?></div>
			<div class='col-8'></div>
			<div class='col'  style='width: 200px;'>
 				<?php echo form_button(array(
					'class' => 'btn btn-outline-success btn-lg btn-block',
					'type' => 'submit',
					'content' => 'Cadastrar'));
				 ?></div>
				 
			</div>
		  
		</div>
		<?= form_close(); ?>
	
		



	
	
	
</body>
</html>
