<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://tradesouthwest.com
 * @since      1.0.0
 *
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/public
 * @author     Tradesouthwest <tradesoutwhest@gmail.com>
 */
class Findword_Tsw_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) 
			. 'css/findword-tsw-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
		wp_enqueue_script( 'highlight-tsw', plugin_dir_url( __FILE__ ) 
			. 'js/highlight.js', 
			array( 'jquery' ), 
			'3', 
			false );
		wp_enqueue_script( 'findword-tsw-scrollto', plugin_dir_url( __FILE__ ) 
			. 'js/findword-tsw-scrollto.js', 
			array( 'jquery' ), // uses amd
			'2.1.3', 
			false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) 
			. 'js/findword-tsw-public.js', 
			array( 'jquery' ), 
			$this->version, 
			true );
		wp_enqueue_script( $this->plugin_name . '-slideto', plugin_dir_url( __FILE__ ) 
			. 'js/findword-tsw-slideto.js', 
			array( 'jquery' ), 
			$this->version, 
			true );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function register_shortcodes() {

		add_shortcode( 'findword', 'findword_render_public_shortcode');
	}

	/**
	 * Register the Widgets for the public-facing side of the site.
	 *
	 * @since    1.0.1
	 */
	public function register_widgets() {
	
		register_widget( 'Findword_Tsw_Widget' );
	}
 
}
