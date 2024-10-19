<?php

/* Template Name: Page Mamás */
get_header(); ?>
<!-- /end header-->

<section class="strap strap-hero  ">
	<div class="inner py-1 ">
		<div class="container-fluid">
			<div class="row g-0">
				<div class="col-12 col-md-5 bg-color-3 ">
					<div class="d-block p-5">
						<h1 class="my-3 text-white"><strong>Mamás</strong></h1>
						<p class="py-3 text-white">Momlancers ofrece un espacio a mamás talentosas y comprometidas con
							su <br> desarrollo personal y laboral</p>
						<a href="<?= site_url('/convocatorias/') ?>" class="btn btn-primary">Descubre nuestra oferta</a>
					</div>
				</div>
				<div class="col-12 col-md-3 bg-color-3 bg-image-3 "></div>
				<div class="col-12 col-md-4">
					<aside class="d-block p-2">
						<h4 class="fs-4 fw-bolder my-3">Bolsa de Trabajo para mamás</h4>
						<div class="d-block"></div>
						<a href="<?= site_url('/convocatorias/') ?>" class="btn btn-primary">Ver más vacantes</a>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="strap strap-impulsa-1">
	<div class="inner py-5">
		<div class="container-fluid">
			<div class="row my-5 align-items-top">
				<div class="col-12 col-md-9">
					<h2 class="fs-4 fw-bold">Impulsa tu talento</h2>
					<p class="fs-5">Complementa tu formación profesional y soft skills</p>
				</div>
				<div class="col-12 col-md-3 text-center">
					<figure class="">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/vector-4.png" alt=""
							class="img-fluid d-none d-lg-block" style="max-height:60px;" />
					</figure>
				</div>
			</div>
			<div class="row align-items-center">
				<button class="arrow-prev-3 position-absolute w-auto start-0 z-2">
					<iconify-icon icon="fluent:ios-arrow-24-regular" class="text-color-1" width="3rem" height="3rem">
					</iconify-icon>
				</button>
				<div class="col-10 col-md-9 mx-auto">
					<div class="owl-carousel owl-style-3">
						<?php $args  = array(
							'posts_per_page'    => 6,
							'post_type'     => 'workshops',
							'tax_query' => array(
								array(
									'taxonomy' => 'topic',
									'field' => 'slug',
									'terms' => 'talento', // El término de la taxonomía que deseas obtener
								),
							),
						);
						$the_query = new WP_Query($args);

						while ($the_query->have_posts()) : $the_query->the_post();

							$img =  wp_get_attachment_url(get_post_thumbnail_id($the_query->ID), 'thumbnail');
						?>
							<div class="col-12 col-md-12 g-0">
								<div class="card">
									<img src="<?= $img; ?>" class="card-img-top img-fluid" alt="<?= the_title(); ?>" />
									<div class="card-body">
										<h5 class="card-title"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
										</h5>
										<p class="card-text">
											<?php print   wp_trim_words(get_the_excerpt(), 10); ?>
										</p>
										<p class="text-center">
											<a href="<?= the_permalink(); ?>" class="card-link ">Conoce más</a>
										</p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<button class="arrow-next-3 position-absolute w-auto end-0 z-2">
					<iconify-icon icon="fluent:ios-arrow-rtl-24-regular" class="text-color-1" width="3rem"
						height="3rem"></iconify-icon>
				</button>
			</div>
			<!--div class="row my-5">
		  	<div class="col-12 col-md-3 mx-auto text-center">
		  		<a href="#" class="btn btn-primary">Descubre otros cursos</a>
		  	</div>
		  </div-->
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
					<?php
					$args  = array(
						'posts_per_page'    => 1,
						'post_type'     => 'events',
						'orderby' => 'id',
						'order'   => 'DESC'
					);
					$the_query = new WP_Query($args);

					if ($the_query->have_posts()):
						while ($the_query->have_posts()) : $the_query->the_post();
							$img =  wp_get_attachment_url(get_post_thumbnail_id($the_query->ID), 'thumbnail');
							/*Custom Fields*/
							$field_bizneo = get_field('link_bizneo');
					?>
							<div class="card">
								<img src="<?= $img; ?>" class="card-img-top img-fluid" alt="...">
								<div class="card-body">
									<h6>Disponible Ahora</h6>
									<h5 class="card-title"><a href="<?= $field_bizneo; ?>"><?= the_title(); ?></a></h5>
									</h5>
									<p class="card-text"><?php print wp_trim_words(get_the_excerpt(), 20) ?></p>
								</div>
								<div class="card-body text-end">
									<a href="<?= $field_bizneo; ?>" class="card-link text-end">Ir al Evento</a>
								</div>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<p>No hay eventos</p>
					<?php endif; ?>
				</div>
				<div class="col-12 col-md-6">
					<?php
					$args  = array(
						'posts_per_page' => 2,
						'post_type' => 'events',
						'orderby' => 'id',
						'order'   => 'DESC',
						'offset' => 1
					);

					$the_query = new WP_Query($args);

					if ($the_query->have_posts()):
						while ($the_query->have_posts()) : $the_query->the_post();
							$img =  wp_get_attachment_url(get_post_thumbnail_id($the_query->ID), 'thumbnail');
							/*Custom Fields*/
							$field_bizneo23 = get_field('link_bizneo');
					?>
							<div class="card border-0 mb-5">
								<div class="row g-0 align-items-center">
									<div class="col-md-4">
										<img src="<?= $img; ?>" class="img-fluid rounded-start" alt="...">
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h6>Disponible ahora</h6>
											<h5 class="card-title"><a href="<?= $field_bizneo23; ?>"><?= the_title(); ?></a>
											</h5>
											<p class="card-text"><?php print   wp_trim_words(get_the_excerpt(), 10); ?></p>
											<a href="<?= $field_bizneo23; ?>" class="card-link text-end">Ir al Evento</a>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<p>No hay eventos</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- /footer-->
<?php get_footer(); ?>
<!-- /end footer-->