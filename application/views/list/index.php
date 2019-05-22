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
		<h1 class='text-center'> Lista médicos</h1>
		<table class='table'>
			<tr>
				<th> Nome </th>
				<th> CRM </th>
				<th> Telefone </th>
				<th> Estado </th>
				<th> Cidade </th>
			</tr>			
			<?php foreach ($doctors as $doctor) : ?>
				<tr>
					<td> <?= $doctor['Name'] ?></td>
					<td> <?= $doctor['Crm'] ?></td>
					<td> <?= $doctor['Phone'] ?></td>
					<td> <?= $doctor['State'] ?></td>
					<td> <?= $doctor['City'] ?></td>
				</tr>
			<?php endforeach ?>
		</table>
		<?= anchor('RegisterDoctor/new', 'Novo Cadastro', array('class' => 'btn btn-success')); ?>
	</body>
</html>
