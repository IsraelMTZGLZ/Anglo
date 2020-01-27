<script type="text/javascript">
	$(function(){
		console.info('entro');
		$(document).on('click','.universidad',function(){
			$(document).find('.seleccion').remove();
			$(document).find('.tags').addClass('topcards section-padding');
			$(document).find('.tags').html(
				'<div class="container">'+
            		'<div class="row">'+
                		'<a class="unis" type="button" id="1">'+
							'<div class="col-xs-12 col-sm-6 col-md-4">'+
								'<img src="https://www.anglolatinoedu.com/wp-content/uploads/2019/09/bath.jpg">'+
								'<div class="feature-box wow fadeInUp" data-wow-delay="0.2s">'+
					
									'<h4>University of Bath</h4>'+
									'<p>Fundación: 1966.</p><p>Ciudad de Bath (1hr 50 mins de Londres).</p>'+
									'<p>Ubicacion:<p>'+
									'<p>Ciudad romana, patrimonio mundial de la Humanidad por la UNESCO.</p>'+
								'</div>'+
                			'</div>'+
						'</a>'+
            		'</div>'+
        		'</div>'
			);
		});

		$(document).on('click','.unis',function(){
			console.info("entro");
			$(document).find('.tags').remove();
			$(document).find('.desc').addClass('topcards section-padding');	
			$(document).find('.desc').html(
				'<div class="container">'+
            		'<div class="row">'+
                		'<div class=" feature-box wow fadeInUp col-xs-12 col-sm-6 col-md-5">'+
                    		'<div class="page-title">'+
                        		'<h2 class="title wow fadeInUp">University of Bath</h2>'+
								'<div class="wow fadeInUp" data-wow-delay="0.5s">'+
									'<p>Fundación: 1966.</p>'+
									'<p>Ciudad de Bath (1hr 50 mins de Londres).</p>'+
									'<p>Ranking:</p>'+
									'<p>Ranking Mundial QS 172 </p> '+
									'<p>Guardian University Guide Top 10.</p>'+
									'<p>Ocupa el 4º lugar general de 122 en la encuesta de satisfacción estudiantil 2018.</p>'+
									'<p>Facultades:</p>'+
									'<p>1. Ingeniería y Diseño</p>'+
									'<p>2. Humanidades y Ciencias Sociales</p>'+
									'<p>3. Negocios</p>'+
									'<p>4. Ciencias</p>'+
									'<p>Ciudad romana, patrimonio mundial de la Humanidad por la UNESCO.</p>'+
								'</div>'+
                    		'</div>'+
							'<div class="wow fadeInUp" data-wow-delay="0.7s">'+
								'<a href="#" class="bttn bttn-primary">Seleccionar</a>&nbsp;&nbsp;'+
								'<a href="#" class="bttn bttn-primary">Ver pagina Web</a>'+
							'</div>'+
                		'</div>'+
						'<div class="feature-box hidden-xs col-sm-6 col-md-offset-1">'+
							'<img src="https://www.anglolatinoedu.com/wp-content/uploads/2019/09/bath.png" alt="">'+
							'<img src="https://www.anglolatinoedu.com/wp-content/uploads/2019/09/bath.jpg" alt="">'+
						'</div>'+
            		'</div>'+
        		'</div>'
			);
		});
	});
</script>
