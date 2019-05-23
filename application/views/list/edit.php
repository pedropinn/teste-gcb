<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang='pt_br'>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' charset='utf-8'>
	<link rel='stylesheet' href='<?= base_url('css/bootstrap.css')?>'>
	<title>Lista de médicos</title>
		
</head>
<body>
	
	<div class='container'>
		<h1 class='text-center'> Selecione o médico para deletar</h1>
		<table class='table'>
			<tr>
				<th> Nome </th>
				<th> CRM </th>
				<th> Telefone </th>
				<th> Estado </th>
				<th> Cidade </th>
				<th> Especialidade(s) </th>
				<th> Editar </th>
			</tr>			
			<?php foreach ($doctors as $doctor) : ?>
				<tr>
					<td> <?= $doctor['Name'] ?></td>
					<td> <?= $doctor['Crm'] ?></td>
					<td> <?= $doctor['Phone'] ?></td>
					<td> <?= $doctor['State'] ?></td>
					<td> <?= $doctor['City'] ?></td>
					<td> <?= $doctor['Skill1'] ?>, <?= $doctor['Skill2']  ?></td>
					<td> <?= anchor('register/edit', 'Editar', array( 
				 	'id' => $doctor['Id'],
					'class' => 'btn btn-danger',
					
					));
				?></td>
				</tr>
			<?php endforeach ?>
		</table>
		<div class='row'>
			<div class='col'  style='width: 200px;'>
			<?= anchor('Doctors/list', 'Voltar', array( 
					'class' => 'btn btn-success btn-lg btn-block',
					
					));
				?></div>
			<div class='col-8'></div>
			<div class='col'  style='width: 200px;'>
				</div>
	</body>
</html>