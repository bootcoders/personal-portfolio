<?php 


function cmb2_meta_box(){
	$hero_section = new_cmb2_box(array(
		'id'		=> 'hero_post',
		'title'		=> __('More Option Box', 'haurn'),
		'object_types'=> array('hero_section'),
	));

	$hero_section->add_field(array(
		'id'		=> 'hero_sub_title',
		'name'		=> 'Sub Title',
		'type'		=> 'text',
		'desc'		=> 'Add Sub Title'
	));
	$hero_section->add_field(array(
		'id'		=> 'btn_url',
		'name'		=> 'Button URL',
		'type'		=> 'text_url',
		'desc'		=> 'Button UTL'
	));
	$hero_section->add_field(array(
		'id'		=> 'btn_text',
		'name'		=> 'Button Text',
		'type'		=> 'text',
		'desc'		=> 'Button Text'
	));


	// About Section
	$about_me = new_cmb2_box(array(
		'id'		=> 'about-me',
		'title'		=> __('More Option Box', 'harun'),
		'object_types' => array('about_me'),
	));

	$about_me->add_field(array(
		'id'		=> 'about_sub_title',
		'name'		=> 'Sub Title',
		'type'		=> 'text',
		'desc'		=> 'add sub title'
	));
	$about_me->add_field(array(
		'id'		=> 'about_btn',
		'name'		=> 'Button',
		'type'		=> 'text',
		'desc'		=> 'Add Button text'
	));
	$about_me->add_field(array(
		'id'		=> 'about_btn_url',
		'name'		=> 'Button URL',
		'type'		=> 'text_url',
		'desc'		=> 'Add Button URL'
	));

	// Service Sections
	$service_section = new_cmb2_box(array(
		'id'			=> 'service_section',
		'title'			=> 'More Options Box',
		'object_types'	=> array('my_service'),

	));
	$service_section -> add_field(array(
		'id'			=> 'service_icon',
		'name'			=> 'Service Icon',
		'type'			=> 'text',
		'desc'			=> 'add the class name'
	));

	// portfolipo section
	$portfolip_section = new_cmb2_box(array(
		'id'		=> 'portfolip_section',
		'title'		=> 'More Options Box',
		'object_types'	=> array('portfolio')
	));

	$portfolip_section -> add_field(array(
		'id'		=> 'port_icon',
		'name'		=> 'Hover Iocn',
		'type'		=> 'file',
		'desc'		=> 'Add Icon Class'

	));

	$testimonial_sec = new_cmb2_box(array(

		'id'		=> 'testimonial_sec',
		'title'		=> 'More Option Box',
		'object_types' => array('testimonial')
	));

	$testimonial_sec-> add_field(array(
		'id'			=> 'test_degination',
		'name'			=> 'Degination',
		'type'			=> 'text',
		'desc'			=> 'Add Your Dagination'

	));
}


add_action('cmb2_admin_init', 'cmb2_meta_box');
	


