<?php
//add footer widget areas
add_action( 'widgets_init', 'gaia_widget_areas_reg' ); 

function gaia_widget_areas_reg() {
	register_sidebar(array(
	  'name' => __( 'Footer D', 'gaia' ),
	  'id' => 'footer-d',
	  'description' => __( 'Widgets in this area will be shown in the right column in the footer.', 'hoffman' ),
	  'before_title' => '<h3 class="widget-title">',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
	  'after_widget' => '</div><div class="clear"></div></div>'
	));	
}

?>