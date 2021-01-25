<?php get_header(); ?>
	<div class="container">
		<div id="primary">
			<main id="main" role="main">
				<article class="page">
					<h1 class="title-page">404</h1>
					<div class="content-page">
						<p>
							<?php _e('We are sorry! The page you are looking for was not found, it may be because the address is incorrect or the page no longer exists.','languagetheme'); ?>
						</p>
						<p>
							<?php _e('Return to the home by clicking','languagetheme'); ?> <a href="<?php echo site_url(); ?>"><?php _e('here','languagetheme'); ?></a>
						</p>
					</div>
				</article>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
