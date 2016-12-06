<?php 

/**
 * Template Name: Home
 *
 * @package Gaia
 */

get_header(); ?>

<div class="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2 class="frase">Núcleo de atividades em Psiquiatria e Práticas Artísticas</h2>

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
					
					<div class="each">
						<div class="thumb">
							
						</div><!-- thumb -->
						<div class="post">
							<h3>Título da Postagem</h3>
							<span class="category">Categoria</span>
							<?php the_excerpt(); ?>
							<a href="">+</a>
						</div>
					</div><!-- each -->

				</div><!-- loop -->
			</div>
			<div class="col-sm-6">
				<div class="section-inner thin top-title">
					<div class="post-header">
						<h3 class="post-title"><?php _e( 'Redes Sociais', 'hoffman' ); ?></h3>
					</div> <!-- /post-header section -->
				</div>
			</div>
		</div><!-- row -->

	<?php endwhile; else: ?>
	
		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "hoffman"); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
	
</div> <!-- /content -->
								
<?php get_footer(); ?>
