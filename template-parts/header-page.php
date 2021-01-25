<?php if (!is_blog()): ?>
	<?php if ( has_post_thumbnail()) { ?>
		<div class="header-page" style="background-image: url(<?php the_post_thumbnail_url(); ?>);" data-stellar-background-ratio="0.7">
	<?php } else { ?>
		<div class="header-page" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/img-default.jpg);" data-stellar-background-ratio="0.7">
	<?php } ?>
		<div class="inner">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-8">
						<div class="wow fadeInLeft animated" data-wow-delay="0.2s">
							<p class="h1"><?php the_title(); ?></p>
							<?php echo do_shortcode('[print_breadcrumbs]'); ?>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 btn-action">
						<a class="btn btn btn-red wow bounceIn animated" data-wow-delay="0.2s" href="<?php echo site_url(); ?>/contact-us/request-service/" target="_self">
							<span>REQUEST SERVICE</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php else : ?>
	<div class="header-page" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/img-default-blog.jpg);">
		<div class="inner">
			<div class="container">
				<p class="h1">Blog</p>
				<?php echo do_shortcode('[print_breadcrumbs]'); ?>
			</div>
		</div>
	</div>
<?php endif ?>
