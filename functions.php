<?php

// Enqueuing Scripts and Styles 


/* attach main style sheet */
function add_malaika_theme_scripts()
{
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'add_malaika_theme_scripts');

// register navagation menus
function add_malaika_nav_menus(){
	register_nav_menus(array(
		'header-menu' => 'Header Menu',
		'footer-menu' => 'Footer Menu'
		)
	);
}
add_action('init', 'add_malaika_nav_menus' );

//register sidebars  
// registering sidebars individually is recomended 
function register_malaika_sidebars(){

	register_sidebar(array(
		'name' => __('Primary'),
		'id'  => __('Sidebar_1'),
		'description'   => __( 'A short description of the sidebar_1.' ),

		));
	register_sidebar(array(
		'name' => __('Sidebar 2'),
		'id'   =>__('Sidebar_2'),
		'description'   => __( 'A short description of the Sidebar_2.' ),

		));
}
add_action('widgets_init', 'register_malaika_sidebars');

//HEADER IMAGE also known as Custom Headers
// source https://codex.wordpress.org/Custom_Headers
// Set a custom header image

function malaika_custom_header_setup(){
	$args = array(
		'width'         => 1050,
		'height'        => 100,
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'uploads'       =>true,
		'header-text'   => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action('after_setup_theme','malaika_custom_header_setup' );



