<?php 
/*Custom Fields*/
$field_txt1 = get_field('texto_1');
/* Template Name: Page Inicio */
get_header(); ?>
<!-- /end header-->

<section class="strap strap-hero-home">
	<div class="inner">
		<div class="container-fluid g-0">
		  <div class="row">
		  	<div class="col-12">
		  	 
       			  <video id="hero-video" src="<?php bloginfo('template_directory');?>/assets/video/video.mp4" muted>
       			  	
       			  </video>
		  		  
		  	</div>
		</div>
	</div>	
</section>

<section class="strap"  id="strap-home-1">
	<div class="inner py-5">

	<?php
		echo $field_txt1;
	?>
		
	</div>	
</section>

<section class="strap strap-light"  id="strap-home-2">
	<div class="inner  ">
		<div class="container-fluid  p-0">
		  <div class="row    g-0">
		  	<div class="col-12 col-md-5 text-center bg-color-2 ">
		  		<aside class="d-block p-5 mh-300">
		  			 <h3 class="fs-4 my-3 fw-bold">Mamás</h3>
		  		     <p>Para ellas que buscan retomar su vida laboral y desarrollarse profesionalmente</p>
		  		     <a href="<?=get_permalink(140);?>" class="btn btn-cta">Saber Más</a>
		  		</aside>
		  	</div>
		  	<div class="col-12 col-md-2 text-center bg-1 bg-color-3 mh-300 align-items-center ">
		  		 <aside class="d-block p-5 mh-300">
		  			 <img src="<?php bloginfo('template_directory');?>/assets/images/icon-logo-white.png" alt="" class="py-5" width="70" />
		  			</aside>
		 
		  	</div>
		  	<div class="col-12 col-md-5 text-center  bg-color-1 ">
		  		<aside class="d-block p-5 mh-300">
		  		  <h3 class="fs-4 my-3  fw-bold">Empresas</h3>
		  		  <p>Con una cultura inclusiva y diversa, dedicadas a atraer y desarrollar talento femenino.</p>
		  		  <a href="<?=get_permalink(136);?>" class="btn btn-cta">Saber Más</a>
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>	
</section>

 
 


<section class="strap"  id="strap-home-3">
	<div class="inner py-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12  col-md-8 text-center mx-auto">
					<h2 class="fs-1">¿Por qué <strong class="fs-bold">Momlancers</strong>?</h2>
				</div>
			</div>
		  
		   <div class="row my-3">
		   	<div class="col-12 col-md-12">
		   		<p>Las mamás son uno de los segmentos más grandes de talento diverso en la fuerza laboral actual: Si no estás aprovechando este grupo de talento, estás perdiendo una gran oportunidad para impactar tu fuerza laboral y objetivos empresariales.</p>
		   	</div>
		   </div>
		    <div class="row my-3">
		   		<div class="col-12 col-md-4">
		   			<div class="d-flex flex-column py-3">
					    <div class="d-flex">
					    	<div class="align-self-end" >
					    		  <img src="<?php bloginfo('template_directory');?>/assets/images/icon-star.png"  class="icon-sm m-3 mb-0"  alt="" class="m-3" />
					    	</div>
					      
					        <div class="d-inline-block pl-3">
					            <h5 class="fs-6 fw-bold ml-3">Mejora en la Experiencia Laboral</h5>
					            <p>Colaboradoras con colegas mamás reportan un 23% más de satisfacción laboral.</p>
					        </div>
					    </div>
					</div>
		   		</div>
		   		<div class="col-12 col-md-4">
		   			<div class="d-flex flex-column py-3">
					    <div class="d-flex">
					    	<div class="align-self-end" >
					    		  <img src="<?php bloginfo('template_directory');?>/assets/images/icon-people.png"  class="icon-sm m-3 mb-0" alt="" class="m-3" />
					    	</div>
					      
					        <div class="d-inline-block pl-3">
					            <h5 class="fs-6 fw-bold ml-3">Impulso a la Diversidad e Inclusión</h5>
					            <p>Colaboradoras con colegas mamás ven un 19% más de compromiso en D&I.</p>
					        </div>
					    </div>
					</div>
		   		</div>
		   		<div class="col-12 col-md-4">
		   			<div class="d-flex flex-column py-3">
					    <div class="d-flex">
					    	<div class="align-self-end" >
					    		   <img src="<?php bloginfo('template_directory');?>/assets/images/icon-engranes.png"  class="icon-sm m-3 mb-0" alt="" class="m-3" />
					    	</div>
					      
					        <div class="d-inline-block pl-3">
					            <h5 class="fs-6 fw-bold ml-3">Aumento en la Productividad  <br /> &nbsp;</h5>
					            <p>Colaboradoras con colegas mamás anticipan un 12% más de productividad.</p>
					        </div>
					    </div>
					</div>
		   		</div>
		   		<div class="col-12 col-md-4 mx-auto">
		   			<div class="d-flex flex-column py-3">
					    <div class="d-flex">
					    	<div class="align-self-end" >
					    		  <img src="<?php bloginfo('template_directory');?>/assets/images/icon-hand.png"  class="icon-sm m-3 mb-0" alt="" class="m-3" />
					    	</div>
					      
					        <div class="d-inline-block pl-3">
					            <h5 class="fs-6 fw-bold ml-3">Mayor Retención de Talento <br /> &nbsp;</h5>
					            <p>Colaboradoras con colegas mamás son más propensas a quedarse en su empleo.</p>
					        </div>
					    </div>
					</div>
		   		</div>
		   		<div class="col-12 col-md-4 mx-auto">
		   			<div class="d-flex flex-column py-3">
					    <div class="d-flex">
					    	<div class="align-self-end" >
					    		  <img src="<?php bloginfo('template_directory');?>/assets/images/icon-breakcase.png"  class="icon-sm m-3 mb-0" alt="" class="m-3" />
					    	</div>
					      
					        <div class="d-inline-block pl-3">
					            <h5 class="fs-6 fw-bold ml-3">Recomendación Positiva del Lugar de Trabajo</h5>
					            <p>Colaboradoras con colegas mamás son un 27% más propensas a recomendar su empleador</p>
					        </div>
					    </div>
					</div>
		   		</div>
		   	</div>
		   	<div class="row my-3">
		   		<div class="col-12">
		   			<p>La presencia de mamás en el lugar de trabajo resulta en una experiencia laboral más positiva, mayor inclusión en el lugar de trabajo, mayor productividad y un aumento en la retención.</p>
		   			<p>Fuente: The Mom Success Factor. WerkLabs.</p>
		   		</div>
		   	</div>
		</div>
	</div>	
</section>

 <section class="strap bg-image-1"   id="strap-home-4">
	<div class="inner py-5">
		<div class="container-fluid">
		  <div class="row my-5">
 				<div class="col-12 col-md-8 mx-auto text-center">
		  		 	<h2 class="fs-1">Clientes que confían en <strong>Momlancers</strong></h2>
		  		</div>
		  		<div class="col-12 col-md-2">
		  			<img src="<?php bloginfo('template_directory');?>/assets/images/vector-1.png" alt="" class="img-floating" />
		  		</div>
		  </div>
		  <div class="row my-3 text-center">
		  	<?php 
		  	$logos =  get_field('logos_clientes');
		  	if(count($logos)>0): ?>

		  	<?php
		  	foreach($logos as $logo): ?>
			  	<div class="col-6 col-md-2 my-4 text-center mx-auto">
			  		<img src="<?=$logo; ?>" alt="" class="img-fluid">
			  	</div>
		  <?php endforeach; ?>
		  <?php else: ?>
		  		<div class="col-12">
		  			<p>No existen logos de clientes</p>
		  		</div>
		  <?php endif;?>
		  </div>
		</div>
	</div>
</section>


 <section class="strap bg-color-2"  id="strap-home-5">
	<div class="inner  py-5">
		<div class="container-fluid  py-5">
			<div class="row">
				<div class="col-12 col-md-6">
		  			<img src="<?php bloginfo('template_directory');?>/assets/images/vector-7.png" alt="" class="img-floating-1" />
		  		</div>
		  		<div class="col-12 col-md-6">
		  			<img src="<?php bloginfo('template_directory');?>/assets/images/vector-4.png" alt="" class="img-floating-2" />
		  		</div>
			</div>
		  <div class="row   py-5">
		  		<div class="col-12 col-md-4 ">
		  		</div>

		<?php 
		$args = array( 
		    'posts_per_page' => 2,
		    'post_type' => 'testimonial',
		);
		$the_query = new WP_Query($args);
		$cual = 1;
		if ($the_query->have_posts()):  
		    while ($the_query->have_posts()): $the_query->the_post();  
		        $testimonio_name = get_field('testimonio_name'); 
		        $testimonio_company = get_field('testimonio_company'); 
		        $testimonio_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'thumbnail');
		        $testimonio_content = get_the_excerpt();
		        ?>
		        <div class="col-12 col-md-4">
		            <div class="card shadow text-center p-3 mt-4">
		                <?php if ($testimonio_image): ?>
		                    <figure>
		                        <img src="<?php echo esc_url($testimonio_image); ?>" class="img-fluid" alt="<?php echo esc_attr($testimonio_name); ?>" />
		                    </figure>
		                <?php endif; ?>
		                <h5 class="my-2"><?= esc_html($testimonio_company); ?></h5>
						<h6><?php echo esc_html($testimonio_name); ?></h6>
		                <p><?php echo esc_html($testimonio_content); ?></p>
		            </div>
		        </div>
			<?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>

		   <?php 
		   	else:
		   ?>
		     <div class="col-12 col-md-4">
		     	<p>No hay testimonios</p>
		     </div>

		<?php endif; ?> 


		  </div>
		  
		</div>
	</div>
</section>
 

  <!--section class="strap" id="strap-home-6">
	<div class="inner py-5">
		<div class="container-fluid">
		  <div class="row my-3">
		  	<div class="col-12 col-md-12 text-center">
		  		 <h2 class="fs-1"><strong>Prensa</strong></h2>
		  	</div>
		  </div>
		  <div class="row my-3  ">
		  		 <?php 
				 	  $args  = array(
				 	  	'posts_per_page'    => 6,
				        'post_type'     => 'press',
				      );
				      $the_query = new WP_Query( $args );
				      if( $the_query->have_posts() ):  
				 		 while( $the_query->have_posts() ) : $the_query->the_post();
				  			$post = get_post($the_query->id);
				    		 
				    		$title =  $post->post_title;
				    		$link =  get_permalink();
				  			$img =  wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );
				 		 	
				 		 	 ?>
				 		 	 <div class="col-12 col-md-4 p-2 ">
							  		 <div class="card">
							  		 	 
										  <img src="<?=$img; ?>" class="card-img-top img-fluid p-2" alt="<?=$title;?>" class="img-fluid">
										  <div class="card-body">
										    <h5 class="card-title"><a href="<?=$link; ?>"><?=$title;?></a></h5>
										    <p class="card-text">
									        <?php echo esc_html(wp_trim_words($testimonio_content, 20)); ?>
										    </p>
										  </div>
									 
										  <div class="card-body text-end">
										   
										    <a href="<?=$link; ?>" class="card-link text-end">Leer Más</a>
										  </div>
										</div>
							  	</div>


				 		 	<?php 
				 		 endwhile;
		         ?>
		         <?php else: ?>
		         	<div class="co-12">
		         		<p>No hay notas de prensa</p>
		         	</div>

		         <?php
		     endif;
		      ?>
		  </div>
		</div>
	</div>
</section-->

 
 
<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  