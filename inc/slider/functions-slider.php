<?php
/**
 * Loop do Slider.
 *
 * @since 1.0.0
 */
function loop_slider( $args = array() ) {

	// If $args empty, set default values for Query
	if ( empty( $args ) ) {
		$args = array(
	    	'post_type' => 'slider',
	    	'order' => 'ASC',
	    	'orderby' => 'menu_order',
	    	'posts_per_page' => 5
		);
	} else {
		// Force the CPT for Query
		$args[ "post_type" ] = 'slider';
	}

	$sliders = new WP_Query( $args );
	if ( $sliders->have_posts() ) :	?>
		
		<section class="video-slider">

	        <ul class="slides">
	            <?php while ( $sliders->have_posts() ) : $sliders->the_post(); ?>
		            <li class="each">
                    	<?php echo get_post_meta( get_the_ID(), 'embed_code', true );?>
		            </li><!-- each -->
	            <?php endwhile; ?>
	            <?php wp_reset_postdata(); ?>
	        </ul><!-- .slides -->

	    </section><!-- .video-slider -->
    <?php
    	endif;
}
