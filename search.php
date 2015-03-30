<?php get_header(); ?>

	<div class="content">

		<?php if ( have_posts() ) : ?>
		
			<div class="page-title section small-padding">
			
				<h4 class="section-inner">
			
					<?php _e( 'Search results:', 'hoffman'); echo ' "' . get_search_query() . '"'; ?>
				
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					if ( "1" < $wp_query->max_num_pages ) : ?>
					
						<span><?php printf( __('(page %s of %s)', 'hoffman'), $paged, $wp_query->max_num_pages ); ?></span>
					
					<?php endif; ?>
				
				</h4>
				
			</div>
					
			<div <?php post_class('post single'); ?>>
				
				<?php while (have_posts()) : the_post(); ?>
		    	

			<div class="result-inner section-inner thin">
			   				        			        		                
				<div class="post-content">
	
					<div class="archive-container">
											            
			            <ul class="posts-archive-list">
				                <li>
				                	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				                		<?php the_title();?> 
				                	</a>
				                	<span><?php the_time(get_option('date_format')); ?></span>
				                </li>
			            </ul>

				</div> <!-- /archive-container -->

			</div> <!-- /post-content -->

		</div><!-- /post-inner -->
		    			        		            
		        <?php endwhile; ?>
							
			</div> <!-- /posts -->
			
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			
				<div class="archive-nav">
				
					<?php echo get_next_posts_link( '&laquo; ' . __('Older posts', 'hoffman')); ?>
						
					<?php echo get_previous_posts_link( __('Newer posts', 'hoffman') . ' &raquo;'); ?>
					
					<div class="clear"></div>
					
				</div> <!-- /post-nav archive-nav -->
								
			<?php endif; ?>
	
		<?php else : ?>
						
			<div class="page-title section small-padding">
		
				<h4>
			
					<?php echo _e( 'Search results:', 'hoffman') . ' "' . get_search_query() . '"'; ?>
				
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					if ( "1" < $wp_query->max_num_pages ) : ?>
					
						<span><?php printf( __('(page %s of %s)', 'hoffman'), $paged, $wp_query->max_num_pages ); ?></span>
					
					<?php endif; ?>
					
				</h4>
				
			</div>
						
			<div class="post section medium-padding">
			
				<div class="post-content section-inner thin">
				
					<p><?php _e('No results. Try again, would you kindly?', 'hoffman'); ?></p>
					
					<?php get_search_form(); ?>
				
				</div> <!-- /post-content -->
				
				<div class="clear"></div>
			
			</div> <!-- /post -->
		
		<?php endif; ?>
		
	</div> <!-- /content section-inner -->
		
<?php get_footer(); ?>
