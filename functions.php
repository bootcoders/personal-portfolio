<?php 


function persoanl_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('menus');
	add_theme_support('post-thumbnails');


	register_nav_menus(array(
		'main_menu' => 'Main Menu',
	));


	register_post_type('hero-section', array(
		'public' => true,
		'menu_icon' => 'dashicons-editor-expand',
		'menu_position' => 10,
		'description' => 'This is Hero Section Post',
		'supports'  => array('title', 'editor', 'thumbnail'),
		'labels' => array(
			'name' => 'Hero Section',
			'add_new' => 'Add New Section',
			'add_new_item' => 'Add New Hero Section'
		),
	));
}


add_action('after_setup_theme', 'persoanl_theme_setup');

function harun_enqueue_style(){

	// WP Style CSS 
	wp_enqueue_style('gfonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700');
	wp_enqueue_style('linearicons', get_template_directory_uri().'/css/linearicons.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
	wp_enqueue_style('jquery-ui', get_template_directory_uri().'/css/jquery-ui.css');
	wp_enqueue_style('nice-select', get_template_directory_uri().'/css/nice-select.css');
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.min.css');
	wp_enqueue_style('owl.carousel', get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
	wp_enqueue_style('theme', get_stylesheet_uri());


	// WP JavaScript File

	wp_enqueue_script('jquery-theme', get_template_directory_uri().'/js/vendor/jquery-2.2.4.min.js', array(), null, true);
	wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/vendor/bootstrap.min.js', array('jquery'), null, true);
	
	wp_enqueue_script('easing', get_template_directory_uri().'/js/easing.min.js', array('jquery'), null, true);

	wp_enqueue_script('hoverIntents', get_template_directory_uri().'/js/hoverIntent.js', array('jquery'), null, true);

	wp_enqueue_script('superfish', get_template_directory_uri().'/js/superfish.min.js', array('jquery'), null, true);
	wp_enqueue_script('ajaxchimp', get_template_directory_uri().'/js/jquery.ajaxchimp.min.js', array('jquery'), null, true);
	wp_enqueue_script('magnific', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
	wp_enqueue_script('tabs', get_template_directory_uri().'/js/jquery.tabs.min.js', array('jquery'), null, true);
	wp_enqueue_script('nice-select', get_template_directory_uri().'/js/jquery.nice-select.min.js', array('jquery'), null, true);
	wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js', array('jquery'), null, true);
	wp_enqueue_script('waypoints', get_template_directory_uri().'/js/waypoints.min.js', array('jquery'), null, true);
	wp_enqueue_script('counterup', get_template_directory_uri().'/js/jquery.counterup.min.js', array('jquery'), null, true);
	wp_enqueue_script('simple-skillbar', get_template_directory_uri().'/js/simple-skillbar.js', array('jquery'), null, true);
	wp_enqueue_script('carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_script('mail-script', get_template_directory_uri().'/js/mail-script.js', array('jquery'), null, true);
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), null, true);




}
add_action('wp_enqueue_scripts', 'harun_enqueue_style');












