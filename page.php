<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
					<main id="main" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
							<article id="page-<?php the_ID(); ?>" class="page">
								<div class="content-page">
									<?php the_content(); ?>
								</div>
							</article>
						<?php endwhile; ?>
					</main>
				</div>
				<div id="sidebar" class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	<?php else : ?>
		<?php get_template_part( '404', get_post_format() ); ?>
	<?php endif; ?>
<?php get_footer(); ?>
