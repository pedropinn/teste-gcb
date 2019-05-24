
	<h1 class='text-center'> Registro Médico</h1>
<div class='container'>
	<div class=row> 
		<div class='col-8'> 
		<?php 
			echo form_open('RegisterDoctor/save');
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
				'type' => 'number',
				'set_value' => 'crmValue',
				'id' => 'crmId',
				'class' => 'form-control',
				'placeholder' => 'Apenas números'
			));?>
		</div>
	</div>
				<div class=row> 
				<div class='col-4'> 	 
			<?php 
			echo form_label('Phone');
			echo form_input( array(
				'name'=> 'phoneInput',
				'set_value' => 'Phone',
				'id' => 'phoneId',
				'class' => 'form-control',
				'maxlength'   => '13',
				'placeholder' => '00-90000-4444'
		));
		?> </div>
					<div class='col-4'> 	 
			<label for='state'>Estado</label>
			<select class='form-control' id='stateId' name='stateSelect'  set_value='StateSelect'>
			<?= $select_states ?> 
			</select>
				</div>
				<div class='col-4'> 
			<label fot='city'>Cidade</label>
			<select class='form-control' id='cityId' name='citySelect' set_value='CitySelect'><option>Primeiro selecione o estado</option></select>
			
				</div></div>
				<div class=row> 
				<div class='col'> 	 
			<label for='Skill1'>Selecione a especialidade</label>
			<select class='form-control' id='idSkill1' name='skillSelect1'>
			<?= $select_skills ?> 
			</select>
				</div><div class='col'> </div>
				<div class='col'> 
				<label for='skill2'>Selecione a especialidade nº2</label>
			<select  class='form-control' id='idSkill2' name='skillSelect2'>
			<?= $select_skills ?> 
			</select>
			<br />
				</div>
			</div>


			<div class='row'>
			<div class='col'  style='width: 200px;'>
			<?= anchor('Doctors/listDoctor', 'Voltar', array( 
					'class' => 'btn btn-outline-danger btn-lg btn-block',
					
					));
				?></div>
			<div class='col-8'></div>
			<div class='col'  style='width: 200px;'>
 				<?=  form_button(array(
					'class' => 'btn btn-outline-success btn-lg btn-block',
					'type' => 'submit',
					'content' => 'Cadastrar'));
				 ?></div>
				 
			</div>
		  
		</div>
		<?= form_close(); ?>
	
		



	
	
	
</body>
</html>
