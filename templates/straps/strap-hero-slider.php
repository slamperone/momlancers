<section class="strap strap-hero-slider">
	  <?php 
		 
			$slide_banner =  get_field("slide_item", 114 );
			 if( count($slide_banner)>0 ) :

			 	?>
			 	<div class="owl-carousel  owl-slider">

			 		<?php
			  foreach( $slide_banner as $row ) :

			  	 
			  	$title = $row['slide_text'];
			  	$image = $row['slide_image'];
			    ?>
			    
			    	<div class="item"> 
			    		<h1 class="slider-title display-1"><?=$title; ?></h1>  
			    		<img class="slider-image img-fluid" src="<?=$image; ?>" alt=""> 
			    	</div>
			    
			
         <?php 
    endforeach;
    ?>
 </div>	
       
 <?php  endif;?> 
</section>

