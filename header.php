<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>
<script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css"   href="<?=get_template_directory_uri() ; ?>/assets/css/styles.css" /> -->

<?php print   get_template_part('templates/partials/_head') ?>
 

<style>
	/* Preloader */
body{
  background:white;
}


#preloader {
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background-color:#EEE; /* change if the mask should have another color then white */
  z-index:9999; /* makes sure it stays on top */
}

#status {
  width:200px;
  height:200px;
  position:absolute;
  left:50%; /* centers the loading animation horizontally one the screen */
  top:50%; /* centers the loading animation vertically one the screen */
   
  background-repeat:no-repeat;
  background-position:center;
  margin:-100px 0 0 -100px; /* is width and height divided by two */
   width: 56px;
   height: 56px;
   border-radius: 50%;
   border: 9px solid;
   border-color: var(--color1);
   border-right-color: var(--color2);
   animation: spinner-d3wgkg 1s infinite linear;
}

/* Efecto de fade-out */
/* Preloader fade-out animation */

.fade-out {
  opacity: 0;
 background-color:#EEE; /* change if the mask should have another color then white */
 
  transition: opacity 0.5s ease;
}

/* Body fade-in animation */
.fade-in {
  opacity: 0;
 background-color:#EEE; /* change if the mask should have another color then white */
  transition: opacity 0.5s ease;
}

.fade-in-visible {
background-color:#FFF; /* change if the mask should have another color then white */
  opacity: 1;
}


 

@keyframes spinner-d3wgkg {
   to {
      transform: rotate(1turn);
   }
}
</style>
</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>
<!--
 <div id="preloader">
  <div id="status">&nbsp;</div>
</div>
-->
  <?php   print get_template_part('templates/partials/_header'); ?>

<main class="main-fluid"><!-- start the page containter -->
