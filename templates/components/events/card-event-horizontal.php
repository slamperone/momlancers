<div class="card border-0 mb-5" >
		  <div class="row g-0 align-items-center">
					    <div class="col-md-4">
					      <img src="holder.js/280x220" class="img-fluid rounded-start" alt="...">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					      	<h6>Disponible ahora</h6>
					        <h5 class="card-title"><a href="<?=the_permalink(); ?>"><?=the_title(); ?></a></h5>
					        <p class="card-text"><?php   print   wp_trim_words( get_the_excerpt(), 10 ); ?></p>
					        <a href="<?=the_permalink(); ?>" class="card-link text-end">Ir al Evento</a>
					      </div>
					    </div>
					  </div>
					</div>