<?php
/**
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	

  <?php   

$hero = [
  'image'=>get_template_directory_uri().'/assets/img/concreto/hero.jpg',
  'title'=>'Busqueda',
  'button'=>false,
  'button_text'=>'Lo quiero',
  'button_link'=>'#'
];
print get_template_part('templates/straps/strap-hero-basic','',$hero); ?>
<?php   print get_template_part('templates/straps/strap-submenu'); ?> 
	 <section class="strap strap-search">
    	<div class="inner">
        <div class="container-fluid max-width">
        	  <div class="row my-5 " data-aos="fade-up">
              <div class="col-12 col-md-10">
                <div class="block strap-title">
                  <h2>Resultados de Busqueda : &reg;</h2>
                  <span class="line"></span>
                </div>
              </div>
            </div>
        	<div class="row">
        		

			<?php if ( have_posts() ) : 
			// Do we have any posts/pages in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a page to show, start a loop that will display it
				?>
				<div class="col-12 col-md-12">
					<article class="post my-3">
					
						<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();  ?></a></h3>
						
						<div class="the-content">

						<?php echo wp_html_excerpt( get_the_content(), 250, '...' ); ?>
							
							<?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
						</div><!-- the-content -->
						<hr />
					</article>
				</div>
				<?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">No se han encontrado resultados.</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>

	         	</div>
        </div>
    </div>
</section>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>