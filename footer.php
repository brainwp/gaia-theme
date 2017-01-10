<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b') || is_active_sidebar( 'footer-c') || is_active_sidebar( 'footer-d' ) ) : ?>

	<div class="footer">
			
		<div class="section-inner">

			<?php if ( is_front_page() ): ?>

				<?php if ( is_active_sidebar( 'footer-newsletter' ) ) : ?>
					
					<div class="widgets col-sm-12 nopadding">
						
						<?php dynamic_sidebar( 'footer-newsletter' ); ?>
						
					</div>	

				<?php endif; ?>
			
			<?php else: ?>
			
				<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
				
					<div class="column column-1 one-half">
					
						<div class="widgets">
				
							<?php dynamic_sidebar( 'footer-a' ); ?>
												
						</div>
						
					</div>
					
				<?php endif; ?> <!-- /footer-a -->
					
				<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
				
					<div class="column column-2 one-half">
					
						<div class="widgets">
				
							<?php dynamic_sidebar( 'footer-b' ); ?>
												
						</div> <!-- /widgets -->
						
					</div>
					
				<?php endif; ?> <!-- /footer-b -->

			<?php endif ?>
								
			<div class="clear"></div>
		
		</div> <!-- /footer-inner -->
	
	</div> <!-- /footer -->

<?php endif; ?>

<div class="navigation bg-blue in-footer">
		
	<div class="section-inner">
		<ul class="main-menu">
			
			<?php if ( has_nav_menu( 'primary' ) ) {
																
				wp_nav_menu( array( 
				
					'container' => '', 
					'items_wrap' => '%3$s',
					'theme_location' => 'primary'
												
				) ); } else {
			
				wp_list_pages( array(
				
					'container' => '',
					'title_li' => ''
				
				));
				
			} ?>
			
			<div class="clear"></div>
				
		 </ul>
				
	</div> <!-- /section-inner -->
		
</div> <!-- /navigation -->

<div class="credits">

	<div class="section-inner">
	
		<?php get_template_part( 'menu', 'social' ); ?>
	
		
	<div class="fleft-footer-widgets">
	

			<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
			
				<div class="column one-half">
			
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-c' ); ?>
											
					</div> <!-- /widgets -->
					
				</div>
				
			<?php endif; ?> <!-- /footer-c -->

			<?php if ( is_active_sidebar( 'footer-d' ) ) : ?>
			
				<div class="column one-half">
				
					<div class="widgets">
			
						<?php dynamic_sidebar( 'footer-d' ); ?>
											
					</div> <!-- /widgets -->
					
				</div>
				
			<?php endif; ?> <!-- /footer-d -->
		</div><!-- .fleft -->

		<div class="fright">

			<p class="developed-by">Site desenvolvido com WordPress pela
				<a class ="logo-brasa" href="http://brasa.art.br">brasa.art.br</a>
			</p>

		</div> <!-- .fright -->

	<div class="clear"></div>
		
	</div> <!-- section-inner -->

</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>
