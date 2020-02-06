<script>
	$(function(){
		$(document).on('submit','#formLogin',function(event){
			let valorEmail = $( "input" ).first().val();
			if ( valorEmail=== "aspirante" ) {
				window.location.replace('<?=base_url('index.php/')?>Inicio');
			}else if( valorEmail=== "administracion" ){
				window.location.replace('<?=base_url('index.php/')?>Info_User');
			}
			event.preventDefault();
		});
	});
</script>
