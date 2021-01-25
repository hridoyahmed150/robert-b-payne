   <?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TFP7SJ');</script>
<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url(); ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image<?php echo site_url(); ?>/favicon/png" sizes="32x32" href="<?php echo site_url(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image<?php echo site_url(); ?>/favicon/png" sizes="16x16" href="<?php echo site_url(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo site_url(); ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo site_url(); ?>/favicon/safari-pinned-tab.svg" color="#32437f">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<meta name="msvalidate.01" content="EFA9CF93BE90D985C1BEBF9D8459C8C2" />

	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
		var _stk = "6ae72a52d9b806f9a8c0f27e3e4097aaa2de96be";
		(function(){
		var a=document, b=a.createElement("script"); b.type="text/javascript";
		b.async=!0; b.src=('https:'==document.location.protocol ? 'https://' :
		'http://') + 'd31y97ze264gaa.cloudfront.net/assets/st/js/st.js';
		a=a.getElementsByTagName("script")[0]; a.parentNode.insertBefore(b,a);
		})();
	</script>
	<!-- Facebook Pixel Code -->

<script>

	!function(f,b,e,v,n,t,s)

	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

	n.callMethod.apply(n,arguments):n.queue.push(arguments)};

	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

	n.queue=[];t=b.createElement(e);t.async=!0;

	t.src=v;s=b.getElementsByTagName(e)[0];

	s.parentNode.insertBefore(t,s)}(window, document,'script',

	'https://connect.facebook.net/en_US/fbevents.js');

	fbq('init', '362717880905174');

	fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

 src="https://www.facebook.com/tr?id=362717880905174&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->
</head>
<body <?php body_class(); ?>>

	</script>
	<!--[if lt IE 9]>
  	<div class="old-browser">
        <div class="inner">
            <i class="fa fa-frown-o"></i>
            <p>Tu navegador de internet esta muy desactualizado y no permite que navegues correctamente nuestro sitio.</p>
            <p>Te invitamos a ingresar desde otro navegador o actualiza tu navegador haciendo click <a href="https://browsehappy.com/?locale=es" target="_blank">aquí</a></p>
        </div>
    </div>
  <![endif]-->

  	

	<div class="c19-notice d-md-none">We're Open! <a href="/actions-we-are-taking-regarding-the-covid-19-pandemic/">Actions We Are Taking Regarding COVID-19</a></div>
	<header id="mobile-main-header" class="d-md-none">
			<a href="<?php echo site_url(); ?>" class="logo">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo-robert-payne.png" alt="<?php bloginfo('name'); ?>">
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'mobile_menu', 'menu_class' => 'nav nav-pills' ) ); ?>
	</header>
	<header id="main-header" class="d-none d-md-block sticky-menu">
		<div class="c19-notice">We're Open! <a href="/actions-we-are-taking-regarding-the-covid-19-pandemic/">Actions We Are Taking Regarding COVID-19</a></div>
		<div id="top-header">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-6 phone">
						<i class="fa fa-phone" aria-hidden="true"></i> 24/7 SERVICE  <?php echo do_shortcode('[phone]'); ?>
					</div>
					<div class="col-md-6 social-bar">
						<div class="row align-items-center justify-content-end">
							<div class="col-auto col-fuel-service">
								<a href="/contact-us/request-service/">REQUEST SERVICE</a>
							</div>
							<div class="col-auto">
								<div class="social">
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="top-menu">
			<div class="container-fluid">
				<?php wp_nav_menu( array( 'theme_location' => 'top_menu', 'menu_class' => 'nav nav-pills' ) ); ?>
			</div>
		</div>
		<div id="bottom-header">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-12 col-xl-3 logo">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/logo-robert-payne.png" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
					<div class="col-lg-12 col-xl-9">
						<nav id="main-navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav nav-pills' ) ); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="now-hiring-badge d-none d-xl-block">
		<a href="/about-us/employment/">
			<img src="<?php bloginfo('template_directory'); ?>/images/now-hiring.png" alt="Now Hiring <?php bloginfo('name'); ?>">
		</a>
	</div>
	<div id="main-content">
		<?php if (!is_front_page() and !is_page_template( 'page-templates/contacto.php' )): ?>
			<?php get_template_part( 'template-parts/header-page', 'none' ); ?>
		<?php endif ?>
