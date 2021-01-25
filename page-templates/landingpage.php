<?php
/*
 * 	Template Name: Landingpage
*/
get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

<?php $c20_banner_prefix = 'cmb_landing_';

$banner_title = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_title', 1 );
$banner_subtitle = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_sub_title', 1 );
$banner_content = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_section', 1 );
$banner_image = get_post_meta( get_the_ID(), $c20_banner_prefix. 'img_banner_section', 1 );
$banner_btn_1_text = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_btn_1_text', 1 );
$banner_btn_1_url = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_btn_1_url', 1 );
// $banner_btn_2_text = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_btn_2_text', 1 );
// $banner_btn_2_phone = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_btn_2_phone', 1 );
// $banner_btn_3_text = get_post_meta( get_the_ID(), $c20_banner_prefix. 'banner_btn_3_text', 1 );
// $youtube_video_id = get_post_meta( get_the_ID(), $c20_banner_prefix. 'youtube_video_id', 1 );

?>

<?php if(is_page('oldbanner')) : ?>

<section id="banner" class="c20-banner" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-7 col-lg-7">
				<div class="wow-fadeInDown-animated">

					<div class="banner-header">
						<?php if($banner_title) : ?>
						<h2 class="banner-title"><?php echo $banner_title; ?></h2>
						<?php endif; ?>

						<?php if($banner_subtitle): ?>
							<h3 class="banner-subtitle"><?php echo $banner_subtitle; ?></h3>
						<?php endif; ?>
					</div>

					<div class="banner-content">
						<?php echo cmb_wysiwyg_output( 'cmb_home_banner_section', get_the_ID() ); ?>
					</div>

					<div class="c20-btn-group">

						<?php if($banner_btn_1_text && $banner_btn_1_url): ?>
							<a href="<?php echo esc_url( $banner_btn_1_url); ?>" class="c20-btn c20-btn__brand c20-btn__lg"><?php echo esc_html( $banner_btn_1_text ); ?></a>
						<?php endif; ?>

					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-5 col-lg-5">
				<div class="banner-image-wrap">
					<?php if($banner_image): ?>
						<img class="lozad" data-src="<?php echo $banner_image; ?>" alt="Robert B. Payne Home Banner">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>


<section id="banner" class="c20-banner c20-banner-test" style="background-image: url(/images/2020/11/rbp-banner-2020.png);">

	<div class="container">

		<div class="row">


			<div class="col-md-12 col-lg-7 col-xl-6">

				<div class="text-center wow-fadeInDown-animated">

					<div class="banner-img-wrap">
						<img src="/images/2019/09/unstoppable-logo.png" alt="">
					</div>

					<div class="banner-header">
						<h2 class="banner-title-1">UNSTOPPABLE DEALS</h2>
						<h2 class="banner-title-2">FROM YOUR UNSTOPPABLE TRANE <br> COMFORT SPECIALIST DEALER</h2>
					</div>

					<div class="banner-content">
						<h2 class="banner-title-3">O% APR FOR 60 MONTHS*</h2>
					</div>

					<div class="c20-btn-group">

						<?php if($banner_btn_1_text && $banner_btn_1_url): ?>
							<a href="<?php echo esc_url( $banner_btn_1_url); ?>" class="c20-btn c20-btn__brand c20-btn__lg"><?php echo esc_html( $banner_btn_1_text ); ?></a>
						<?php endif; ?>

						<?php if( $banner_btn_1_url): ?>
							<div class="banner-trane-logo">
								<a href="<?php echo esc_url( $banner_btn_1_url); ?>"><img src="/images/2020/11/trane-logo-2020.png" alt="Trane"></a>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-5 col-xl-6">
				<div class="banner-trane-wrap">
					<img src="/images/2020/11/trane-logo-2020.png" alt="Trane">
				</div>
			</div>

		</div>
	</div>
</section>




<main id="main" role="main">
	<article id="page-<?php the_ID(); ?>" class="page">

		<div id="services-home" class="section">
			<div class="container">
				<h2 class="wow fadeIn"><?php echo get_post_meta( get_the_ID(), 'cmb_home_title_service', true ); ?></h2>
				<div class="wrap-owl-services">
					<div class="carousel-services owl-carousel">
						<div class="item">
							<div class="wow fadeInUp" data-wow-delay="0.1s">
								<a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_one', true ); ?>">
									<?php echo cmb_wysiwyg_output( 'cmb_home_service_one', get_the_ID() ); ?>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="wow fadeInUp" data-wow-delay="0.2s">
								<a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_two', true ); ?>">
									<?php echo cmb_wysiwyg_output( 'cmb_home_service_two', get_the_ID() ); ?>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="wow fadeInUp" data-wow-delay="0.3s">
								<a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_three', true ); ?>">
									<?php echo cmb_wysiwyg_output( 'cmb_home_service_three', get_the_ID() ); ?>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="wow fadeInUp" data-wow-delay="0.4s">
								<a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_four', true ); ?>">
									<?php echo cmb_wysiwyg_output( 'cmb_home_service_four', get_the_ID() ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="coupons-home">
			<div class="wow fadeInUp">
				<div class="container">
					<div class="wrap-owl-coupons">
						<div class="carousel-coupons">
							<?php dynamic_sidebar( 'home-coupons' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="trane-home" class="section lozad" data-background-image="<?php echo get_post_meta( get_the_ID(), 'cmb_home_bg_trane', true ); ?>">
			<div class="container">
				<div class="wow fadeInUp">
					<?php echo cmb_wysiwyg_output( 'cmb_home_trane_section', get_the_ID() ); ?>
				</div>
			</div>
		</div>

		<div class="service-area">

			<div class="embed-responsive embed-responsive-21by9">

				<iframe class="embed-responsive-item lozad" data-src="https://www.google.com/maps/d/u/0/embed?mid=1RXqAxMlXXkjes9Oec5nkthV_Hb3HK8HD"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
			</div>

			<div class="floating-lists">
				<div class="floating-list">
					<h3 class="list-title">ZIP CODES WE SERVE</h3>
					<ul>
						<li>22712</li>
						<li>22427</li>
						<li>22433</li>
						<li>22446</li>
						<li>22448</li>
						<li>22026</li>
						<li>22714</li>
						<li>22401</li>
					</ul>
				</div>
				<div class="floating-list">
					<h3 class="list-title">Areas we serve</h3>
					<ul>
						<li><a title="Bealeton VA HVAC Company" href="/service-areas/bealeton-va/">Bealeton, VA</a></li>
						<li><a title="Port Royal VA HVAC Company" href="/service-areas/port-royal-va/">Port Royal, VA</a></li>
						<li><a title="Bowling Green VA HVAC Company" href="/service-areas/bowling-green-va/">Bowling Green, VA</a></li>
						<li><a title="Quantico VA HVAC Company" href="/service-areas/quantico-va/">Quantico, VA</a></li>
						<li><a title="Burr Hill VA HVAC Company" href="/service-areas/burr-hill-va/">Burr Hill, VA</a></li>
						<li><a title="Rappahannock Academy VA HVAC Company" href="/service-areas/rappahannock-academy-va/">Rappahannock Academy, VA</a></li>
						<li><a title="Corbin VA HVAC Company" href="/service-areas/corbin-va/">Corbin, VA</a></li>
						<li><a title="Remington VA HVAC Company" href="/service-areas/remington-va/">Remington, VA</a></li>
						<li><a title="Dahlgren VA HVAC Company" href="/service-areas/dahlgren-va/">Dahlgren, VA</a></li>
						<li><a title="Rhoadesville VA HVAC Company" href="/service-areas/rhoadesville-va/">Rhoadesville, VA</a></li>
						<li><a title="Dumfries VA HVAC Company" href="/service-areas/dumfries-va/">Dumfries, VA</a></li>
						<li><a title="Richardsville VA HVAC Company" href="/service-areas/richardsville-va/">Richardsville, VA</a></li>
						<li><a title="Elkwood VA HVAC Company" href="/service-areas/elkwood-va/">Elkwood, VA</a></li>
						<li><a title="Ruther Glen VA" href="/service-areas/ruther-glen-va/">Ruther Glen, VA</a></li>
						<li><a title="Fredericksburg HVAC Company" href="/service-areas/fredericksburg-va/">Fredricksburg, VA</a></li>
						<li><a title="Sealston VA HVAC Company" href="/service-areas/sealston-va/">Sealston, VA</a></li>
						<li><a title="Garrisonville VA HVAC Company" href="/service-areas/garrisonville-va/">Garrisonville, VA</a></li>
						<li><a title="Spotsylvania HVAC Company" href="/service-areas/hvac-company-spotsylvania/">Spotsylvania, VA</a></li>
						<li><a title="Goldvein VA HVAC Company" href="/service-areas/goldvein-va/">Goldvein, VA</a></li>
						<li><a title="Stafford VA HVAC Company" href="/service-areas/stafford-va/">Stafford, VA</a></li>
						<li><a title="Hartwood VA HVAC Company" href="/service-areas/hartwood-va/">Hartwood, VA</a></li>
						<li><a title="Stevensburg VA HVAC Company" href="/service-areas/stevensburg-va/">Stevensburg, VA</a></li>
						<li><a title="King George HVAC Company" href="/service-areas/king-george-va/">King George, VA</a></li>
						<li><a title="Sumerduck VA HVAC Company" href="/service-areas/sumerduck-va/">Sumerduck, VA</a></li>
						<li><a title="Locust Grove VA HVAC Company" href="/service-areas/locust-grove-va/">Locust Grove, VA</a></li>
						<li><a title="Triangle VA HVAC Company" href="/service-areas/triangle-va/">Triangle, VA</a></li>
						<li><a title="Midland VA HVAC Company" href="/service-areas/midland-va/">Midland, VA</a></li>
						<li><a title="Unionville VA HVAC Company" href="/service-areas/unionville-va/">Unionville, VA</a></li>
						<li><a title="Partlow VA HVAC Company" href="/service-areas/partlow-va/">Partlow, VA</a></li>
						<li><a title="Woodford VA HVAC Company" href="/service-areas/woodford-va/">Woodford, VA</a></li>
						<li><a href="/service-areas/aquia-harbour-va/">Aquia Harbour, VA</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div id="company-home" class="section-company">
			<div class="top-text">
				<div class="container">

					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-7">
							<div class="overflowed-image">
								<img class="lozad" data-src="/images/2019/07/company-photo.jpg" alt="Company">
							</div>
						</div>
						<div class="col-md-12 col-lg-6 offset-xl-1- col-xl-5">

							<div class="wow text-center fadeInUp">
								<?php echo cmb_wysiwyg_output( 'cmb_home_company_top_text', get_the_ID() ); ?>
							</div>

						</div>
					</div>

				</div>
			</div>


			<div class="bottom-text">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xl-7">

						</div>
						<div class="col-sm-12 offset-xl-1- col-xl-5">

							<div class="wow text-center fadeInUp">
								<?php echo cmb_wysiwyg_output( 'cmb_home_company_bottom_text', get_the_ID() ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="advantage-home" class="section lozad" data-background-image="<?php echo get_post_meta( get_the_ID(), 'cmb_home_bg_advantage', true ); ?>">
			<div class="intro">
				<div class="container">
					<div class="wow fadeIn">
						<?php echo cmb_wysiwyg_output( 'cmb_home_intro_advantage', get_the_ID() ); ?>
					</div>
				</div>
			</div>
			<div class="timeline">
				<div class="container">
					<div class="carousel-advantage owl-carousel">
						<?php $gallery = get_post_meta( $post->ID, 'cmb_home_icons_advantage', 1 ); foreach ($gallery as $image_id => $attachment_url ): ?>
							<div class="item">
								<div class="">
									<img class="lozad" data-src="<?php echo $attachment_url; ?>" alt="Robert B Payne Vans﻿" />
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<div id="reviews-home">
			<div class="section">
				<h2 class="wow fadeIn" data-wow-delay="0.2s"><?php echo get_post_meta( get_the_ID(), 'cmb_home_title_reviews', true ); ?></h2>

				<?php //  echo wp_get_attachment_image( get_post_meta( get_the_ID(), 'cmb_home_bg_reviews_id', 1 ), 'full' ); ?>

				<?php  $reveiw_iamge_id = get_post_meta( get_the_ID(), 'cmb_home_bg_reviews_id', 1 );

					$review_image_src = wp_get_attachment_image_url( $reveiw_iamge_id, 'full');

				 ?>

				<img class="lozad" data-src="<?php echo $review_image_src; ?>" alt="Robert B Payne Vans﻿" />

			</div>
			<div class="bottom-text">
				<div class="container wow fadeInUp">
					<div class="stars">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<?php echo cmb_wysiwyg_output( 'cmb_home_text_reviews', get_the_ID() ); ?>
					<div class="row align-items-center">
						<div class="col-sm-12 col-md-4">
							<img class="lozad" data-src="<?php bloginfo('template_directory'); ?>/images/bbb-rating.png" alt="BBB">
						</div>
						<div class="col-sm-6 col-md-4">
							<a class="btn btn-blue btn-block" href="/reviews/">READ MORE REVIEWS</a>
						</div>
						<div class="col-sm-6 col-md-4">
							<a class="btn btn-blue btn-block" href="/reviews/">LEAVE A REVIEW</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="resources-home" class="section">
			<h2 class="text-center">RESOURCES</h2>

			<?php // echo wp_get_attachment_image( get_post_meta( get_the_ID(), 'cmb_home_bg_resources_id', 1 ), 'full' ); ?>

				<?php  $resource_iamge_id = get_post_meta( get_the_ID(), 'cmb_home_bg_resources_id', 1 );

					$resource_image_src = wp_get_attachment_image_url( $resource_iamge_id, 'full');

				 ?>

				<img class="lozad" data-src="<?php echo $resource_image_src; ?>" alt="Robert B Payne Vans﻿" />



			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-4 col-info">
						<div class="wow fadeInUp" data-wow-delay="0.1s">
							<h3>RECENT BLOGS</h3>
							<?php $args = array( 'numberposts' => 1); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?>
								<div class="item-blog">
									<p class="title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</p>
									<p class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('m/d/Y');?></p>
									<?php the_excerpt(); ?>
								</div>
							<?php endforeach; wp_reset_postdata(); ?>
							<a href="<?php echo site_url(); ?>/blog/" class="btn btn-white">
								MORE BLOGS
							</a>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 faqs col-info">
							<div class="wow fadeInUp" data-wow-delay="0.2s">
							<h3>HVAC FAQs</h3>
							<?php $args = array( 'numberposts' => 1, 'category' => 74 ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?>
								<div class="item-blog">
									<p class="title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</p>
									<p class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('m/d/Y');?></p>
									<?php the_excerpt(); ?>
								</div>
							<?php endforeach; wp_reset_postdata(); ?>
							<a href="<?php echo site_url(); ?>/faq/" class="btn btn-white">
								MORE FAQs
							</a>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-info">
						<div class="wow fadeInUp" data-wow-delay="0.3s">
							<h3>ASK AN EXPERT</h3>
							<?php // echo do_shortcode('[contact-form-7 id="80" title="Ask an expert"]'); ?>
							<?php //echo do_shortcode( '[wufoo username="contractor2020" formhash="s1xmroc00fv14bv" autoresize="true" height="502" header="hide" ssl="true"]'); ?>
							<div id="wufoo-s1xmroc00fv14bv">
							Fill out my <a href="https://contractor2020.wufoo.com/forms/s1xmroc00fv14bv">online form</a>.
							</div>
							<script type="text/javascript">var s1xmroc00fv14bv;(function(d, t) {
							var s = d.createElement(t), options = {
							'userName':'contractor2020',
							'formHash':'s1xmroc00fv14bv',
							'autoResize':true,
							'height':'560',
							'async':true,
							'host':'wufoo.com',
							'header':'hide',
							'ssl':true};
							s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'secure.wufoo.com/scripts/embed/form.js';
							s.onload = s.onreadystatechange = function() {
							var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
							try { s1xmroc00fv14bv = new WufooForm();s1xmroc00fv14bv.initialize(options);s1xmroc00fv14bv.display(); } catch (e) {}};
							var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
							})(document, 'script');</script>

						</div>
					</div>
				</div>
			</div>
		</div>

	</article>
</main>

		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( '404', get_post_format() ); ?>
	<?php endif; ?>
<?php get_footer(); ?>
