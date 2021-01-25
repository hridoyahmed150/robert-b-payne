<?php
/*
* 	Template Name: Contacto
*/
get_header(); ?>
<?php if ( have_posts() ) : ?>
	<div id="mapa">
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>
	<div id="primary">
		<div class="container">
			<main id="main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="page-<?php the_ID(); ?>" class="page">
						<h1 class="title-page">
							<?php the_title(); ?>
						</h1>
						<div class="row row-info">
							<div class="col-lg-4 col-info">
								<div class="content-page">
									<?php the_content(); ?>
								</div>
							</div>
							<div class="col-lg-8 col-info">
								<?php echo do_shortcode('[contact-form-7 id="16954" title="Contacto"]'); ?>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
			</main>
		</div>
	</div>
<?php else : ?>
	<?php get_template_part( '404', get_post_format() ); ?>
<?php endif; ?>
<?php get_footer(); ?>
