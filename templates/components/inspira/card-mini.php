<div class="card shadow-1 mb-2  h-100 p-2 card-style-6">
							 <img src="holder.js/450x187" class="card-img-top img-fluid rounded" alt="...">
								<div class="card-body">
									 
									 <h6 class="card-title fw-bold"><a href="<?=the_permalink();?>"><?php print the_title();?></a></h6>
								 
									 <p><?php print   wp_trim_words( get_the_excerpt(), 10 ); ?></p>
								</div>
						 </div>