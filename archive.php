<?php 
 
get_header(); ?>
<!-- /end header-->
<!--===Index2 Page Title start===-->
 <?php   

$hero = [
  'image'=>get_template_directory_uri().'/assets/img/concreto/hero.jpg',
  'title'=>'Blog',
  'button'=>false,
  'button_text'=>'Lo quiero',
  'button_link'=>'#'
];
print get_template_part('templates/straps/strap-hero-basic','',$hero); ?>
 
 
<?php   print get_template_part('templates/straps/strap-submenu'); ?>
 <section class="strap section-blog-posts">
 	<!--===Start Blog Category Section===-->
		<div class="inner py-5"> 
			<div class="container-fluid max-width">
        <div class="row my-3 " data-aos="fade-up">
                <div class="col-12 col-md-10">
                  <div class="block strap-title">
                    <h2>NOTICIAS, PROMOCIONES, ÁRTICULOS </h2>
                    <span class="line"></span>
                  </div>
                </div>
              </div>
				<div class="row">
					
						

     <?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type'=>'post',
            'posts_per_page' =>10,
          'paged' => $paged  );

       $counter = 0;
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
        	?>
        	  
        <?php
            while ( $loop->have_posts() ) : 
              $loop->the_post(); 
              ?>
              <div class="col-12 col-lg-6 mx-auto ">
                  <?php  get_template_part( 'templates/posts/post--list', 'post'); ?>
              </div>
            
             <?php 
             
            endwhile;
            ?>
         
            <?php
        } else {
            echo __( 'No Hay post' );
        }
        wp_reset_query();
    ?>
         

					 
				 
		
					<div class="col-lg-4 col-md-12">
						<div class="int_blog_sidebar">
								<?php dynamic_sidebar( 'blog-sidebar' ); ?>
							
						</div>
					</div>
				</div>
			</div>				
		</div>
		<!--======End Blog Category Section======-->
 </section>
<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  