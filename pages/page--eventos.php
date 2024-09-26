<?php 
/*Custom Fields*/

/* Template Name: Page Eventos */
get_header(); ?>
<!-- /end header-->

  
 <section class="strap strap-hero strap-hero-eventos">
	<div class="inner pt-5">
		<div class="container-fluid">
		  <div class="row  align-items-center">
		  	<div class="col-12 col-md-6">
		  	   <div class="d-block p-3">
		  	   		<h1 class="fw-bolder text-white">Eventos Momlancers</h1>
		  	   		<p class="fs-5 text-white">Únete a nuestros eventos presenciales o en línea y conecta con más mujeres como tú.</p>
		  	   </div>
		  	</div>
		  	<div class="col-12 col-md-6 text-center mx-auto">
		  	 <figure class="mb-0 mt-5">
		  	 	 <img src="<?php bloginfo('template_directory');?>/assets/images/hero-eventos.jpg" alt="" class="img-fluid"  >
		  	 </figure>
		  	</div>
		  </div>
		</div>
	</div>	
</section>

<section class="strap strap-eventos">
	<div class="inner py-1">
		<div class="container-fluid">
			<div class="row my-5">
				<div class="col-12">
					 
					 <h2 class="fs-4 fw-bold">Eventos Momlancers ¡Agenda ya!</h2>
				</div>
			</div>
		  <div class="row my-5">
		  	<div class="col-12 col-md-6">
		  		  <?php   $args  = array(
				 	  	'posts_per_page'    =>1,
				        'post_type'     => 'events',
				        'orderby' => 'id',
      					'order'   => 'DESC' );
      					 $the_query = new WP_Query( $args );
				    
						   if( $the_query->have_posts() ):  
		  					while( $the_query->have_posts() ) : $the_query->the_post();
		  						$img =  wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );
							?>
			  		 <div class="card">
						  <img src="<?=$img;?>" class="card-img-top img-fluid" alt="...">
						  <div class="card-body">
						  	<h6>Disponible Ahora</h6>
						    <h5 class="card-title"><a href="<?=the_permalink(); ?>"><?=the_title(); ?></a></h5></h5>
						    <p class="card-text"><?php print wp_trim_words(get_the_excerpt(), 20 ) ?></p>
						  </div>
					 
						  <div class="card-body text-end">
						   
						    <a href="<?=the_permalink(); ?>" class="card-link text-end">Ir al Evento</a>
						  </div>
						 
			  		</div>
			  		 <?php endwhile;?>
			  		<?php else:?>
							<p>No hay talleres</p>
					<?php endif;?>
		  	</div>	
		  	<div class="col-12 col-md-6">
		  		 <?php   $args  = array(
				 	  	'posts_per_page'    =>2,
				        'post_type'     => 'events',
				        'orderby' => 'id',
      					'order'   => 'DESC',
      					'offset' => 1 );
      					 $the_query = new WP_Query( $args );
				    
						  if( $the_query->have_posts() ):  
		  					while( $the_query->have_posts() ) : $the_query->the_post();
		  						$img =  wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );
							?>
		  				 <div class="card border-0 mb-5" >
		  				 <div class="row g-0 align-items-center">
						    <div class="col-md-4">
						      <img src="<?=$img; ?>" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						      	<h6>Disponible ahora</h6>
						        <h5 class="card-title"><a href="<?=the_permalink(); ?>" target="_blank"><?=the_title(); ?></a></h5>
						        <p class="card-text"><?php   print   wp_trim_words( get_the_excerpt(), 10 ); ?></p>
						        <a href="<?=the_permalink(); ?>" target="_blank" class="card-link text-end">Ir al Evento</a>
						      </div>
						    </div>
						  </div>
						</div>
		  			 <?php endwhile;?>
			  		<?php else:?>
							<p>No hay eventos</p>
					<?php endif;?>
		  	</div>
		  </div>
		  <!--div class="row my-5">
		  	<div class="col-12 col-md-3 mx-auto text-center">
		  		<a href="#" class="btn btn-primary">Descubre más eventos</a>
		  	</div>
		  </div-->
		</div>
	</div>
</section>


<!--section class="strap strap-events">
	<div class="inner py-1">
		<div class="container-fluid">
			<div class="row my-3">
				<div class="col-12">
					 
					 <h2 class="fs-4 fw-bold">Próximos eventos</h2>
				</div>
			</div>
			<div class="row my-3">
				 <?php   $args  = array(
				 	  	'posts_per_page'    =>3,
				        'post_type'     => 'events',
				        'orderby' => 'id',
      					'order'   => 'DESC',
      					'offset' => 1 );
      					 $the_query = new WP_Query( $args );
				    
						  if( $the_query->have_posts() ):  
		  					while( $the_query->have_posts() ) : $the_query->the_post();
							?>
				<div class="col-12 col-md-4">
					<?php print get_template_part( 'templates/components/events/card-event-horizontal-small'); ?>
				</div>
				<?php endwhile;?>
			  		<?php else:?>
							<p>No hay Eventos</p>
					<?php endif;?>
			 
			</div>
		</div>
	</div>
</section-->
  
<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  