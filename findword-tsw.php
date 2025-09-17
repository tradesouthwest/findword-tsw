<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://tradesouthwest.com
 * @since             1.1.8
 * @package           Findword_Tsw
 *
 * @wordpress-plugin
 * Plugin Name:       Findword TSW
 * Plugin URI:        https://themes.tradesouthwest.com/plugins
 * Description:       Search tool helper to find text on page. Options located at Settings and Help under Settings FindWord
 * Version:           1.1.8
 * Author:            Tradesouthwest
 * Author URI:        https://tradesouthwest.com
 * License:           GPLv3
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       findword-tsw
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/tradesouthwest/findword-tsw Reserved for future use of ClassicPress 
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FINDWORD_TSW_VERSION', '1.1.8' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-findword-tsw-activator.php
 */
function activate_findword_tsw() {
	require_once plugin_dir_path( __FILE__ ) 
		. 'includes/class-findword-tsw-activator.php';
	
		Findword_Tsw_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-findword-tsw-deactivator.php
 */
function deactivate_findword_tsw() {
	require_once plugin_dir_path( __FILE__ ) 
		. 'includes/class-findword-tsw-deactivator.php';
	
		Findword_Tsw_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_findword_tsw' );
register_deactivation_hook( __FILE__, 'deactivate_findword_tsw' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-findword-tsw.php';
require_once plugin_dir_path( __FILE__ ) 
	. 'public/partials/findword-tsw-public-display.php';

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 *
 * @since 1.0.4
 * @return Boolean Only runs when option is activated from this plugin.
 */
$twsdbug = 'twsshow';
if ( $twsdbug != 'twshide' ) :  
    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
    add_action( 'shutdown', function() {
    
        while ( @ob_end_flush() );
} );
endif;  
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_findword_tsw() {

	$plugin = new Findword_Tsw();
	$plugin->run();

}
run_findword_tsw();
