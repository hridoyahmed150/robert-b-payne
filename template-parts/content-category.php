<article class="post">
	<div class="inner">
		<header>
			<div class="row">
				<div class="col-md-2 date-wrap">
					<div class="date">
						<span class="day"><?php the_time('d');?></span>
						<span class="month"><?php the_time('M');?></span>
					</div>
				</div>
				<div class="col-md-10">
					<h3 class="title-post">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
					<div class="categories-posts">
						Categories:  <?php echo get_the_category_list(); ?>
					</div>
				</div>
			</div>
		</header>
		<div class="content-post">
			<?php the_excerpt(); ?>
		</div>
		<div class="read-more">
			<a href="<?php the_permalink(); ?>">
				<?php _e('Read full story...','languagetheme'); ?>
			</a>
		</div>
	</div>
</article>
