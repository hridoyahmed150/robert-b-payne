<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-lg-8 list-posts">
					<main id="main" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content-category', 'none' ); ?>
						<?php endwhile; ?>
					</main>
					<!-- pagintation -->
					<div id="pagination" class="clearfix">
						<?php if(function_exists('tw_pagination')) tw_pagination();?>
					</div>
					<!-- pagination -->
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