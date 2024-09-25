<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
 

/*Bootstrap menu*/
require_once('inc/class-wp-bootstrap-navwalker.php');
require_once('inc/bs5navwalker.php');


/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails');


/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'naked' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function momlancers_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Sidebar...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'momlancers_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function momlancers_scripts()  { 

	// get the theme directory style.css and link to it in the header
	 
    wp_enqueue_style('bootstrap.css', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('aos.css', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css');
	wp_enqueue_style('owl.carousel.css', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel2/assets/owl.carousel.css');
	wp_enqueue_style('magnific-popup.css', get_stylesheet_directory_uri() . '/assets/vendor/magnific/magnific-popup.css');
 
	
	// add theme scripts
	 wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery-3.7.1.min.js');
    
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
	
	wp_enqueue_script( 'holder', get_template_directory_uri() . '/assets/vendor/holder/holder.min.js');
	 wp_enqueue_script( 'aos.js', get_template_directory_uri() . '/assets/vendor/aos/aos.js');
	  wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri() . '/assets/vendor/magnific/jquery.magnific-popup.min.js');
      wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/vendor/owlcarousel2/owl.carousel.min.js');

         	  wp_enqueue_script( 'jquery.vide.js', get_template_directory_uri() . '/assets/vendor/jquery.vide.js');
        wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js');
  
}
add_action( 'wp_enqueue_scripts', 'momlancers_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header


add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
 
 
 

 

 



// Register WordPress nav menu 

 
 

 
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'momlancers' ),
            'subnav-menu' => __( 'Sub Nav  Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'sidebar-menu' => __( 'Sidebar Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

add_filter('use_block_editor_for_post', '__return_false', 10);

 
 
 


function prevent_undeletable_page_trash($id) {
if ($id == get_option('undeletable_page_id')) {
 
	wp_update_post(array('ID' => $id, 'post_status' => 'publish'));
}
}

function prevent_undeletable_page_deletion($id) {
	if ($id == get_option('undeletable_page_id')) {
		// Recrea la página para evitar su eliminación
		$page_data = array(
			'ID' => $id,
			'post_status' => 'publish',
		);
		wp_insert_post($page_data);
	}	
}

add_action('trashed_post', 'prevent_undeletable_page_trash');
add_action('deleted_post', 'prevent_undeletable_page_deletion');


function momlancers_display_search_form() {
    $search_form = '<form method="get" class="d-flex" role="search" id="search-form-alt" action="'. esc_url(home_url('/')) .'">
        <input type="text" name="s" id="s" placeholder="Buscar producto..">
        <button type="submit" name=""><i class="fa fa-search"></i></button>;
    </form>';
    return $search_form;
}
add_shortcode('display_search_form', 'momlancers_display_search_form');


 function custom_excerpt($text, $raw_excerpt) {
    if ('' == $text) {
        $text = get_the_content('');
        $text = strip_shortcodes($text);
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);
        $text = wp_trim_words($text, 20, '...'); // Limitar a 20 palabras
    }
    return $text;
}
add_filter('wp_trim_excerpt', 'custom_excerpt', 10, 2);
 