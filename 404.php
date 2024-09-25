<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it

 
 ?>
 

 <section class="strap strap-404">
    <div class="inner py-3 bg-dark">
        <div class="container-fluid maxWidth">
          <div class="row ">
              <div class="col-12 text-center">
                    <img src="<?=get_template_directory_uri() ; ?>/assets/images/not-found.png" alt="">
              </div>
          </div>
    </div>
  </div>
</section>

 
 
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
