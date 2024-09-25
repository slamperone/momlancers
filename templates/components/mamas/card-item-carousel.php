 
			  		 <div class="card">
						  <img src="holder.js/450x187" class="card-img-top img-fluid" alt="...">
						  <div class="card-body">
						    <h5 class="card-title"><a href="<?=the_permalink(); ?>"><?=the_title();?></a></h5>
						    <p class="card-text">
						    	<?php print   wp_trim_words( get_the_excerpt(), 10 ); ?>
						    </p>
						    <p class="text-center"><a href="<?=the_permalink(); ?>" class="card-link ">Conoce más</a></p>
						  </div>
						</div>
 