
<header class="header "  id="header">
 
	<div class="container-fluid max-width bg-white">
 
		   <div class="row align-items-center">
            <div class="col-12 col-md-1">
                  
                    <a class="navbar-brand  " href="<?=get_site_url(); ?>">
                    		<img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" class="img-fluid " alt="logo" height="80" width="120">
                    </a>
             
            </div>
               
        <div class="col-12 col-md-11">
			<nav class="navbar navbar-expand-lg  ">
			   		 <?php
				        wp_nav_menu( array(
				            'theme_location'    => 'primary',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				            'container_id'      => 'bs-main-nav',
				            'menu_class'        => 'nav navbar-nav  main-nav justify-content-start ',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker(),
				        ) );
				        ?>
				        <button class="navbar-toggler " type="button"  data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				 </nav>	
		</div>
		 
	</div>
</div>

</header>




<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
  <div class="offcanvas-header">
     
    <button type="button" class="btn-close text-start" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body sidebar-block sidebar-content">
    	<div class="d-block sidebar-menu">
  				 <?php  
					wp_nav_menu( array(
					    'theme_location' => 'sidebar-menu',
					    'menu_id' => 'sidebar-menu',
					     'menu_class'        => ' ',
					     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						 'walker'            => new WP_Bootstrap_Navwalker(),

					) );

					  ?>
    	</div>
     
    	<div class="d-block sidebar-block sidebar-social-links">
    		 
			  
    	</div>
    	<aside class="d-block block my-3">
          
        </aside>
        <aside class="d-block block my-3">
          
        </aside>
        <aside class="d-block block my-3">
          
        </aside>

  </div>
</div>

