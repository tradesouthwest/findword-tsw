<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://tradesouthwest.com
 * @since      1.0.0
 *
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/admin
 * @author     Tradesouthwest <tradesoutwhest@gmail.com>
 */
class Findword_Tsw_Admin {

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
		require_once plugin_dir_path( dirname( __FILE__ ) ) 
			. 'admin/partials/findword-tsw-admin-display.php';

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
		 * defined in Findword_Tsw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Findword_Tsw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/findword-tsw-admin.css', array(), $this->version, 'all' );
		return false;
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
		 * defined in Findword_Tsw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Findword_Tsw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/findword-tsw-admin.js', array( 'jquery' ), $this->version, false );
		return false;
	}
	
	/**
	 * Register the menus for the admin area.
	 *
	 * @since    1.0.1
	 */
	public function create_menus() {
		
		add_menu_page('FindWord Settings', 
					'FindWord TSW', 
					'administrator', 
					'findword-tsw', 
					'findword_settings_page',
					'dashicons-filter'
					);

	}

	/**
	 * Register settings 
	 * @param $page_slug string     Main identifier for plugin options 
	 * @param $options_group string Serialized group of strings 
	 *
	 * @since 1.0.1
	 */
	public function register_plugin_settings() {

		$page_slug = 'findword-settings-group';

		add_settings_section(
			'fwtsw_option_main', // section ID
			'General Options', // title (optional)
			'', // callback function to display the section (optional)
			$page_slug
		);
		//$option_group = 'fwtsw_option_main'; 
	    	register_setting( $page_slug, 'fwtsw_option_main' );
		
		// add plus integration 
		if ( function_exists( 'findword_tsw_plus_upgrade' ) ) : 
			register_setting( $page_slug, 'fwtsw_option_plus' );
		endif;
	}
}
