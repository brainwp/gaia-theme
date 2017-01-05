<?php
/*
* ARQUIVO PRINCIPAL DO MÓDULO DE SLIDER.
* BASEADO NO FLEXSLIDER (http://flexslider.woothemes.com/)
*/

// REQUIRE FILES
require_once('functions-slider.php'); // FUNCTIONS
require_once('cpt-slider.php'); // CUSTOM POST TYPE
require_once('acf-slider.php'); // CUSTOM FIELDS

// ENQUEUE SCRIPT
function flexslider_scripts() {
    if( is_front_page() ) {
    	//wp_enqueue_style( 'style-slider', get_stylesheet_directory_uri() . '/inc/slider/assets/css/slider-style.css' );
    	//wp_register_script( 'flexslider-jquery', get_stylesheet_directory_uri() . '/inc/slider/jquery.flexslider.js' );
    	
		//wp_enqueue_script( 'flexslider-jquery' );
		wp_enqueue_script( 'unslider', get_stylesheet_directory_uri() . '/inc/slider/unslider/js/unslider-min.js' );
		wp_enqueue_style( 'unslider', get_stylesheet_directory_uri() . '/inc/slider/unslider/css/unslider.css' );
		wp_enqueue_style( 'unslider-dots', get_stylesheet_directory_uri() . '/inc/slider/unslider/css/unslider-dots.css' );
		wp_enqueue_script( 'custom-unslider', get_stylesheet_directory_uri() . '/inc/slider/assets/js/custom-unslider.js' );
		
	}
}
add_action( 'wp_enqueue_scripts', 'flexslider_scripts' );
