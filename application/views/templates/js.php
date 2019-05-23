<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

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
</body>
</html>
