<?php 
	$title = $args['title'] ?? '';
	$subtitle = $args['subtitle'] ?? '';
	$content = $args['content'] ?? '';
	$img = $args['img'] ?? '';
	$link = $args['link'] ?? '';
?>


<div class="card border-0" style="width:100%;" >
         <div class="row my-3 align-items-center">
				<div class="col-12 col-md-7">
					<figure>
						<img src="<?=$img;?>" alt="" class="img-fluid" />
					</figure>
				</div>
				<div class="col-12 col-md-5">
					<h3><?=$title;?></h3>
					<?=$content;?>
				</div>
			</div>
</div>