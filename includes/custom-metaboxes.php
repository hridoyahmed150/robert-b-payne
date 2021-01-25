<?php
/**
 * Custom Metaaboxes
 * @version 0.1.0
 */

///// BANNER
add_action( 'cmb2_init', 'cmb_banner_page' );
function cmb_banner_page() {
	$prefix = 'cmb_banner_';
	$cmb_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Banner', 'cmb2' ),
		'object_types' => array( 'page', ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Text', 'cmb2' ),
		'id'   => $prefix . 'text_banner',
		'type' => 'wysiwyg',
    	'options' => array(
    		'media_buttons' => false,
	        'textarea_rows' => get_option('default_post_edit_rows', 6),
    	),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Image', 'cmb2' ),
		'id'   => $prefix . 'img_banner',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1920 x 750 pixels',
	) );
}








///// HOME
add_action( 'cmb2_init', 'cmb_home_page' );
function cmb_home_page() {
	$prefix = 'cmb_home_';
	$cmb_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Home Page Sections', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/home.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );
	$cmb_cmb->add_field( array(
		'before_row'   => '<h1>Banner</h1><hr>',
		'name' => __( 'Text', 'cmb2' ),
		'id'   => $prefix . 'banner_section',
		'type' => 'wysiwyg',
    	'options' => array(
    		'media_buttons' => true,
	      'textarea_rows' => get_option('default_post_edit_rows', 10),
    	),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Image', 'cmb2' ),
		'id'   => $prefix . 'img_banner_section',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1800 x 950 pixels',
	) );

	/*c20 fieds*/

	$cmb_cmb->add_field( array(
		'name' => __( 'Banner Title', 'cmb2' ),
		'id'   => $prefix . 'banner_title',
		'type' => 'text',
	) );

	$cmb_cmb->add_field( array(
		'name' => __( 'Banner Subtitle', 'cmb2' ),
		'id'   => $prefix . 'banner_sub_title',
		'type' => 'text',
	) );
	// $cmb_cmb->add_field( array(
	// 	'name' => __( 'Text', 'cmb2' ),
	// 	'id'   => $prefix . 'banner_text',
	// 	'type' => 'wysiwyg',
 //    	'options' => array(
 //    		'media_buttons' => false,
	//         'textarea_rows' => get_option('default_post_edit_rows', 6),
 //    	),
	// ) );

	$cmb_cmb->add_field( array(
		'name' => __( 'Contact Button Text', 'cmb2' ),
		'id'   => $prefix . 'banner_btn_1_text',
		'type' => 'text',
	) );

	$cmb_cmb->add_field( array(
		'name' => __( 'Contact Button URL', 'cmb2' ),
		'id'   => $prefix . 'banner_btn_1_url',
		'type' => 'text',
	) );

	// $cmb_cmb->add_field( array(
	// 	'name' => __( 'Phone Button Text', 'cmb2' ),
	// 	'id'   => $prefix . 'banner_btn_2_text',
	// 	'type' => 'text',
	// ) );

	// $cmb_cmb->add_field( array(
	// 	'name' => __( 'Phone Number', 'cmb2' ),
	// 	'id'   => $prefix . 'banner_btn_2_phone',
	// 	'type' => 'text',
	// ) );

	// $cmb_cmb->add_field( array(
	// 	'name' => __( 'Youtube Button Text', 'cmb2' ),
	// 	'id'   => $prefix . 'banner_btn_3_text',
	// 	'type' => 'text',
	// ) );

	// $cmb_cmb->add_field( array(
	// 	'name' => __( 'Youtube video ID', 'cmb2' ),
	// 	'id'   => $prefix . 'youtube_video_id',
	// 	'type' => 'text',
	// ) );

	/*end c20 fieds*/


	$cmb_cmb->add_field( array(
		'before_row'   => '<h1>Trane Section</h1><hr>',
		'name' => __( 'Text', 'cmb2' ),
		'id'   => $prefix . 'trane_section',
		'type' => 'wysiwyg',
    	'options' => array(
    		'media_buttons' => true,
	      // 'textarea_rows' => get_option('default_post_edit_rows', 10),
    	),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Background', 'cmb2' ),
		'id'   => $prefix . 'bg_trane',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1920 x 500 pixels',
	) );

	$cmb_cmb->add_field( array(
		'before_row'   => '<h1>Company Section</h1><hr>',
		'name' => __( 'Text', 'cmb2' ),
		'id'   => $prefix . 'company_top_text',
		'type' => 'wysiwyg',
    	'options' => array(
    		'media_buttons' => true,
	      'textarea_rows' => get_option('default_post_edit_rows', 10),
    	),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Text', 'cmb2' ),
		'id'   => $prefix . 'company_bottom_text',
		'type' => 'wysiwyg',
    	'options' => array(
    		'media_buttons' => true,
	      'textarea_rows' => get_option('default_post_edit_rows', 10),
    	),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Background', 'cmb2' ),
		'id'   => $prefix . 'bg_company',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1920 x 500 pixels',
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Photo', 'cmb2' ),
		'id'   => $prefix . 'bg_photo',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1920 x 500 pixels',
	) );

	$cmb_cmb->add_field( array(
		'before_row'   => '<h1>Services Section</h1><hr>',
		'name' => __( 'Title', 'cmb2' ),
		'id'   => $prefix . 'title_service',
		'type' => 'text'
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Service 1', 'cmb2' ),
		'id'   => $prefix . 'service_one',
		'type' => 'wysiwyg',
			'options' => array(
				'media_buttons' => true,
				'textarea_rows' => get_option('default_post_edit_rows', 10),
			),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Link service 1', 'cmb2' ),
		'id'   => $prefix . 'link_service_one',
		'type' => 'text'
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Service 2', 'cmb2' ),
		'id'   => $prefix . 'service_two',
		'type' => 'wysiwyg',
			'options' => array(
				'media_buttons' => true,
				'textarea_rows' => get_option('default_post_edit_rows', 10),
			),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Link service 2', 'cmb2' ),
		'id'   => $prefix . 'link_service_two',
		'type' => 'text'
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Service 3', 'cmb2' ),
		'id'   => $prefix . 'service_three',
		'type' => 'wysiwyg',
			'options' => array(
				'media_buttons' => true,
				'textarea_rows' => get_option('default_post_edit_rows', 10),
			),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Link service 3', 'cmb2' ),
		'id'   => $prefix . 'link_service_three',
		'type' => 'text'
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Service 4', 'cmb2' ),
		'id'   => $prefix . 'service_four',
		'type' => 'wysiwyg',
			'options' => array(
				'media_buttons' => true,
				'textarea_rows' => get_option('default_post_edit_rows', 10),
			),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Link service 4', 'cmb2' ),
		'id'   => $prefix . 'link_service_four',
		'type' => 'text'
	) );

	$cmb_cmb->add_field( array(
		'before_row'   => '<h1>Advantage</h1><hr>',
		'name' => __( 'Text', 'cmb2' ),
		'id'   => $prefix . 'intro_advantage',
		'type' => 'wysiwyg',
			'options' => array(
				'media_buttons' => true,
				'textarea_rows' => get_option('default_post_edit_rows', 10),
			),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Icons', 'cmb2' ),
		'id'   => $prefix . 'icons_advantage',
		'type' => 'file_list',
		'preview_size' => array( 50, 50 ),
		'desc' => 'Upload images. Format: .jpg; Size: 190 x 345 pixels',
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Background', 'cmb2' ),
		'id'   => $prefix . 'bg_advantage',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1920 x 500 pixels',
	) );

	$cmb_cmb->add_field( array(
		'before_row'   => '<h1>Reviews</h1><hr>',
		'name' => __( 'Title', 'cmb2' ),
		'id'   => $prefix . 'title_reviews',
		'type' => 'text'
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Text', 'cmb2' ),
		'id'   => $prefix . 'text_reviews',
		'type' => 'wysiwyg',
			'options' => array(
				'media_buttons' => true,
				'textarea_rows' => get_option('default_post_edit_rows', 10),
			),
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Image', 'cmb2' ),
		'id'   => $prefix . 'img_reviews',
		'type' => 'file',
		'preview_size' => array( 50, 50 ),
		'desc' => 'Upload images. Format: .jpg; Size: 500 x 300 pixels',
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Background', 'cmb2' ),
		'id'   => $prefix . 'bg_reviews',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1920 x 500 pixels',
	) );

	$cmb_cmb->add_field( array(
		'before_row'   => '<h1>RESOURCES</h1><hr>',
		'name' => __( 'Title', 'cmb2' ),
		'id'   => $prefix . 'title_resources',
		'type' => 'text'
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Background', 'cmb2' ),
		'id'   => $prefix . 'bg_resources',
		'type' => 'file',
		'preview_size' => array( 100, 100 ),
		'desc' => 'Format: .jpg; Size: 1920 x 500 pixels',
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'FAQs text', 'cmb2' ),
		'id'   => $prefix . 'text_faqs',
		'type' => 'wysiwyg',
		'options' => array(
			'media_buttons' => true,
			'textarea_rows' => get_option('default_post_edit_rows', 10),
			),
	) );
}

///// VIDEOS
add_action( 'cmb2_init', 'single_video' );
function single_video() {
	$prefix = 'single_video_';
	$cmb_licelifter = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Video', 'cmb2' ),
		'object_types' => array( 'video', ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );
	$cmb_licelifter->add_field( array(
		'name' => __( 'Url', 'cmb2' ),
		'id'   => $prefix . 'url',
		'type' => 'oembed',
		'desc' => 'Enter a youtube url',
	) );
}

///// REVIEWS PAGES
add_action( 'cmb2_init', 'cmb_review_page' );
function cmb_review_page() {
	$prefix = 'cmb_review_';
	$cmb_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Review', 'cmb2' ),
		'object_types' => array( 'page', ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true,
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Text review', 'cmb2' ),
		'id'   => $prefix . 'text',
		'type' => 'textarea_small'
	) );
	$cmb_cmb->add_field( array(
		'name' => __( 'Review by', 'cmb2' ),
		'id'   => $prefix . 'by',
		'type' => 'text'
	) );
}

///// GRUPOS REPETIBLES

// add_action( 'cmb2_init', 'cmb_group' );
function cmb_group() {
	$prefix = 'cmb_group_repeteable_';
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Group', 'cmb2' ),
		'object_types' => array( 'page', ),
	) );
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'item',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Item {#}', 'cmb2' ),
			'add_button'    => __( 'Add Item', 'cmb2' ),
			'remove_button' => __( 'Remove Item', 'cmb2' ),
			'sortable'      => false,
			'closed'     => true,
		),
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Text', 'cmb2' ),
		'id'   => 'text',
		'type' => 'text',
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
		'desc' => 'Format: .jpg; Size: 1920 x 500 pixels',
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Description', 'cmb2' ),
		'id'   => 'descripcion',
		'type' => 'wysiwyg',
    	'options' => array(
    		'media_buttons' => false,
	        'textarea_rows' => get_option('default_post_edit_rows', 8),
    	),
	) );
}

///// GALLERY
function cmb2_output_file_list( $file_list_meta_key, $img_size = 'thumbnail' ) {
    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );
    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id => $attachment_url ) {
    	$imgFull = wp_get_attachment_image_src( $attachment_id, 'full' );
        echo '<div class="item-image"><a class="fancybox" rel="galeria" href="' . $imgFull[0] . '">';
        echo wp_get_attachment_image( $attachment_id, $img_size );
        echo '</a></div>';
    }
}

///// WYSIWYG
function cmb_wysiwyg_output( $meta_key, $post_id = 0 ) {
    global $wp_embed;
    $post_id = $post_id ? $post_id : get_the_id();
    $content = get_post_meta( $post_id, $meta_key, 1 );
    $content = $wp_embed->autoembed( $content );
    $content = $wp_embed->run_shortcode( $content );
    $content = do_shortcode( $content );
    $content = wpautop( $content );
    return $content;
}

/*

///// GET CUSTOM FIELD
<?php echo get_post_meta( get_the_ID(), 'cmb_home_text', true ); ?>

///// GET FILE
<?php echo wp_get_attachment_image( get_post_meta( get_the_ID(), 'cmb_test_image_id', 1 ), 'full' ); ?>

///// GET FILE LIST

////// OPTION 1
<?php cmb2_output_file_list( 'cmb_test_file_list', 'full' ); ?>

////// GET GALLERY
<?php $gallery = get_post_meta( $post->ID, 'cmb_images', 1 ); ?>
<?php foreach ($gallery as $image_id => $attachment_url ): ?>
	<div>
		<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
	</div>
<?php endforeach; ?>

///// REPEAT GROUP
<?php $entries = get_post_meta( get_the_ID(), 'cmb_group', true ); ?>
<?php foreach ( $entries as $key => $entry ): ?>
	<?php if ( isset( $entry['name'] ) ) ?>
		<?php echo esc_html( $entry['name'] ); ?>
	<?php if ( isset( $entry['description'] ) ) ?>
		<?php echo wpautop( $entry['description'] ); ?>
	<?php if ( isset( $entry['pricing'] ) ) ?>
		<?php echo wpautop( $entry['pricing'] ); ?>
	<?php if ( isset( $entry['image_id'] ) ) ?>
		<?php echo wp_get_attachment_image($entry['image_id'], 'full' ); ?>
<?php endforeach; ?>

///// GET WYSIWYG
<?php echo cmb_wysiwyg_output( 'cmb_test_wysiwyg', get_the_ID() ); ?>

*/

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

    /**
     * Initiate the metabox
     */
    $prefix = 'cmb_landing_';
    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/landingpage.php' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Test Text', 'cmb2' ),
        'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => 'yourprefix_text',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    // URL text field
    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => 'yourprefix_url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    // Email text field
    $cmb->add_field( array(
        'name' => __( 'Test Text Email', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => 'yourprefix_email',
        'type' => 'text_email',
        // 'repeatable' => true,
    ) );

    // Add other metaboxes as needed

}
