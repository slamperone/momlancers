<div class="card my-3 post">
	   <div class="card-body ">
				 <?php if ( has_post_thumbnail() ) : ?>
                                     <?php the_post_thumbnail('post_thumbnail',['class' => 'img-fluid']); ?>
                                       <?php else: ?>
                                  	<img src="<?=get_template_directory_uri();?>/assets/img/no-image.jpg" class="img-fluid" alt="image"/>
                                              <?php endif; ?>
								<div class="d-block my-3">
								  <time class="e-date" datetime="<?php the_time( 'l, F jS, Y' ); ?>">  <?php the_time( 'l, F jS, Y' ); ?></time>
								</div>
								<div class="d-block my-3">
									<h3> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  <?php print the_title(); ?></a></h3>
									<p><?php the_excerpt(100);?></p>
									 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-md btn-main dark">Leer Mas</a>
								</div>
							</div>		
 </div>