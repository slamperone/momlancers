<?php
/**
 * The template for displaying any single page.
 *
 */
 

get_header(); // This fxn gets the header.php file and renders it ?>

 <section class="strap">
	<div class="inner py-5">
		<div class="container-fluid maxWidth">
			         <div class="row my-5 " data-aos="fade-up">
                      <div class="col-12 col-md-10">
                        <div class="block strap-title">
                          <h2><?php the_title(); // Display the title of the page ?></h2>
                         
                           
                        </div>
                      </div>
                    </div>
                  <!--row-->
      			<div class="row my-5 " data-aos="fade-up">
                    <div class="col-12">
            					 
            					 <?php the_content(); ?>
            					 
            				</div>
            		 
      	     </div>
	</div>
</div>
</section>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>