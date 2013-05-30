<?php
/**
 * Functions
 *
 * @author Your Inspiration Themes
 * @package YITH Maintenance Mode
 * @version 1.0.0
 */

if ( !defined( 'YITH_MAINTENANCE' ) ) { exit; } // Exit if accessed directly

if( !function_exists( 'yith_maintenance_is_enabled' ) ) {
    /**
     * Return if the plugin is enabled
     *
     * @return bool
     * @since 1.0.0
     */
    function yith_maintenance_is_enabled() {
        return get_option('yith_maintenance_enable') == '1';
    }
}