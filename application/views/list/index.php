<h1 class='text-center'> Lista médicos<br /></h1>
<div class='container'>
	<div class='row'>
		<div class='col-2'  >
		<?= anchor('RegisterDoctor/new', 'Cadastrar', array( 
				'class' => 'btn btn-success btn-lg btn-block',
				));?></div>

			<div class='col'></div>

			<div class='col-6'> 
				<form action="<?=base_url ('Doctors/resultDoctors/') ?>" method="post">				
				<input type="text" class="form-control" name="search" id="search" placeholder="Digite o nome"> <br>
				<button type="submit" class="btn btn-outline-primary btn-block">Pesquisar</button>
					
				</form>
			</div>

			<div class='col'></div>

		<div class='col-2'  >
			<?= anchor('Doctors/editList', 'Editar', array( 
						'class' => 'btn btn-danger btn-lg btn-block',)); ?>
			</div>
		
		</div></div>
			<br /><br /><br />
<div class='container'>
	<table class='table'>
		<tr>
			<th> Nome </th>
			<th> CRM </th>
			<th> Telefone </th>
			<th> Estado </th>
			<th> Cidade </th>
			<th> Especialidade(s) </th>
		</tr>			
		<?php foreach ($doctors as $doctor) : ?>
			<tr>
				<td> <?= $doctor['Name'] ?></td>
				<td> <?= $doctor['Crm'] ?>/<?= $doctor['State'] ?></td>
				<td> <?= $doctor['Phone'] ?></td>
				<td> <?= $doctor['State'] ?></td>
				<td> <?= $doctor['City'] ?></td>
				<td> <?= $doctor['Skill1'] ?>, <?= $doctor['Skill2']  ?></td>
			</tr>
		<?php endforeach ?>
	</table>
