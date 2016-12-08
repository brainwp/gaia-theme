<?php

/**
 * Load site scripts and styles.
 */
function gaia_enqueue_scripts() {
	$template_url = get_stylesheet_directory_uri();
	if ( is_home() || is_front_page() || is_page( 'home' ) ) {
		wp_enqueue_style( 'grid12', $template_url . '/assets/css/grid12.css', array(), null, 'all' );
	}
}
add_action( 'wp_enqueue_scripts', 'gaia_enqueue_scripts', 1 );

//add footer widget areas
add_action( 'widgets_init', 'gaia_widget_areas_reg' ); 

function gaia_widget_areas_reg() {
	register_sidebar(array(
	  'name' => __( 'Home Redes Sociais', 'gaia' ),
	  'id' => 'home-rede-sociais',
	  'description' => __( 'Widgets nessa area aparecerao na Home.', 'gaia' ),
	  'before_title' => '<h3 class="widget-title">',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
	  'after_widget' => '</div><div class="clear"></div></div>'
	));
	register_sidebar(array(
	  'name' => __( 'Footer D', 'gaia' ),
	  'id' => 'footer-d',
	  'description' => __( 'Widgets nessa area aparecerao na coluna direita do Rodape.', 'gaia' ),
	  'before_title' => '<h3 class="widget-title">',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
	  'after_widget' => '</div><div class="clear"></div></div>'
	));
}
//add custom header support
$args = array(
	'width'         => 1202,
	'height'        => 280,
	'default-image' => get_stylesheet_directory_uri() . '/images/bg-header-bege.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

/*
 * Funcao para imprimir um resumo a partir do excerpt
 */
function gaia_excerpt( $limit ) {
	$excerpt = explode( ' ', get_the_excerpt(), $limit );
	if ( count( $excerpt )>= $limit ) {
		array_pop( $excerpt );
		$excerpt = implode( " ", $excerpt ) . '[...]' ;
	} else {
		$excerpt = implode( " ", $excerpt );
	}	
	$excerpt = preg_replace( '`[[^]]*]`', '', $excerpt );
	return '<p>' . $excerpt . '</p>';
}