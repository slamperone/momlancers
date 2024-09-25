 <?php 
 $title = isset($args['title']) ? $args['title'] : '';
 $subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
 $text = isset($args['text']) ? $args['text'] : '';
 $postID = isset($args['postID']) ? $args['postID'] : '';
  $css = isset($args['css']) ? $args['css'] : '';
  $rows=[];
 ?>
					 	  <?php  $rows = get_field('landing_images',$postID);  ?>
                           <?php  
                           if(count($rows)>0):


                           foreach( $rows as $row ):

                                    $image = $row['url']; 

                                    ?>
	 
					 		<div class="col-12 col-md-2 image-gallery"  >
					 			 <a href="<?php print  $image; ?>"   class="" alt="">
                                        <img src="<?php print  $image; ?>" class="rounded preview  " alt="Oxicreto" style="">
                                     
                                      </a>
					 		</div>
					  
					 	<!-- /ITEM-->
					 	    <?php
					 	
					 	 endforeach;
					 	 endif; ?>