<?php 
/*Custom Fields*/

/* Template Name: Page Nosotras */
get_header(); ?>
<!-- /end header-->

  <section class="strap strap-hero strap-hero-nosotras">
	<div class="inner pt-5">
		<div class="container-fluid">
		  <div class="row  align-items-center">
		  	<div class="col-12 col-md-6">
		  	   <div class="d-block p-3">
		  	   		<h1 class="fw-bolder text-white">SOMOS <br /> MOMLANCERS </h1>
		  	   	 
		  	   </div>
		  	</div>
		  	<div class="col-12 col-md-6 text-center mx-auto">
		  	 <figure class="mb-0 mt-5">
		  	 	 <img src="<?php bloginfo('template_directory');?>/assets/images/hero-nosotras.png" alt="" class="img-fluid"  >
		  	 </figure>
		  	</div>
		  </div>
		</div>
	</div>	
</section>
 
 


  <section class="strap strap-hero">
	<div class="inner pt-5">
		<div class="container-fluid">
		  <div class="row">
		  	<div class="col-12 col-md-8">
		  	    <h2 class="my-3 fw-bolder">Nuestra historia</h2>
		  	   <article>
			  	   <p><strong>Momlancers</strong> surge cuando al convertirnos en madres, nos cuestionamos sobre: nuestra carrera, prioridades y estilo de vida. </p>
			  	   <p>Para algunas, seguir trabajando significaba hacerlo a medias, ajustando horarios y sacrificando sueños; para otras, significó dejar el trabajo por completo, enfrentándose a la incertidumbre de no saber cuándo volverían a tener una oportunidad laboral. </p>
			  	   <p>Esta es la realidad del 50% de las mujeres que se convierten en mamás, donde el mundo laboral no tiene espacio para ellas porque ser madre es incompatible con ser profesional.</p>
			  	   <p>Por eso, en <strong>Momlancers</strong> queremos demostrar que las mamás también pueden ser exitosas, profesionales, talentosas y apasionadas. </p>
			  	   <p>Trabajamos junto a empresas para implementar políticas laborales flexibles, creando un ambiente donde el trabajo y la vida familiar pueden coexistir en armonía. </p>
			  	   <p>Aquí, visibilizamos y celebramos las historias de éxito donde una madre logra encontrar un lugar donde se prioriza la integración de nuestros roles, ser madre y profesional.</p>
			  	   <p><strong>Momlancers</strong> es una respuesta a la necesidad de muchas madres que buscan no tener que elegir entre su carrera y su familia, demostrando lo mucho que tienen que ofrecer, gracias a sus experiencias y habilidades únicas.</p>
			  	   <p>Es un lugar donde las madres pueden trabajar, soñar y prosperar, marcando el camino para un futuro más inclusivo y equitativo. </p>
			  	   <p>Con cada madre que se une, con cada empresa que cambia su política, estamos construyendo ese futuro, paso a paso, juntas.</p>
			  	   <p>En <strong>Momlancers</strong>, una comunidad de mujeres para mujeres, queremos cambiar la forma en que se crean oportunidades laborales para las mamás en México.</p>
		  	   </article>

		  	</div>
		  	<div class="col-12 col-md-4">
		  		<h3 class="fw-bolder">Prensa</h3>
		  	  


		  	    <?php 
				 	  $args  = array(
				 	  	'posts_per_page'    => 2,
				        'post_type'     => 'press',
				      );
				      $the_query = new WP_Query( $args );
				      if( $the_query->have_posts() ):  
				 		 while( $the_query->have_posts() ) : $the_query->the_post();
				  			$post = get_post($the_query->id);
				    		$excerpt =  $post->post_excerpt;
				    		$title =  $post->post_title;
				    		$link =  get_permalink();
				  			$img =  wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );
				 	   ?>


		  	   <aside class="widget my-3">
		  	   		 <div class="card">
						  <img src="<?=$img;?>" class="card-img-top img-fluid" alt="...">
						  <div class="card-body">
						  
						    <h5 class="fs-6  card-title"><a href="<?=the_permalink(); ?>"><?=the_title();?></a></h5>
						    <p class="card-text"><?php print   wp_trim_words( get_the_excerpt(), 10 ); ?></p>
							  
							  <p class="text-end">
							    <a href="<?=the_permalink(); ?>" class="card-link text-end">Leer Más</a>
							  </p>
						  </div>
						</div>
		  	   </aside>

				 	   <?php

		  
		         endwhile;
		     else:
		         ?>

		           <aside class="widget my-3">
		  	   		<div class="card">
						 <div class="card-body">
						   <p>No hay notas de prensa.</p>
						  </div>
					</div>
		  	   </aside>

		         <?php
		     endif;
		      ?>
		 
		  	</div>
		  </div>
		</div>
	</div>	
</section>
<section class="strap strap-hero">
	<div class="inner py-5">
		<div class="container-fluid">
		 
			 <div class="row my-5 align-items-top">
				<div class="col-12 col-md-9">
					<h2 class="fs-2 fw-bold mt-4">Impacto social</h2>
				</div>
				<div class="col-12 col-md-3 text-center">
					<figure class="">
						<img src="<?php bloginfo('template_directory');?>/assets/images/vector-3.png" alt="" class="img-fluid " style="max-height:60px;" />
					</figure>
				</div>
			</div>
		  <div class="row align-items-center">
			   <div class="col-12 col-md-4">
			   		<div class="d-block text-center">
			   			<p class="display-1 fw-bolder text-color-2" >
			   				+10,000
			   			</p>
			   			<p>Tenemos una comunidad de +10,000  mujeres listas para trabajar.</p>
			   		</div>
			   </div>
			    <div class="col-12 col-md-4">
			   		<div class="d-block text-center">
			   			<p class="display-1 fw-bolder text-color-3">
			   				90%
			   			</p>
			   			<p>de nuestro talento tiene un título universitario</p>
			   		</div>
			   </div>
			    <div class="col-12 col-md-4">
			   		<div class="d-block text-center">
			   			<p class="display-1 fw-bolder text-color-1">
			   				8-12
			   			</p>
			   			<p>años de experiencia es el promedio de nuestro talento.</p>
			   		</div>
			   </div>
		  </div>
		  <div class="row my-3">
		  	<div class="col-12 col-md-3 mx-auto text-center">
		  		
		  	</div>
		  </div>
		</div>
	</div>
</section>

 <section class="strap strap-hero">
	<div class="inner py-5">
		<div class="container-fluid">
			 <div class="row my-5 align-items-top">
				<div class="col-12 col-md-9">
					<h2 class="fs-2 fw-bold mt-4">Alianzas</h2>
				</div>
				<div class="col-12 col-md-3 text-center">
					<figure class="">
						<img src="<?php bloginfo('template_directory');?>/assets/images/vector-4.png" alt="" class="img-fluid " style="max-height:60px;" />
					</figure>
				</div>
			</div>
			 
		  <div class="row align-items-center">
			   <div class="col-12 col-md-4">
			     <div class="card  text-center shadow mh-520">
 						<div class="card-body">
			   			 	<figure class="my-3">
			   			 		<img src="<?php bloginfo('template_directory');?>/assets/images/icon-red.jpg" alt="" class="img-fluid" width="180" />
			   			 	</figure>
			   			 	<h5 class="my-3 fw-bolder">Lifeed</h5>
			   			 	<p  class="my-3 fs-6">Momlancers es el distribuidor autorizado de Lifeed en Latinoamérica. Esta herramienta de autodescubrimiento, avalada por la Kellogg School of Management, permite transferir habilidades blandas entre la vida diaria y el entorno laboral. Ofrece módulos de microaprendizaje, contenido interactivo y auto-coaching para el desarrollo personal y profesional.</p>
			   			 </div>
			   		</div>
			   </div>
			    <div class="col-12 col-md-4">
			   	<div class="card  text-center shadow mh-520">
 						<div class="card-body">
			   			 	<figure class="my-3">
			   			 		<img src="<?php bloginfo('template_directory');?>/assets/images/icon-red-1.jpg" alt="" class="img-fluid" width="180" />
			   			 	</figure>
			   			 	<h5 class="my-3 fw-bolder">Movimiento STEM</h5>
			   			 	<p  class="my-3 fs-6">En colaboración con Movimiento STEM, Momlancers promueve la participación de mujeres en Ciencia, Tecnología, Ingeniería y Matemáticas, buscando inspirarlas y empoderarlas para reducir la brecha de género en estos campos.</p>
			   			 </div>
			   		</div>
			   </div>
			    <div class="col-12 col-md-4">
			   	<div class="card  text-center shadow mh-520">
 						<div class="card-body">
			   			 	<figure class="my-3">
			   			 		<img src="<?php bloginfo('template_directory');?>/assets/images/icon-red-2.jpg" alt="" class="img-fluid" width="180" />
			   			 	</figure>
			   			 	<h5 class="my-3 fw-bolder">30% Club</h5>
			   			 	<p  class="my-3 fs-6">Momlancers, con apoyo del 30% Club en su Consejo Consultivo, permite a las mujeres adquirir habilidades para ser consejeras efectivas. Esta es una iniciativa global que busca aumentar la representación femenina en consejos y roles de liderazgo, ofreciendo mentoría y desarrollo.</p>
			   			 </div>
			   		</div>
			   </div>
		  </div>
		  <div class="row my-3">
		  	<div class="col-12 col-md-3 mx-auto text-center">
		  		
		  	</div>
		  </div>
		</div>
	</div>
</section>
<section class="strap strap-hero">
	<div class="inner py-5">
		<div class="container-fluid">

			 <div class="row my-5 align-items-top">
				<div class="col-12 col-md-9">
					<h2 class="fs-2 fw-bold mt-4">Comunidad Momlancers</h2>
				</div>
				<div class="col-12 col-md-3 text-center">
					<figure class="">
						<img src="<?php bloginfo('template_directory');?>/assets/images/vector-3.png" alt="" class="img-fluid " style="max-height:60px;" />
					</figure>
				</div>
			</div>
		 
				<div class="row my-3">

				<?php 
		$args = array( 
		    'posts_per_page' => 6,
		    'post_type' => 'members',
		    'orderby' => 'id',
      		 'order'   => 'ASC',
      		  'tax_query' => array(
						        array(
						            'taxonomy' => 'cargo',
						            'field' => 'slug',
						            'terms' => 'socio', // El término de la taxonomía que deseas obtener
						        ),
						    ), 
		);
		$the_query = new WP_Query($args);
		if ($the_query->have_posts()):  
		    while ($the_query->have_posts()): $the_query->the_post();  

		    	$member_email = get_field('member_email');
		    	$member_type = get_field('member_type');
		    	$member_linkedin = get_field('member_linkedin');
		    	$member_cargo = get_field('member_cargo');
		    	 $member_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'thumbnail');

		        
		        ?>
				 <div class="col-12 col-md-4 mx-auto">
						 <div class="card border-0">
								<figure>
								 	<img src="<?=$member_image;?>" alt="" class="img-fluid rounded-circle" />
								</figure>
									<div class="card-body">
										<div class="d-block">
											<h5 class="my-3 fw-bolder text-uppercase"><?=the_title(); ?></h5>
											<h6><?=$member_cargo ;?></h6>
											<p><?php print wp_trim_words(get_the_excerpt(), 20 ) ?> </p>
																 		<p>Saluda  <a href="<?=$member_linkedin ?>">aqui</a></p>
										</div>
								 	</div>	
								</div> 
						</div>
			 <?php endwhile; ?>
			<?php endif;?>

				</div>
			</div>
		</div>
	</section>

	<section class="strap strap-hero">
	<div class="inner py-5">
		<div class="container-fluid">
				<div class="row my-3">
						<div class="col-12">
							<h2 class="my-3 fw-bolder">Miembros del consejo</h2>
							 
						</div>
				</div>

				<div class="row my-3">
	 <?php  $args = array( 
		    'posts_per_page' => 12,
		    'post_type' => 'members',
		    'orderby' => 'id',
      		 'order'   => 'ASC',
      		  'tax_query' => array(
						        array(
						            'taxonomy' => 'cargo',
						            'field' => 'slug',
						            'terms' => 'miembro', // El término de la taxonomía que deseas obtener
						        ),
						    ), 
		);
		$the_query = new WP_Query($args);
		
		if ($the_query->have_posts()):  
		    while ($the_query->have_posts()): $the_query->the_post();  

		    	$member_email = get_field('member_email');
		    	$member_type = get_field('member_type');
		    	$member_linkedin = get_field('member_linkedin');
		    	$member_cargo = get_field('member_cargo');
		    	 $member_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'thumbnail');

		        
		        ?>
						<div class="col-12 col-md-3">
						 	 <div class="card border-0">
								<figure>
								 	<img src="<?=$member_image;?>" alt="" class="img-fluid rounded-circle" />
								</figure>
									<div class="card-body">
										<div class="d-block">
											<h5 class="my-3 fw-bolder text-uppercase"><?=the_title(); ?></h5>
											<h6><?=$member_cargo ;?></h6>
											<p><?php print wp_trim_words(get_the_excerpt(), 20 ) ?> </p>
																 		<p>Saluda  <a href="<?=$member_linkedin ?>">aqui</a></p>
										</div>
								 	</div>	
								</div> 
						</div>
					 	 <?php endwhile; ?>
			<?php endif;?>


				</div>
				 
			</div>
		</div>
	</section>
<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  