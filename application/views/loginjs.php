<script>
	$(function(){
		$(document).on('submit','#formLogin',function(event){
			let valorEmail = $( "input" ).first().val();
			if ( valorEmail=== "aspirante" ) {
				window.location.replace('<?=base_url('index.php/')?>Inicio');
			}else if( valorEmail=== "administracion" ){
				window.location.replace('<?=base_url('index.php/')?>Info_User');
			}else if( valorEmail=== "admin" ){
				window.location.replace('<?=base_url('resources/dashboard/source/light/index.html')?>');
			}
			else{
				
				$.ajax({
					url: 'http://localhost/tiendaApis/index.php/users/Api/sendPassword/',
					method : 'POST',
					headers : {
						'X-API-KEY':'QWERTY'
					},
					data: {'email':valorEmail},
					success : function(_response){
						alert(_response.message);

					},error : function(err){
						
					}
				});
			}
			event.preventDefault();
		});
	});
</script>
