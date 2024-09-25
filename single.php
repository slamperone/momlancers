<?php
/**
 * Template for displaying a single post.
 */

get_header(); // Load header.php

// Start the loop.
while (have_posts()) : the_post();
?>

<section class="strap strap-hero strap-hero-single-post">
    <div class="inner py-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <div class="d-block p-3">
                        <h1 class="my-3 fw-bolder text-white"><?php the_title(); ?></h1>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section class="strap strap-single-post-content">
    <div class="inner py-5">
        <div class="container-fluid maxWidth">
            <div class="row my-3">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
endwhile;

get_footer(); // Load footer.php
?>
