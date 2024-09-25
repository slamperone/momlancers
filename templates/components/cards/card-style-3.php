<?php 
	$title = $args['title'] ?? '';
	$subtitle = $args['subtitle'] ?? '';
	$content = $args['content'] ?? '';
	$img = $args['img'] ?? '';
	$link = $args['link'] ?? '';
?>

 
<div class="card border-0 shadow mh-400" style="width:100%;" >
  <figure class="text-center">
  	<img src="<?=$img; ?>" class="card-img-top img-fluid" alt="..."   />
  </figure>
  <div class="card-body text-center">
  	<h5 class="fw-bold"><?=$title?></h5>
  	<h6><?=$subtitle?></h6>
     <?=$content;?> 
  </div>
</div>