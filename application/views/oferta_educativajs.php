<script type="text/javascript">
	$(function(){
		var uni=null;
		var test=null;
		console.info('entro');
		$(document).on('click','.universidad',function(){
			universidad();
			uni=2;
			test=2;
		});

		$(document).on('click','.unis',function(){
			test=1;
			uni=1;
			console.info("entro");
			$(document).find('.tags').hide();
			$(document).find('.desc').show();
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
								'<select name="selecionar" id="nuevo">'+
									'<option>Ingeniería y Diseño</option>'+
									'<option>Humanidades y Ciencias Sociales</option>'+
								'</select>'+
                    		'</div>'+
							'<div class="wow fadeInUp" data-wow-delay="0.7s">'+
								'<a href="<?=base_url('index.php/');?>Register" class="bttn bttn-primary">Seleccionar</a>&nbsp;&nbsp;'+
								'<a href="https://www.bath.ac.uk/" target="_blank" class="bttn bttn-primary">Ver pagina Web</a>'+
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

		$(document).on('click','.regresar',function(){
			
			
			
			if(uni==2){
				//universidad();
				$(document).find('.tags').hide();
				$(document).find('.seleccion').show();
				$(document).find('.regresar').hide();
			}
			if(uni==1){
				$(document).find('.desc').hide();
				$(document).find('.tags').show();
				uni=2;
			}
		});
	});
	function universidad() {
			$(document).find('.seleccion').hide();
			$(document).find('.regresar').show();
			$(document).find('.tags').show();
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
	}
</script>
