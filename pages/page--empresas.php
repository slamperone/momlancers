<?php 
/*Custom Fields*/

/* Template Name: Page empresas */
get_header(); ?>
<!-- /end header-->
 <section class="strap strap-hero strap-hero-empresa">
	<div class="inner  mb-0">
		<div class="container-fluid p-0">
		  <div class="row  align-items-center g-0">
		  	<div class="col-12 col-md-5">
		  	   <figure class="hero-img">
		  	 	 <img src="<?php bloginfo('template_directory');?>/assets/images/hero-empresa.jpg" alt="" class="img-fluid"   >
		  	 </figure>
		  	</div>
		  	<div class="col-12 col-md-7 mx-auto">
		  		 <div class="d-block p-5">
		  	   		<h1 class="fw-bolder text-white">Empresas</h1>
		  	   		<p class="fs-5 text-white fw-600">Somos tus aliadas y te ayudaremos a establecer una oportunidad estratégica para apoyar y aprovechar los talentos de las madres trabajadoras, creando un lugar de trabajo más dinámico, innovador e inclusivo</p>

					<span class="d-block my-3">
					<h2 class="text-white">3 cosas que puedes junto a momlancers</h2>	
					</span>


					<div class="row d-flex h-100">
						<div class="col-2">
						<img src="<?php bloginfo('template_directory');?>/assets/images/uno.png" alt="" class="img-fluid"   >
						</div>
						<div class="col-10 justify-content-center align-self-center text-white fw-400" >Atraer talento femenino</div>
					</div>

					<div class="row d-flex h-100 my-2">
						<div class="col-2">
						<img src="<?php bloginfo('template_directory');?>/assets/images/dos.png" alt="" class="img-fluid"   >
						</div>
						<div class="col-10 justify-content-center align-self-center text-white fw-400" >Impulsar el talento femenino</div>
					</div>

					<div class="row d-flex h-100">
						<div class="col-2">
						<img src="<?php bloginfo('template_directory');?>/assets/images/tres.png" alt="" class="img-fluid"   >
						</div>
						<div class="col-10 justify-content-center align-self-center text-white fw-400" >Transformar tu cultura</div>
					</div>
					
		  	   </div>
		  	</div>
		  </div>
		</div>
	</div>	
</section>
 <section class="strap strap-impacto ">
	<div class="inner ">
		<div class="container-fluid">
			 <div class="row my-5 align-items-center">
				<div class="col-12  col-md-9">
						<h2 class="fs-2 fw-bold">Impacto social</h2>
				</div>
				<div class="col-12 col-md-3">
					<img src="<?php bloginfo('template_directory');?>/assets/images/vector-6.png" alt="" class="img-fluid  d-none d-lg-block" style="margin-top: -90px;"  >
				</div>
			</div>
			<div class="row my-5 align-items-center" >
				<div class="col-12 text-center">
					<p class="fs-4 text-color-2">Déjanos tus datos para contactarte</p>
				</div>
			</div>
			<div class="row my-5  align-items-top text-center">
			   <div class="col-12 col-md-4 col-num-1">
			   		<div class="card border-0">
			   			<p class=" fw-bolder text-color-2">
			   				<span>+10,000</span>
			   			</p>
			   			<p class="p-3">Tenemos una comunidad de +10,000  mujeres listas para trabajar.</p>
			   		</div>
			   </div>
			    <div class="col-12 col-md-4 col-num-2">
			   		<div class="card border-0">
			   			<p class="  fw-bolder text-color-3">
			   				<span>90%</span>
			   			</p>
			   			<p class="p-3">de nuestro talento tiene un título universitario</p>
			   		</div>
			   </div>
			    <div class="col-12 col-md-4 col-num-3">
			   		<div class="card border-0">
			   			<p class="fw-bolder text-color-1">
			   				<span>8 - 12</span>
			   			</p>
			   			<p class="p-3">años de experiencia es el promedio de nuestro talento.</p>
			   		</div>
			   </div>
		  </div>
		</div>
	</div>
</section>
 
 <section class="strap strap-talento" id="strap-talento">
	<div class="inner py-5">
		<div class="container-fluid">
		  <div class="row">
				<div class="col-12">
					<h2 class="fs-2 fw-bold">1. Atrae el Talento Femenino</h2>
					<p class="fs-5">¿Con qué te podemos ayudar?</p>
				</div>
			</div>
			<div class="row ">
				<div class="col-12 col-md-4 ">
				 <?php 
				 
				   print get_template_part( 'templates/components/cards/card-style-1', null,
				    array( 
				     'title' => 'Conecta con nuestro talento Ready to Engage',
				     'img'=>'/assets/images/strap-talento-1.jpg',
				     'link'=>'#'
				     ) ); 

				    ?>
				</div>
				<div class="col-12 col-md-4 ">
				 <?php 
				 
				   print get_template_part( 'templates/components/cards/card-style-1', null,
				    array( 
				     'title' => 'Publica una vacante',
				     'img'=>'/assets/images/strap-talento-2.jpg',
				     'link'=>'#'
				     ) ); 

				    ?>
				</div>
				<div class="col-12 col-md-4 ">
				 <?php 
				 
				   print get_template_part( 'templates/components/cards/card-style-1', null,
				    array( 
				     'title' => 'Contrata por proyecto',
				     'img'=>'/assets/images/strap-talento-3.jpg',
				     'link'=>'#'
				     ) ); 

				    ?>
				</div>
			</div>
		</div>
	</div>	
</section>

<?php 
//Si hay post tipo "Historias"
  $args  = array('posts_per_page'    => 3,
				 'post_type'     => 'history',
				);
	  $the_query = new WP_Query( $args );
		  if( $the_query->have_posts() ):  
?>
<section class="strap strap-historias strap-carousel-1 ">
	<div class="inner py-5">
		<div class="container-fluid">
		  <div class="row my-5 align-items-top">
				<div class="col-12 col-md-9">
					<h2 class="fs-2 fw-bold mt-4">Historias de éxito</h2>
				</div>
				<div class="col-12 col-md-3 text-center">
					<figure class="">
						<img src="<?php bloginfo('template_directory');?>/assets/images/vector-3.png" alt="" class="img-fluid " style="max-height:60px;" />
					</figure>
				</div>
			</div>
			<div class="row my-5 align-items-center">
				<div class="col-12 col-md-1">
					<button class="arrow-prev-1" >
						<iconify-icon icon="fluent:ios-arrow-24-regular"  class="text-color-1" width="3rem" height="3rem"></iconify-icon >
					</button>
					
				</div>
				 <div class="col-12 col-md-10">
				 <div class="owl-carousel owl-style-1">
			 <?php 
				 	
				 		 while( $the_query->have_posts() ) : $the_query->the_post();

  			 
  			  
	  			$post = get_post($the_query->id);
	    		$history_content = apply_filters('the_content', $post->post_content);
	  			$history_image =  wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );
	  			 

				 		 ?> 
					 	 <div class="item">
					 	 	<div class="card border-0" style="width:100%;" >
							         <div class="row my-3 align-items-center">
											<div class="col-12 col-md-7">
												<figure>
													<img src="<?=$history_image;?>" alt="" class="img-fluid" />
												</figure>
											</div>
											<div class="col-12 col-md-5">
												<h3><?=the_title();?></h3>
												<?=$history_content;?>
											</div>
										</div>
							</div>
					 	 </div>
					 	<?php
					 	endwhile; ?>
				 </div>
				 	 
				 	
				 </div>	
				 <div class="col-12 col-md-1">
				 	<button  class="arrow-next-1" >
				 		<iconify-icon icon="fluent:ios-arrow-rtl-24-regular" class="text-color-1" width="3rem" height="3rem"></iconify-icon>
				 	</button>
				 	
				 	
				 </div>	
			</div>
		</div>
	</div>	
</section>
<?php endif;?>
 <section class="strap strap-impulsa">
	<div class="inner py-5">
		<div class="container-fluid">
		  <div class="row">
				<div class="col-12">
					<h2 class="fs-2 fw-bolder">2.- Impulsa tu talento femenino</h2>
					<p class="fs-5">Asegúrate de que tu talento femenino se siga desarrollando y creciendo.</p>
				</div>
			</div>
			<div class="row ">
				<div class="col-12 col-md-4 col-num-1">
					<?php print get_template_part( 'templates/components/empresas/card-talleres'); ?>
				</div>
				<div class="col-12 col-md-4  col-num-2">
					 <?php print get_template_part( 'templates/components/empresas/card-conferencias'); ?>
				</div>
				<div class="col-12 col-md-4  col-num-3">
					<?php print get_template_part( 'templates/components/empresas/card-herramientas'); ?>
				</div>
			</div>
		</div>
	</div>	
</section>

 <!--section class="strap-light strap-catalogo ">
	<div class="inner  bg-color-3 py-5">
		<div class="container-fluid g-0 ">
  
		  <div class="row my-5 ">
			   <div class="col-12 col-md-4 mx-auto">
			   		<h5>Descarga nuestro catálogo de speakers dejando tu correo</h5>
			   </div>
			   <div class="col-12 col-md-5 mx-auto">
			   	<form class="row row-cols-lg-auto align-items-center g-0">
					  <div class="col-12 px-0">
					    <label class="visually-hidden" for="inlineFormInputGroupUsername">Email</label>
					    <div class="input-group">
					      <div class="input-group-text"></div>
					      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Correo Electronico">
					    </div>
					  </div>
					 
					  <div class="col-12 px-0">
					    <button type="submit" class="btn btn-primary">Descarga nuestro catálogo</button>
					  </div>
					</form>
			   </div>		
		  </div>
		</div>
	</div>
</section-->

<section class="strap strap-casos strap-carousel-2">
	<div class="inner py-5">
		<div class="container-fluid">
		   <div class="row my-5 align-items-top">
				<div class="col-12 col-md-9">
					<h2 class="fs-2 fw-bold mt-4">Casos de éxito</h2>
				</div>
				<div class="col-12 col-md-3 text-center">
					<figure class="">
						<img src="<?php bloginfo('template_directory');?>/assets/images/vector-4.png" alt="" class="img-fluid " style="max-height:60px;" />
					</figure>
				</div>
			</div>
			<div class="row my-5 align-items-center">
				<div class="col-12 col-md-1">
					<button class="arrow-prev-2" >
						<iconify-icon icon="fluent:ios-arrow-24-regular"  class="text-color-1" width="3rem" height="3rem"></iconify-icon >
					</button>
					
				</div>
				 <div class="col-12 col-md-8 mx-auto">
				 <div class="owl-carousel owl-style-2 ">
				 	<?php 
			 	  $args  = array( 
			 	  	'posts_per_page'    => 6,
			          'post_type'     => 'testimonial',
			       
			      );
			      $the_query = new WP_Query( $args );
			      if( $the_query->have_posts() ):  
			 		 while( $the_query->have_posts() ) : $the_query->the_post();  
			        
			  			$testimonio_name =  get_field('testimonio_name'); 
			  			$testimonio_company =  get_field('testimonio_company'); 
			  			$testimonio_image =  wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );
			  			$post = get_post($the_query->id);
			    		$content = apply_filters('the_content', $post->post_content);
			  			$testimonio_content   = apply_filters('the_content', $content);


  			?>
 			 		<div class="item p-2">
					 <?php  print get_template_part( 'templates/components/cards/card-style-3', null,
				    array( 
				     'title' => $testimonio_name,
				     'img'=>$testimonio_image,
				     'content'=>$testimonio_content,
				     'link'=>'#'
				     ) ); 

				    ?>

					 	 </div>
				<?php endwhile; ?>
					 </div>
	<?php endif; ?> 
				 	
				 </div>	
				 <div class="col-12 col-md-1">
				 	<button  class="arrow-next-2" >
				 		<iconify-icon icon="fluent:ios-arrow-rtl-24-regular" class="text-color-1" width="3rem" height="3rem"></iconify-icon>
				 	</button>
				 	
				 	
				 </div>	
			</div>
		</div>
	</div>	
</section>
<section class="strap">
	<div class="inner  py-5">
		<div class="container-fluid">
			<div class="row my-5">
				<div class="col-12">
					<h2 class="fs-2 fw-bolder">3.- Transforma tu cultura</h2>
					 
				</div>
			</div>
			<div class="row my-5 align-items-center">
				<div class="col-12 col-md-6">
					<figure>
						<img src="<?php bloginfo('template_directory');?>/assets/images/emp-img-transforma.jpg" alt="" class="img-fluid" />
					</figure>
				</div>
				<div class="col-12 col-md-6">
					<article class="p-3">
						<p>Diseñamos programas personalizados para tu empresa enfocados en empoderar, promover la equidad  e impulsar profesionalmente al talento de madres trabajadoras.</p>
				<p>​Algunos de nuestros servicios: diagnóstico, coaching individual o grupal, talleres, formación de mentoras dentro de tus empresas.</p>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  