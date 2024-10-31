<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.pedalo.co.uk
 * @since      1.0.0
 *
 * @package    Pedalo_connector
 * @subpackage Pedalo_connector/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Pedalo_connector
 * @subpackage Pedalo_connector/admin
 * @author     Pedalo <support@pedalo.co.uk>
 */
class Pedalo_connector_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pedalo_connector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pedalo_connector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		if( $_SERVER['REQUEST_URI']=="/wp-admin/options-general.php?page=pedalo-connector"){
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/pedalo_connector-admin.css', array(), $this->version, 'all' );
		}
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pedalo_connector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pedalo_connector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		if( $_SERVER['REQUEST_URI']=="/wp-admin/options-general.php?page=pedalo-connector"){
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/pedalo_connector-admin.js', array( 'jquery' ), $this->version, false );
		}

	}

	// public function display_admin_page() {
	// 	add_menu_page(
	// 		'Pedalo Connector', // page title
	// 		'Pedalo Connector', // menu title
	// 		'manage_options', // capability
	// 		'pedalo-connector', // menu slug
	// 		array($this, 'showPage'), // function
	// 		'', // icon url
	// 		'100.0' // position number in menu from top
	// 	);
	// }

	// public function showPage() {
	// 	//echo '<h1>here</h1>';
	// 	include_once plugin_dir_path( __FILE__ ) . 'partials/pedalo_connector-admin-display.php';
	// }

	/**
	 * Register the settings page
	 *
	 * @since    1.0.0
	 */
	public function add_admin_menu() {
		add_options_page( 'Pedalo Connector', 'Pedalo Connector', 'manage_options', 'pedalo-connector', array( $this, 'create_admin_interface' ) );
	}

	/**
	 * Callback function for the admin settings page.
	 *
	 * @since    1.0.0
	 */
	public function create_admin_interface() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/pedalo_connector-admin-display.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/dashboard.php';
	}
	

	/**
	 * Creates our settings sections with fields etc.
	 *
	 * @since    1.0.0
	 */
	public function settings_api_init() {

		/**
		 * Sections functions
		 */

		// The basic section
		add_settings_section(
			'pedalo_connector_settings_section',
			__( ' ', 'textdomain' ),
			array( $this, 'setting_section_callback_function', ),
			'pedalo-connector'
		);
		
				/**
		 * Basic settings
		 */

		// Add the field with the post types
		/*add_settings_field(
			'pedalo_connector_token',
			'Use this field to set the unique connector token',
			array( $this, 'token_setting_callback_function' ),
			'pedalo-connector',
			'pedalo_connector_settings_section'
		);*/
		
		add_settings_field(
			'pedalo_api_key',
			'',
			array( $this, 'api_key_setting_callback_function' ),
			'pedalo-connector',
			'pedalo_connector_settings_section'
		);
		

		//register basic settings
		register_setting( 'pedalo-connector', 'pedalo_connector_token' );
		register_setting( 'pedalo-connector', 'pedalo_api_key', array('sanitize_callback' => [$this,'validate_api_key']));

	}
	
	/**
	 * Callback functions for validate api key
	 */
	function validate_api_key($input){
		if(strlen($input) !=40 || !preg_match('/[A-Z]/', $input) || !preg_match('/[a-z]/', $input) || !preg_match('/[0-9]/', $input)){
			add_settings_error(
				'pedalo_error_messages',
				'wporg_message',
				__( 'Please enter a valid alphanumeric 40 characters long api key.', 'pedalo_error' ), 
				'error' 
			);
			wp_redirect('/wp-admin/options-general.php?page=pedalo-connector');
			return get_option( 'pedalo_api_key' );
		}else{
			return $input;
		}
	}

	/**
	 * Callback functions for settings
	 */
	function setting_section_callback_function() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/section-display.php';
	}
	
	// Insert token
	function token_setting_callback_function() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/token-settings-display.php';
	}
	
	function api_key_setting_callback_function() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/api-key-settings-display.php';
	}
	
}
