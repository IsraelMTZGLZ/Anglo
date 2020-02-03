<script>
	$(function(){
		$(document).on('click','.btn-send',function(){
			console.info("entro");
			$(document).find('.box-oferta').after(
				'<button type="button" class="btn btn-primary btn-lg btn-block">'+
					'Pendiente a revision <span class="badge badge-light">favor de esperar</span>'+
					'<span class="sr-only">unread messages</span>'+
				'</button>'
			).remove();
			//$(this).html('test');
			setTimeout(() => {
				window.location = "<?=base_url('index.php/Becas');?>";
			}, 3000);
		});
	});
</script>
