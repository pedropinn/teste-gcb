
	<h1 class='text-center'> PÁGINA NÃO CONCLUIDA<br>	</h1>
	<h4 class='text-center'> está com os controls e model desenvolvidos, entretanto não está realizando o update no db, não consegui indentificar o erro antes da entrega prevista. </h4>
<div class='container'>
	<div class=row> 
		<div class='col-8'> 
			<?php 
			echo form_open("RegisterDoctor/saveEdit/".$doctor['Id']);
			echo form_label('Nome');
			echo form_input( array(
				'name'=> 'nameInput',
				'value' => $doctor['Name'],
				'id' => 'idNome',
				'class' => 'form-control',
				'maxlength'   => '40',
				
			)); ?> 
		</div>
		<div class='col'> 
			<?php
			echo form_label('CRM');
			echo form_input( array(
				'name'=> 'crmInput',
				'value' => $doctor['Crm'],
				'id' => 'crmId',
				'class' => 'form-control',
				'maxlength'   => '10',
				
			));?>
		</div>
	</div>
				<div class=row> 
				<div class='col-4'> 	 
			<?php 
			echo form_label('Phone');
			echo form_input( array(
				'name'=> 'phoneInput',
				'value' =>$doctor['Phone'],
				'id' => 'phoneId',
				'class' => 'form-control',
				'maxlength'   => '12',
			));?> </div>
			<div class='col-4'> 	 
			<?php 
			echo form_label('State');
			echo form_input( array(
				'name'=> 'stateInput',
				'value' =>$doctor['State'],
				'id' => 'stateId',
				'class' => 'form-control',
				'maxlength'   => '2',
			));?> </div>
				<div class='col-4'> 	 
			<?php 
			echo form_label('City');
			echo form_input( array(
				'name'=> 'cityInput',
				'value' =>$doctor['City'],
				'id' => 'cityId',
				'class' => 'form-control',
				'maxlength'   => '35',
			));?> 
				</div>
				
				<div class='col'> 	 
				<?php 
			echo form_label('Skill1');
			echo form_input( array(
				'name'=> 'skill1Input',
				'value' =>$doctor['Skill1'],
				'id' => 'inputSkil1',
				'class' => 'form-control',
				'maxlength'   => '26',
			));?> 			
				</div>
				<div class='col'> </div>
				<div class='col'>
				<?php 
			echo form_label('Skill2');
			echo form_input( array(
				'name'=> 'skill2Input',
				'value' =>$doctor['Skill2'],
				'id' => 'inputSkil2',
				'class' => 'form-control',
				'maxlength'   => '26',
			));?> 
				</div>
			</div><div class="invisible">
			<?php 
			echo form_input( array(
				'name'=> 'idInput',
				'value' => $doctor['Id'],
				'id' => 'id',
				'class' => 'hidden',
				'maxlength'   => '40',
				
			)); ?> </div>
<br><br>

			<div class='row'>
			<div class='col-2'  style='width: 200px;'>
				<?= anchor('Doctors/editList', 'Voltar', array( 
					'class' => 'btn btn-success btn-lg btn-block',
					
					));
				?></div> <div class="col"></div>
				<div class='col-2'  style='width: 200px;'>
					<?= form_button(array(
						'class' => 'btn btn-outline-danger btn-lg btn-block',
						'type' => 'submit',
						'content' => 'Editar'));
					?></div>
			
				 
			</div>
			</form>
		
		
	
		



	