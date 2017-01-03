<?php 

/**
 * Template Name: Home
 *
 * @package Gaia
 */

get_header(); ?>

<div class="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2 class="frase">
			<span>Núcleo de atividades em Psiquiatria e Práticas Artísticas</span>
		</h2><!-- frase -->

		<div class="col-sm-6">
			Vídeo
		</div>
		<div class="col-sm-6">
			Imagens
		</div>

		<div class="resumo">
			<div class="section-inner thin top-title">
				<div class="post-header">
					<h2 class="post-title"><?php the_title(); ?></h2>
				</div> <!-- /post-header section -->
			</div>
			<?php the_excerpt(); ?>
		</div><!-- resumo -->

		<div class="clear"></div>

		<div class="row">
			<div class="col-sm-6">
				<div class="section-inner thin top-title">
					<div class="post-header">
						<h3 class="post-title"><?php _e( 'Blog', 'hoffman' ); ?></h3>
					</div> <!-- /post-header section -->
				</div>
				<div class="loop">

					<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 2,
							'post_status' => 'publish'
						);
						$blog = new WP_Query( $args );
						if ( $blog->have_posts() ) : ?>
							<?php while( $blog->have_posts() ) : $blog->the_post(); ?>
							<?php $categorias = get_the_category();	?>

								<div class="each col-sm-12">
									<div class="col-sm-12 nopadding">
										<a href="<?php the_permalink(); ?>">
											<h3><?php the_title(); ?></h3>
										</a>
										<div class="post-meta top">
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time(get_option('date_format')); ?></a>
											<span class="sep">/</span>
											<a href="<?php echo esc_url( get_category_link( $categorias[0]->term_id ) ); ?>" title="<?php echo esc_html( $categorias[0]->name ); ?>"><?php echo esc_html( $categorias[0]->name ); ?></a>
											
											<?php 
												if ( comments_open() ) {
													echo '<span class="sep">/</span> '; 
													comments_popup_link( __( '0 Comments', 'hoffman' ), __( '1 Comment', 'hoffman' ), __( '% Comments', 'hoffman' ) );
												}
											?> 
											
											<?php edit_post_link( __( 'Edit', 'hoffman' ), '<span class="sep">/</span> ', ''); ?>
										</div><!-- /post-meta top -->
									</div>
									<div class="corpo">
										<div class="thumb nopadding">
											<a href="<?php the_permalink(); ?>">
												<?php if ( has_post_thumbnail() ): ?>
													<?php the_post_thumbnail( 'thumbnail' ); ?>
												<?php else: ?>
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumbnail-default.jpg" alt="<?php the_title(); ?>">
												<?php endif ?>
											</a>
										</div><!-- thumb -->
										<a href="<?php the_permalink(); ?>">
											<div class="degrade"></div><!-- degrade -->
										</a>
										<?php the_excerpt(); ?>
										<a class="mais" href="<?php the_permalink(); ?>">+</a>
									</div> <!-- /corpo -->
								</div><!-- each -->
								
							<?php endwhile; ?>
						<?php endif; ?>

				</div><!-- loop -->
			</div>
			<div class="col-sm-6 social">
				<div class="section-inner thin top-title">
					<div class="post-header">
						<h3 class="post-title"><?php _e( 'Redes Sociais', 'hoffman' ); ?></h3>
					</div> <!-- /post-header section -->
				</div>
				<div class="col-sm-6 nopadding">
					<?php dynamic_sidebar( 'home-rede-sociais' ); ?>
				</div>
				<div class="col-sm-6 nopadding">
				  	<?php instagram_feed();	?>
				</div>
			</div><!-- social -->
		</div><!-- row -->

	<?php endwhile; else: ?>
	
		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "hoffman"); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
	
</div> <!-- /content -->
								
<?php get_footer(); ?>
