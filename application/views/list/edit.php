
	<div class='container'>
		<h1 class='text-center'> Selecione o médico para Editar</h1>
		<table class='table'>
			<tr>
				<th> Nome </th>
				<th> CRM </th>
				<th> Telefone </th>
				<th> Estado </th>
				<th> Cidade </th>
				<th> Especialidade(s) </th>
				<th> Editar </th>
				<th> Apagar </th>
			</tr>			
			<?php foreach ($doctors as $doctor) : ?>
				<tr>
					<td> <?= $doctor['Name'] ?></td>
					<td> <?= $doctor['Crm'] ?>/<?= $doctor['State'] ?> </td>
					<td> <?= $doctor['Phone'] ?></td>
					<td> <?= $doctor['State'] ?></td>
					<td> <?= $doctor['City'] ?></td>
					<td> <?= $doctor['Skill1'] ?>, <?= $doctor['Skill2']  ?></td>
					<td> <a href= "<?= base_url ("RegisterDoctor/edit?Id=".$doctor['Id']) ?>" class="btn btn-outline-success" id="<?= $doctor['Id'] ?>"> Editar </a>
					
					<td> 
						<a href= "<?= base_url ("RegisterDoctor/delete/".$doctor['Id']) ?>" class="btn btn-danger" id="<?= $doctor['Id'] ?>"> Apagar </a>				   
					</td>
				</tr>
			<?php endforeach ?>
		</table>
		<div class='row'>
		<div class='col-5'></div>
			<div class='col-2'  style='width: 200px;'>
			<?= anchor('Doctors/listDoctor', 'Voltar', array( 
					'class' => 'btn btn-success btn-lg btn-block',
					
					));
				?></div>
			<div class='col-5'></div>
			
