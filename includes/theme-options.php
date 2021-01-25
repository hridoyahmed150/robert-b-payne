<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class Theme_Admin {
	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'theme_options';
	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'theme_option_metabox';
	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = '';
	/**
	 * Options Page hook
	 * @var string
	 */
	protected $options_page = '';
	/**
	 * Constructor
	 * @since 0.1.0
	 */
	public function __construct() {
		// Set our title
		$this->title = __( 'Theme Options', 'theme' );
	}
	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_init', array( $this, 'add_options_page_metabox' ) );
	}
	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}
	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );
		// Include CMB CSS in the head to avoid FOUT
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
		function load_theme_script() {
			global $pagenow, $typenow;
		  	if ($pagenow=='admin.php' && $_GET['page']=='theme_options') {
		    	wp_enqueue_script('boostrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' ,array('jquery') ,'200134');
		    	wp_enqueue_style( 'boostrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', '200134');
		  	}
		}
		add_action('admin_init','load_theme_script');
	}
	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<div class="row admin-panel">
				<div class="col-md-3 column">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-header-tab" data-toggle="pill" href="#v-pills-header" role="tab">Header</a>
			    	<a class="nav-link" id="v-pills-footer-tab" data-toggle="pill" href="#v-pills-footer" role="tab">Footer</a>
			  	</div>
				</div>
				<div class="col-md-9 column options">
			  	<div class="tab-content" id="v-pills-tabContent">
						<?php cmb2_metabox_form( $this->metabox_id, $this->key, array( 'cmb_styles' => false ) ); ?>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			jQuery('#cmb2-metabox-theme_option_metabox').addClass('tab-content');
		</script>

		<?php
	}
	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {
		$cmb = new_cmb2_box( array(
			'id'      => $this->metabox_id,
			'hookup'  => false,
			'show_on' => array(
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );
		$cmb->add_field( array(
			'before_row'   => '<div class="tab-pane show active" id="v-pills-header" role="tabpanel" aria-labelledby="v-pills-header-tab">',
			'name' => __( 'Text Info', 'theme' ),
			'id'   => 'text_info_1',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( 'Text Info', 'theme' ),
			'id'   => 'text_info_2',
			'type' => 'file_list',
			'preview_size' => array( 50, 50 ),
			'desc' => 'Upload images. Format: .jpg; Size: 1920 x 500 pixels',
			'after_row'   => '</div>',
		) );
		$cmb->add_field( array(
			'before_row'   => '<div class="tab-pane" id="v-pills-footer" role="tabpanel" aria-labelledby="v-pills-footer-tab">',
			'name' => __( 'Text Info', 'theme' ),
			'id'   => 'text_info_3',
			'type' => 'text',
		) );
		$cmb->add_field( array(
			'name' => __( 'Text', 'theme' ),
			'id'   => 'text_info_4',
			'type' => 'text',
			'after_row'   => '</div>',
		) );
	}
	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}
		throw new Exception( 'Invalid property: ' . $field );
	}
}
/**
 * Helper function to get/return the Myprefix_Admin object
 * @since  0.1.0
 * @return Myprefix_Admin object
 */
function theme_admin() {
	static $object = null;
	if ( is_null( $object ) ) {
		$object = new Theme_Admin();
		$object->hooks();
	}
	return $object;
}
/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function theme_get_option( $key = '' ) {
	return cmb2_get_option( theme_admin()->key, $key );
}
// Get it started
theme_admin();


/*

// GET FIELDS ON TEMPLATES

///// OPTION 1
<?php $themeOptions = get_option( 'theme_options' ); echo($themeOptions['test_text']); ?>

///// OPTION 2
<?php $themeOptions = get_option( 'theme_options' ); ?>
<?php echo($themeOptions['test_text']); ?>
<?php echo($themeOptions['test_colorpicker']); ?>

///// GET IMAGE
<?php $themeOptions = get_option( 'theme_options' );  echo wp_get_attachment_image(($themeOptions['image_article_one_fa_id']), 'full'); ?>

///// GALLERY IMAGES
<?php $themeOptions = get_option( 'theme_options' ); $images = ($themeOptions['logos_institutes']);?>
<?php foreach ($images as $image_id => $attachment_url): ?>
	<div>
		<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
	</div>
<?php endforeach; ?>

*/
