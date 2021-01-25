	</div> <!-- FIN MAIN -->
	<footer id="main-footer">
		<div id="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-4 item wow fadeInUp" data-wow-delay="0.1s">
						<h3>CONTACT INFORMATION</h3>
						<div class="section">
							<p>Robert B. Payne, Inc.</p>
							<p>1209 Lafayette Blvd.</p>
							<p>Fredericksburg, VA 22401</p>
							<p>Phone: <?php echo do_shortcode('[phone]'); ?></p>
						</div>
						<div class="section social">
							<a class="icon-fb" href="https://www.facebook.com/robert.b.payne.inc/?ref=ts" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a class="icon-tt" href="https://twitter.com/rbpayneinc" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a class="icon-yt" href="https://www.youtube.com/channel/UCiIMZ1QufGc0HUeIi3OBQBw" target="_blank">
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 item wow fadeInUp" data-wow-delay="0.2s">
						<h3>ACCREDITATION</h3>
						<div class="text-center section">
							<a target="_blank" title="Click for the Business Review of Robert B. Payne, Inc., a Heating & Air Conditioning in Fredericksbrg VA" href="https://www.bbb.org/richmond/business-reviews/heating-and-air-conditioning/robert-b-payne-inc-in-fredericksbrg-va-1057#sealclick"><img class="lozad" data-src="https://seal-Richmond.bbb.org/seals/blue-seal-293-61-robertbpayneinc-1057.png" alt="Click for the BBB Business Review of this Heating & Air Conditioning in Fredericksbrg VA" style="border: 0;"/></a>
							<a target="_blank" rel="nofollow" href="https://www.trane.com/residential/en/dealers/robert-b-payne-inc-fredericksburg-va/"><img class="lozad" data-src="<?php bloginfo('template_directory'); ?>/images/Trane_Logo.png" alt="Trane"></a>
							<a target="_blank" rel="nofollow" href="https://www.trane.com/residential/en/dealers/robert-b-payne-inc-fredericksburg-va/"><img class="lozad" data-src="<?php bloginfo('template_directory'); ?>/images/accreditations_03.png" alt="Comfort Specialists"></a>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 item wow fadeInUp" data-wow-delay="0.3s">
						<h3>Community & Affiliations</h3>
						<div class="text-center section">
							<img class="lozad" data-src="<?php bloginfo('template_directory'); ?>/images/communitty_01.jpg" alt="Communitty Icon 1">
							<img class="lozad" data-src="<?php bloginfo('template_directory'); ?>/images/communitty_02.jpg" alt="Communitty Icon 2">
							<img class="lozad" data-src="<?php bloginfo('template_directory'); ?>/images/communitty_03.jpg" alt="Communitty Icon 3">
							<img class="lozad" data-src="<?php bloginfo('template_directory'); ?>/images/communitty_04.jpg" alt="Communitty Icon 4">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 item">
						CALL US: <?php echo do_shortcode('[phone]'); ?> <a class="d-none" href="tel:5407095067">(540) 709-5067</a> | <a href="<?php echo site_url(); ?>/sitemap/">Sitemap</a>
					</div>
					<div class="col-lg-8 item col-right">
						<div class="container">
							© <?php echo date('Y') ?> Robert B. Payne, Inc. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="cta-mobile">
    	<?php echo do_shortcode('[phone]'); ?>
  	</div>

<!-- 	<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700"  onload="this.rel='stylesheet'">
	<link rel="preload" as="style" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  onload="this.rel='stylesheet'">
	<link rel="preload" as="style" href="<?php bloginfo('template_directory'); ?>/css/wf-no-label.css" onload="this.rel='stylesheet'"> -->
<?php wp_footer(); ?>



<script>/*! lozad.js - v1.9.0 - 2019-02-09
		* https://github.com/ApoorvSaxena/lozad.js
		* Copyright (c) 2019 Apoorv Saxena; Licensed MIT */
		!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.lozad=e()}(this,function(){"use strict";var g=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var o in r)Object.prototype.hasOwnProperty.call(r,o)&&(t[o]=r[o])}return t},n="undefined"!=typeof document&&document.documentMode,l={rootMargin:"0px",threshold:0,load:function(t){if("picture"===t.nodeName.toLowerCase()){var e=document.createElement("img");n&&t.getAttribute("data-iesrc")&&(e.src=t.getAttribute("data-iesrc")),t.getAttribute("data-alt")&&(e.alt=t.getAttribute("data-alt")),t.appendChild(e)}if("video"===t.nodeName.toLowerCase()&&!t.getAttribute("data-src")&&t.children){for(var r=t.children,o=void 0,a=0;a<=r.length-1;a++)(o=r[a].getAttribute("data-src"))&&(r[a].src=o);t.load()}t.getAttribute("data-src")&&(t.src=t.getAttribute("data-src")),t.getAttribute("data-srcset")&&t.setAttribute("srcset",t.getAttribute("data-srcset")),t.getAttribute("data-background-image")&&(t.style.backgroundImage="url('"+t.getAttribute("data-background-image")+"')"),t.getAttribute("data-toggle-class")&&t.classList.toggle(t.getAttribute("data-toggle-class"))},loaded:function(){}};
		/**
		* Detect IE browser
		* @const {boolean}
		* @private
		*/function f(t){t.setAttribute("data-loaded",!0)}var b=function(t){return"true"===t.getAttribute("data-loaded")};return function(){var r,o,a=0<arguments.length&&void 0!==arguments[0]?arguments[0]:".lozad",t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},e=g({},l,t),n=e.root,i=e.rootMargin,d=e.threshold,c=e.load,u=e.loaded,s=void 0;return window.IntersectionObserver&&(s=new IntersectionObserver((r=c,o=u,function(t,e){t.forEach(function(t){(0<t.intersectionRatio||t.isIntersecting)&&(e.unobserve(t.target),b(t.target)||(r(t.target),f(t.target),o(t.target)))})}),{root:n,rootMargin:i,threshold:d})),{observe:function(){for(var t=function(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:document;return t instanceof Element?[t]:t instanceof NodeList?t:e.querySelectorAll(t)}(a,n),e=0;e<t.length;e++)b(t[e])||(s?s.observe(t[e]):(c(t[e]),f(t[e]),u(t[e])))},triggerLoad:function(t){b(t)||(c(t),f(t),u(t))},observer:s}}});

		const observer = lozad('.lozad', {
		rootMargin: '300px 0px', // syntax similar to that of CSS Margin
		threshold: 0.1 // ratio of element convergence
		});
		// const observer = lozad(); // lazy loads elements with default selector as ".lozad"
		observer.observe();
	</script>

	<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>window.rubyApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};(function(){var e="eb3d6840-90f0-4b01-9c74-81f76728111b";var a=false;var t=document.createElement("script");t.async=true;t.type="text/javascript";t.src="https://chatwidget.ruby.com/"+e;document.getElementsByTagName("HEAD").item(0).appendChild(t);t.onreadystatechange=t.onload=function(t){if(!a&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){if(window.RubyChat)window.RubyChat({c:e});a=true}}})();</script>
	<!-- End of LiveChat code -->

<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "HVACBusiness",   
		"url": "https://www.robertbpayne.com",
		"logo": "https://www.robertbpayne.com/wp-content/themes/robertbpayne/images/logo-robert-payne.png",
		"image": "https://www.robertbpayne.com/images/2018/08/team.jpg",
		"areaServed": "Fredericksburg, Bealeton, Port Royal, Bowling Green, Quantico, Burr Hill, Rappahannock Academy, Corbin, Remington, Dahlgren, Rhoadesville, Dumfries, Richardsville, Elkwood, Ruther Glen, Fredricksburg, Sealston, Garrisonville, Spotsylnia, Goldvein, Stafford, Hartwood, Stevensburg, King George, Sumerduck, Locust Grove, Triangle, Midland, Unionville, Partlow, Woodford, Aquia Harbour, VA",
		"paymentAccepted": "Cash, Check, All Major Credit Cards, We do not accept American Express",
		"hasMap": "https://goo.gl/maps/g9KkBKATMRs",
		"email": "mailto:",
		"address": {
		"@type": "PostalAddress",
		"addressLocality": "Fredericksburg",
		"addressRegion": "VA",
		"postalCode":"22401",
		"streetAddress": "1209 Lafayette Blvd."
		},
		"description": "At Robert B. Payne, Inc. we provide exceptional HVAC services year-round for homeowners and commercial properties. Schedule service by calling (540) 373-5876!",
		"name": "Robert B. Payne, Inc.",
		"telephone": "(540) 373-5876",
		"openingHours": ["Mon-Fri: 08:00–17:00, Customer Emergency Service Available 24/7"],
		"geo": {
		"@type": "GeoCoordinates",
		"latitude": "38.2905155",
		"longitude": "-77.4727892"
		},    
		"sameAs" : [ "www.facebook.com/robert.b.payne.inc",
		"https://twitter.com/rbpayneinc",
		"https://www.youtube.com/channel/UCiIMZ1QufGc0HUeIi3OBQBw"]
		}
		]
	}
</script>

<script type="text/javascript" src="//cdn.callrail.com/companies/806968366/c387cc89ac05fcf5066b/12/swap.js" async></script> 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TFP7SJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
