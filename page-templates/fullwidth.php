<?php
/*
 * 	Template Name: Fullwidth
*/
get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="container">
				<div id="primary">
					<main id="main" role="main">
						<article id="page-<?php the_ID(); ?>" class="page">
							<header>
								<h1 class="title-page">
									<?php the_title(); ?>
								</h1>
							</header>
							<div class="content-page">
								<?php the_content(); ?>
							</div>
						</article>
					</main>
				</div>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( '404', get_post_format() ); ?>
	<?php endif; ?>
<?php get_footer(); ?>
