<?php 
/*Custom Fields*/

/* Template Name: Page Blog */
get_header(); ?>
<!-- /end header-->

<section class="strap strap-hero strap-hero-single-post">
    <div class="inner py-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <div class="d-block p-3">
                        <h1 class="my-3 fw-bolder text-white">Blog</h1>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<section class="strap strap-eventos">
	<div class="inner py-1">
		<div class="container-fluid">
 
		  <div class="row my-5">
		   	
		  	<div class="col-12 col-md-10 mx-auto">
		  		 <?php   $args  = array(
				 	  	'posts_per_page'    =>6,
				        'post_type'     => 'post',
				        'orderby' => 'id',
      					'order'   => 'DESC',
      					'offset' => 1 );
      					 $the_query = new WP_Query( $args );
				    
						  if( $the_query->have_posts() ):  
		  					while( $the_query->have_posts() ) : $the_query->the_post();
							?>
		  						<div class="card border-0 mb-5" >
		 			 <div class="row g-0 align-items-center">
					    <div class="col-md-4">
					      <img src="<?=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'thumbnail') ?>" class="img-fluid rounded-start" alt="<?=the_title(); ?>" class="img-fluid">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					      	 
					        <h5 class="card-title"><a href="<?=the_permalink(); ?>"><?=the_title(); ?></a></h5>
					        <p class="card-text"><?php   print   wp_trim_words( get_the_excerpt(), 10 ); ?></p>
					        <a href="<?=the_permalink(); ?>" class="card-link text-end">Ver Entrada</a>
					      </div>
					    </div>
					  </div>
					</div>
		  			 <?php endwhile;?>
			  		<?php else:?>
							<p>No hay entradas</p>
					<?php endif;?>
		  	</div>
		  </div>
		  <div class="row my-5">
		  	<div class="col-12 col-md-3 mx-auto text-center">
		  		 
		  	</div>
		  </div>
		</div>
	</div>
</section>
 

 
<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  