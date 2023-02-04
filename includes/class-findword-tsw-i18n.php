<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://tradesouthwest.com
 * @since      1.0.0
 *
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/includes
 * @author     Tradesouthwest <tradesoutwhest@gmail.com>
 */
class Findword_Tsw_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'findword-tsw',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
