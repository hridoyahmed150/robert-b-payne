<?php get_header(); ?>
	<div class="container">
		<div id="primary">
			<main id="main" role="main">
				<article class="page">
					<div class="inner">
						<h1 class="title-page"><?php _e('Search results','languagetheme'); ?></h1>
						<div class="content-page">
							<p><?php _e('No results found, you can try again.','languagetheme'); ?></p>
							<div class="buscador">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</article>
			</main>
		</div>
	</div>
<?php get_footer(); ?>
