<script>
	$(function(){
		$(document).on('click','.btn-view',function(){

			if($("#pdfnew").length >0){
				$(document).find('#pdfnew').remove();
			}else{
				$(document).find('.viewpdf').html(
					'<iframe src="https://embamex.sre.gob.mx/peru/images/solvisaespanol.pdf" frameborder="0" width="655" height="550" marginheight="0" marginwidth="0" id="pdfnew"></iframe>'
				);
			}
			
		});
	});
</script>
