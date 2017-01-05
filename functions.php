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
	  'name' => __( 'Footer Newsletter', 'gaia' ),
	  'id' => 'footer-newsletter',
	  'description' => __( 'Widgets nessa area aparecerao apenas na home, no Rodape.', 'gaia' ),
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

function gaia_sdk_facebook() {
	if ( is_home() || is_front_page() ) { ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<?php }
}
add_action( 'wp_head', 'gaia_sdk_facebook' );

// Add customizer
require_once( get_stylesheet_directory() . '/inc/customizer.php' );

//Add Instagram Feed
require_once( get_stylesheet_directory() . '/inc/instagram.php' );

//Add Module Slider
require_once( get_stylesheet_directory() . '/inc/slider/mod-slider.php' );