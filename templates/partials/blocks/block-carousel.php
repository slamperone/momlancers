 <?php 
 $title = isset($args['title']) ? $args['title'] : '';
 $subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
 $text = isset($args['text']) ? $args['text'] : '';
 $postID = isset($args['postID']) ? $args['postID'] : '';
 $css = isset($args['css']) ? $args['css'] : '';
 $rows=[];
 $rows = get_field('landing_images',$postID);  
                  if(count($rows)>0):
                  	foreach( $rows as $row ):
                  		$imageID = $row['id']; 
                  		$image = $row['url']; 

                  		$thumb= wp_get_attachment_image($imageID,'square-thumb');
                  		?>

                  		 
	  		 <div class="item image-gallery"  >
					 	<a href="<?php print  $image; ?>"   class="image-thumb " alt="">
                        	 <?php print  $thumb; ?> 
                        	 
                        </a>
			 </div>
					  
 <?php endforeach;
 endif; ?>