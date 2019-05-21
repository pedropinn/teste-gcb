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
				var CodigoUf = $('#state').val();
				$.post(base_url+'index.php/ajax/city/getCitys', {
					CodigoUf : CodigoUf
				}, function(data){
					console.log(data);
				}

				);
			});
		});
	</script>
</head>
<body>
 <h1 class="text-center"> Registro Médico</h1>
<div class="container">
	<div class="row">
 		<div class="form-group">
		    <label for="state">Estado</label>
		 	<select id="state" name="state" class="form-control">
			<?php echo $options_states ?> 
			</select>
		 </div>
		 <div class="form-group">
			 <label fot="city">Cidade</label>
		 	<select id="city" name="city" class="form-control"><option>Selecione o estado.</option></select>
		 </div>

	</div>
	



</body>
</html>
