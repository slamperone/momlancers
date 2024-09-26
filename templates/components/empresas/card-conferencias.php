 <?php $args  = array(
		'posts_per_page'    => 3,
		'post_type'     => 'workshops',
		'tax_query' => array(
			array(
				'taxonomy' => 'topic',
				'field' => 'slug',
				'terms' => 'conferencias', // El término de la taxonomía que deseas obtener
			),
		),
	);
	$the_query = new WP_Query($args);
	?>
 <div class="card border-0 text-center text-white rounded p-3 my-2" style="min-height: 380px;">
     <h3 class="my-3 fw-bold">Conferencias</h3>
     <?php
		if ($the_query->have_posts()):
		?>
     <ul class="my-3 list-group">
         <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
         <li class="list-group-item py-3 d-flex justify-content-between align-items-center gap-2">
             <a href="<?= the_permalink(); ?>" class="text-white float-start fw-400 text-start"><?= the_title(); ?></a>
             <a href="<?= the_permalink(); ?>" class="btn btn-sm  text-color-1  float-end">Cotizar</a>
         </li>
         <?php endwhile; ?>
     </ul>
     <?php endif; ?>
     <!--p class="text-center"><a href="#" class="btn text-white  fw-bold ">Saber Más</a></p-->

 </div>