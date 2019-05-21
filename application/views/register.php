<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Registro Médico</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

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
<form style="width:100%">	
<div class="form-group">
		<label for="inputName">Nome</label> 
		<input type="Nome" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Digite seu nome">
	</div>
	<div class="form-group">
		<label for="inputCrm">CRM</label> 
		<input type="Crm" class="form-control" id="inputCrm" aria-describedby="crmHelp" placeholder="Digite seu CRM">
	</div>
	<div class="form-group">
		<label for="inputPhone">Telefone</label> 
		<input type="Phone" class="form-control" id="inputPhone" aria-describedby="phoneHelp" placeholder="Digite seu Telefone">
	</div>	
			<td><div class="form-group">
			    	<label for="state">Estado</label>
		 			<select id="state" name="state" class="form-control">
					<?php echo $options_states ?> 
					</select>
	 		</div></td>	
			<td><div class="form-group">
				 	<label fot="city">Cidade</label>
			 		<select id="city" name="city" class="form-control"><option>Primeiro selecione o estado</option></select>
		 	</div></td>

		<tr>
	</form>

	<div class="row">
 	
		 
		 <div class="mx-auto" style="width: 200px;">
			  <?php echo anchor('register=cadastrar', 'Adicionar', 'class="btn btn-outline-primary btn-lg btn-block"' ) ?>
			   </div>
	</div>

	

</body>
</html>
