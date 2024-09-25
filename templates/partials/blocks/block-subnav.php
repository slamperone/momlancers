<div class="block submenu">
	 
  <?php 
  /* 
wp_nav_menu( array(
    'theme_location' => 'subnav-menu',
    'menu_id' => 'subnav-menu',
     'menu_class'        => ' ',
     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	 'walker'            => new WP_Bootstrap_Navwalker(),

) );
*/

				        ?>
  <?php
            wp_nav_menu(array(
                'theme_location' => 'subnav-menu',
                'container' => false,
                  'menu_id' => 'subnav-menu',
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="nav justify-content-end  %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
</div>