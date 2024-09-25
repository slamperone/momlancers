<?php 
	$title = $args['title'] ?? '';
	$subtitle = $args['subtitle'] ?? '';
	$content = $args['content'] ?? '';
	$excerpt = $args['excerpt'] ?? '';
	$img = $args['img'] ?? '';
	$link = $args['link'] ?? '';
	$category = $args['category'] ?? '';
?>

<div class="col-12 col-md-4 p-2 ">
			  		 <div class="card">
			  		 	<p class="m-1"><small><?=$category; ?></small></p>
						  <img src="holder.js/450x187" class="card-img-top img-fluid p-2" alt="...">
						  <div class="card-body">
						    <h5 class="card-title"><?=$title;?></h5>
						    <p class="card-text"><?=$excerpt;?></p>
						  </div>
					 
						  <div class="card-body text-end">
						   
						    <a href="<?=$link; ?>" class="card-link text-end">Leer Más</a>
						  </div>
						</div>
			  	</div>