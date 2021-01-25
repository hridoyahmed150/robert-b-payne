<?php ?>

	<aside>

		<?php //if (!is_page(5313)): ?>
			<!-- <div class="widget"> -->
				<?php //echo do_shortcode('[show_coupon id="53"]'); ?>
			<!-- </div> -->
		<?php //endif ?>

		<div class="wow fadeInUp" data-wow-delay="0.2s">
			<?php if ( is_blog()){ dynamic_sidebar( 'sidebar' ); } ?>		
		</div>


		<?php if (!is_page(array(18,5347,5411,5323,5383,5373))): ?>
			<div class="widget widget-contact-us wow fadeInUp" data-wow-delay="0.2s">
				<h3>CONTACT US</h3>
				<?php //echo do_shortcode('[contact-form-7 id="97" title="Contact Us"]'); ?>
				<?php //echo do_shortcode('[wufoo username="contractor2020" formhash="s1rsos1509s9sz5" autoresize="true" height="560" header="hide" ssl="true"]'); ?>
				<div id="wufoo-s1rsos1509s9sz5">
				Fill out my <a href="https://contractor2020.wufoo.com/forms/s1rsos1509s9sz5">online form</a>.
				</div>
				<script type="text/javascript">var s1rsos1509s9sz5;(function(d, t) {
				var s = d.createElement(t), options = {
				'userName':'contractor2020',
				'formHash':'s1rsos1509s9sz5',
				'autoResize':true,
				'height':'560',
				'async':true,
				'host':'wufoo.com',
				'header':'hide',
				'ssl':true};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'secure.wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { s1rsos1509s9sz5 = new WufooForm();s1rsos1509s9sz5.initialize(options);s1rsos1509s9sz5.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
				})(document, 'script');</script>

			</div>
		<?php endif; ?>

		<div class="widget widget-sidebar-liks wow fadeInUp" data-wow-delay="0.2s">
			<div class="item">
				<a href="/contact-us/request-service/">
					<h3>
						SCHEDULE SERVICE <img src="<?php bloginfo('template_directory'); ?>/images/icon-calendar.png" alt="Calendar Icon">
					</h3>
					<p>If you need after hours service, please call 540-373-5876 and a technician will call you back within 1 hour.</p>
				</a>
			</div>
			<hr>
			<div class="item">
				<a href="/faq/">
					<h3>
						ASK AN EXPERT <img src="<?php bloginfo('template_directory'); ?>/images/icon-chat.png" alt="Chat Icon ">
					</h3>
					<p>Ask a question or provide a comment for us by using the online submission form.</p>
				</a>
			</div>
			<hr>
			<div class="item">
				<a href="/specials-offers/">
					<h3>
						SPECIAL OFFERS <img src="<?php bloginfo('template_directory'); ?>/images/icon-tag.png" alt="Tag Icon">
					</h3>
					<p>Get discount on HVAC service.</p>
				</a>
			</div>
			<hr>
			<div class="item">
				<a href="/about-us/financing/">
					<h3>
						FINANCING <img src="<?php bloginfo('template_directory'); ?>/images/icon-money.png" alt="Financing">
					</h3>
					<p>Click here for a special financing offer from Trane.</p>
				</a>
			</div>
			<hr>
			<div class="item">
				<a href="/energy-savings-agreement/">
					<h3>
						ENERGY SERVICE AGREEMENTS <img src="<?php bloginfo('template_directory'); ?>/images/icon-doc.png" alt="Doc Icon">
					</h3>
					<p>Call 540 373 5876 ‎now to speak to one of our friendly staff members.</p>
				</a>
			</div>
		</div>

		<div class="recent-blogs-sidebar wow fadeInUp" data-wow-delay="0.2s">
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

		<div class="recent-blogs-sidebar wow fadeInUp" data-wow-delay="0.2s">
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

	</aside>
