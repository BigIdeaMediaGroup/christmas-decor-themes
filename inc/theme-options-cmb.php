<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class bimg_Admin {

	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'bimg_options';

	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'bimg_option_metabox';

	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = 'Theme Options';

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
		$this->title = 'Site Options';
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
	}

	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2_options_page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
		</div>
		<?php
	}

	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {

		$siteOptions = new_cmb2_box( array(
			'id'      => $this->metabox_id,
			'hookup'  => false,
			'show_on' => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );

		// Set our CMB2 fields

		$siteOptions->add_field( array(
			'name'    => 'Theme Color',
			'desc'    => 'Choose the primary color theme for the site. Colors will apply to the background and the hightlights of certain elements.',
			'id'      => 'theme_color',
			'type'    => 'select',
			'options' => array(
				'red'   => 'Red',
				'blue'  => 'Blue',
				'green' => 'Green',
			),
		) );

		$siteOptions->add_field( array(
			'name'    => 'Email',
			'desc'    => 'Enter the primary business\'s email address',
			'id'      => 'email',
			'type'    => 'text_email',
			'default' => 'address@example.com',
		) );

		$siteOptions->add_field( array(
			'name'    => 'Phone Number',
			'desc'    => 'Ex. (555) 555-5555',
			'id'      => 'phone',
			'type'    => 'text_medium',
			'default' => '(555) 555-5555',
		) );

		$siteOptions->add_field( array(
			'name'    => 'Site Attribution',
			'desc'    => 'The name of the entity responsible for site content. This value is used to populate the copyright attribution notice.',
			'id'      => 'attribution',
			'type'    => 'text',
			'default' => 'Christmas Decor',
		) );

		$siteOptions->add_field( array(
			'name'    => 'Address',
			'id'      => 'address',
			'type'    => 'text',
			'default' => '555 Santa Claus Lane',
		) );

		$siteOptions->add_field( array(
			'name'    => 'City',
			'id'      => 'city',
			'type'    => 'text_medium',
			'default' => 'North Pole',
		) );

		$siteOptions->add_field( array(
			'name'    => 'State',
			'id'      => 'state',
			'type'    => 'text_small',
			'default' => 'NP',
		) );

		$siteOptions->add_field( array(
			'name'    => 'Areacode',
			'id'      => 'areacode',
			'type'    => 'text_small',
			'default' => '55555',
		) );

		$siteOptions->add_field( array(
			'name' => '<h2><br>Social Media Integration</h2>',
			'id'   => 'title',
			'type' => 'title',
		) );

		$siteOptions->add_field( array(
			'name'    => 'Delicious',
			'id'      => 'delicious',
			'type'    => 'radio_inline',
			'options' => array (
				'true'  => 'True',
				'false' => 'False'
			),
			'default' => 'false',
		) );

		$siteOptions->add_field( array(
			'name' => 'Delicious URL',
			'id'   => 'delicious_url',
			'type' => 'text_url',
		) );

		$siteOptions->add_field( array(
			'name'    => 'Digg',
			'id'      => 'digg',
			'type'    => 'radio_inline',
			'options' => array (
				'true'  => 'True',
				'false' => 'False'
			),
			'default' => 'false',
		) );

		$siteOptions->add_field( array(
			'name' => 'Digg URL',
			'id'   => 'digg_url',
			'type' => 'text_url',
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

// Get it started
$GLOBALS['bimg_Admin'] = new bimg_Admin();
$GLOBALS['bimg_Admin']->hooks();

/**
 * Helper function to get/return the bimg_Admin object
 * @since  0.1.0
 * @return bimg_Admin object
 */
function bimg_Admin() {
	global $bimg_Admin;
	return $bimg_Admin;
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function bimg_get_option( $key = '' ) {
	global $bimg_Admin;
	return cmb2_get_option( $bimg_Admin->key, $key );
}
