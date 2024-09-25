<?php 
	$title = $args['title'] ?? '';
	$img = $args['img'] ?? '';
	$link = $args['link'] ?? '';
?>


 <div class="card cardmh375">
 	<img src="<?=bloginfo('template_directory').$img;?>" class="card-img-top img-fluid p-2" alt="...">
		<div class="card-body text-center p-5">
			<h5 class="card-title fw-bold"><a href="<?=$link; ?>"><?=$title; ?></a></h5>
		</div>				  
 </div>
  