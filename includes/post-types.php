<?php

// Documentation: https://developer.wordpress.org/reference/functions/register_post_type/
// Icons: https://developer.wordpress.org/resource/dashicons/

function wpcustom_register_types() {

	$argsVideos = array(
		'public' => true,
		'label' => 'Videos',
		'menu_position' => 21,
		'menu_icon' => 'dashicons-video-alt3',
		'hierarchical' => true,
		'capability_type' => 'post',
		'supports' => array('title'),
		'publicly_queryable'  => false,
		'has_archive' => false,
	);
	register_post_type( 'video', $argsVideos );

	// $args = array(
	// 	'hierarchical' => true,
	// 	'label' => 'Genre',
	// 	'show_ui' => true,
	// 	'show_admin_column' => true,
	// 	'query_var' => true,
	// 	'has_archive' => true,
	// 	'rewrite' => array('slug' =>  'books', 'with_front' => false),
	// );

	//register_taxonomy('genre', array('book'), $args);

}
add_action('init','wpcustom_register_types');

function wpcustom_plugin_activation() {

	// Register types to register the rewrite rules
	wpcustom_register_types();

	// Then flush them
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'wpcustom_plugin_activation');

function wpcustom_plugin_deactivation() {

	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'wpcustom_plugin_activation');

//// ORDER POST TYPE ON ADMIN
function post_types_admin_order( $wp_query ) {
	if ( is_admin() && !isset( $_GET['orderby'] ) ) {
		// Get the post type from the query
		$post_type = $wp_query->query['post_type'];
		if ( in_array( $post_type, array('video') ) ) {
			$wp_query->set('orderby', 'date');
			$wp_query->set('order', 'DESC');
		}
	}
}
add_filter('pre_get_posts', 'post_types_admin_order');
