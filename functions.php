<?php
/**
 * Theme: Inion
 * Theme Functions, includes, etc.
 */

if ( ! function_exists( 'inion_main' ) ) :
function inion_main() {

	// Wsparcie dla Thumbnails i standardowe rozmiary
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 640, 360, array( 'left', 'top' ) ); // crop left top
	
	// Rejestracja Menu
	register_nav_menus( array(
		'primary' 	=> __( 'Header Menu', 'Inion' ),
		'footer' 	=> __( 'Footer Menu', 'Inion' ),
	) );


} // end function
add_action( 'after_setup_theme', 'inion_main' );
endif; 


function inion_widgets_init() {
 
    // Widget 1, ulokowany w Footer.
    register_sidebar( array(
        'name' => __( 'Footer widget 1', 'inion' ),
        'id' => 'footer-widget-1',
        'description' => __( 'Footer widget 1', 'inion' ),
    ) );
}

//rejestracja widgetu
add_action( 'widgets_init', 'inion_widgets_init' );

//loading styles
function inion_stylesheet(){
	wp_enqueue_style( 'bootstrap_theme', get_stylesheet_directory_uri() . '/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'bootstrap_min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'aos', get_stylesheet_directory_uri() . '/css/aos.css' );
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style('main',get_stylesheet_uri());
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/responsive.css' );
	
}
//rejestracja styli
add_action('wp_enqueue_scripts', 'inion_stylesheet');

//loading scripts
function inion_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/scripts.js' );
}
//rejestracja skryptów
add_action('wp_enqueue_scripts', 'inion_scripts');
