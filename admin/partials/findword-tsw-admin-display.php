<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://tradesouthwest.com
 * @since      1.0.5
 *
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/admin/partials
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Settings page render function
 * @since 1.0.1
 * @return HTML
 */
function findword_settings_page(){ 
?>
    <div class="wrap">
        <h1><?php esc_html_e('Find Word TSW', 'findword-tsw'); ?></h1>

        <form method="post" action="options.php">
    <?php 
    settings_fields( 'findword-settings-group' ); 
    do_settings_sections( 'findword-settings-group' ); 
    
    ob_start(); 
    ?>
    <table class="form-table"><tbody>
        <tr valign="top">
        <th scope="row"><?php esc_html_e( 'Wrapper Class Name', 'findword-tsw'); ?></th>
        <td><input type="text" 
            name="fwtsw_option_main[fwtsw_wrapper_class]" 
            value="<?php echo esc_attr( 
            get_option('fwtsw_option_main')['fwtsw_wrapper_class'], 'hentry' ); ?>">
            <p><small><?php esc_html_e('Find class name of page content and add here.', 
            'findword-tsw'); ?></small></p></td>
        </tr>

        <tr valign="top">
        <th scope="row"><?php esc_html_e( 'Highlight Color', 'findword-tsw'); ?></th>
        <td><input type="color" 
            name="fwtsw_option_main[fwtsw_highlight_color]" 
            value="<?php echo esc_attr( 
            get_option( 'fwtsw_option_main')['fwtsw_highlight_color'], '#729fcf' ); ?>">
            <p><small><em><?php esc_html_e('Upgrade to FindWord Plus to activate. ', 
            'findword-tsw'); ?></em><a href="https://tradesouthwest.com/findword/" 
            title="<?php esc_attr_e('upgrade plugin link opens in new window', 'findword-tsw'); ?>" 
            target="_blank">Plus <sup>[^]</sup></a></small></p></td>
        </tr>

        









    </tbody></table>
        <?php submit_button(); ?>
        </form>

    <table class="form-table"><tbody>
        <tr valign="top">
        <th scope="row"><?php esc_html_e( 'Help/Instructions', 'findword-tsw'); ?>
        <br><small><?php esc_html_e( 'open arrows for more', 'findword-tsw'); ?></th>
        <td><details>
            <summary><?php esc_html_e( 'Use Widget for better page coverage', 'findword-tsw'); ?></summary>
            <p><small><?php esc_html_e('If you are wanting to include the sidebars and the header and the footer of the page as part of your search,  
in this case, you would change the name of the Wrapper Class to the same name as your body class for example, in which 
the body tag element would get a new data type of "data-finder-content" once you save your Wrapper Class name to the 
plugin Options Settings page. The default Wrapper class is hentry which, is the standard WP core article or post class.', 
            'findword-tsw'); ?></small></p>
            </details></td>
        </tr>

         <tr valign="top">
        <th scope="row"></th>
        <td><details>
            <summary><?php esc_html_e( 'How do I setup FindWord TSW to make it work?', 'findword-tsw'); ?></summary>
<p><?php esc_html_e( '1. Place widget FindWord or place shortcode `[findword]` to page.', 'findword-tsw'); ?></p>
<p><?php esc_html_e( '2. Find class name of page content and add to Setting: Wrapper Class Name', 'findword-tsw'); ?></p>
 </details></td>
        </tr>

        <tr valign="top">
        <th scope="row"></th>
        <td><details>
           <summary><?php esc_html_e( 'Why Buy FindWord TSW PLUS?', 'findword-tsw'); ?></summary>
            <small><ul><li><?php esc_html_e('Clipboard organizer to save keyword text to.', 'findword-tsw'); ?></li>
            <li><?php esc_html_e('Word counter for page text content.', 'findword-tsw'); ?></li>
            <li><?php esc_html_e('Clock for timing reads.', 'findword-tsw'); ?></li>
            <li><?php esc_html_e('Predefined text in Toolbox or add you own.', 'findword-tsw'); ?></li>
            <li><?php esc_html_e('Add promotion link or advert link to tool box.', 'findword-tsw'); ?></li>
            <li><?php esc_html_e('Change box-shadow and button colors as well as icons in buttons.', 'findword-tsw'); ?></li>
            <li><?php esc_html_e('Change pixel size inside findword content area.', 'findword-tsw'); ?></li>
            <li><em><?php esc_html_e('Upgrade to FindWord TSW Plus. ', 
            'findword-tsw'); ?></em><a href="<?php echo esc_url('https://tradesouthwest.com/findword/'); ?>" 
            title="<?php esc_attr_e('upgrade plugin link opens in new window', 'findword-tsw'); ?>" 
            class="button button-secondary" target="_blank">Findword TSW Plus <sup>[^]</sup></a></li>
            </ul></small>
            </details></td>
        </tr>
    </tbody></table>
    </div>
    
<?php echo ob_get_clean();
}
