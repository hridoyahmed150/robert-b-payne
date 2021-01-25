<?php
$auth = get_the_ID();
$userID = $auth->post_author;
get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-lg-8">
					<main id="main" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
							<article class="post">
								<header>
									<div class="row">
										<div class="col-md-2 date-wrap">
											<div class="date">
												<span class="day"><?php the_time('d');?></span>
												<span class="month"><?php the_time('M');?></span>
											</div>
										</div>
										<div class="col-md-10">
											<h1 class="title-post"><?php the_title(); ?></h1>
											<div class="categories-posts">
												Categories:  <?php echo get_the_category_list(); ?>
											</div>
										</div>
									</div>
								</header>
								<div class="content-post">
									<?php the_content();?>
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
