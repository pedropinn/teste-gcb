<h1 class='text-center'>Resultados</h1>
<br>

<div class='container'>
	<div class='row'>
		
			<div class='col-2'><?= anchor('Doctors/listDoctor', 'Voltar', array( 
				'class' => 'btn btn-success btn-lg btn-block',
				));?></div>
		<div class='col'></div>

	
		</div></div>
 <div class="container">

 <br />
	 <table class='table'>
			 <tr>
				<th> Nome </th>
				<th> CRM </th>
				<th> Telefone </th>
				<th> Estado </th>
				<th> Cidade </th>
				<th> Especialidade(s) </th>
			</tr>
			<?php foreach ($resultSearch as $result) : ?>
				<tr>
					<td> <?= $result['Name'] ?></td>
					<td> <?= $result['Crm'] ?>/<?= $result['State'] ?></td>
					<td> <?= $result['Phone'] ?></td>
					<td> <?= $result['State'] ?></td>
					<td> <?= $result['City'] ?></td>
					<td> <?= $result['Skill1'] ?>, <?= $result['Skill2']  ?></td>
				</tr>
			<?php endforeach ?>
		
		</table>
 