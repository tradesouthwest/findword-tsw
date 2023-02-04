<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://tradesouthwest.com
 * @since      1.0.5
 *
 * @package    Findword_Tsw
 * @subpackage Findword_Tsw/public/partials
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function findword_render_public_shortcode( ){
        $html = '';
    $atname = ( empty( get_option('fwtsw_option_main')['fwtsw_wrapper_class'] ) ) 
                ? 'hentry' 
                : get_option('fwtsw_option_main')['fwtsw_wrapper_class'];
    $subtxt = ( empty( get_option('fwtsw_option_plus')['fwtsw_submit_text'] ) ) 
                ? __( 'Open Finder', 'findword-tsw' ) 
                : get_option('fwtsw_option_plus')['fwtsw_submit_text'];

    $html .= '<div class="findwordtsw-widget-container">';
        
   
    $html .= '<div class="findword-app" data-finder-wrapper 
                data-finder-scroll-offset="175">

                <button class="finder-activator" data-finder-activator>'
                . esc_attr__( $subtxt, 'findword-tsw' ) . '</button>';

    $html .= '</div>
            <script id="findword-footer-attribute">
            jQuery(document).ready(function(){
            jQuery(".'. esc_attr($atname) . '").attr("data", "data-finder-content");
            });	</script>';

    $html .= '</div>';

        return $html;
}
