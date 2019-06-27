<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="<?php bloginfo('charset'); ?>">

	<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>	
  <header id="header">
    <div class="container main-menu">
    	<div class="row align-items-center justify-content-between d-flex">
	      <div id="logo">
	        <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" title="" /></a>
	      </div>
	      <nav id="nav-menu-container">
	        

	        <?php wp_nav_menu(array(
	        	'theme_location' => 'main_menu',
	        	'menu_class'	 => 'nav-menu'
	        )); ?>
	      </nav><!-- #nav-menu-container -->		    		
    	</div>
    </div>
  </header><!-- #header -->