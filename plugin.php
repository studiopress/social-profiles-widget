<?php
/**
 * Plugin Name: Social Profiles Widget
 * Plugin URI: https://wordpress.org/plugins/social-profiles-widget
 * Description: This plugin/widget allows you to insert social profile icons into your sidebar via a widget.
 * Author: Nathan Rice
 * Author URI: https://www.nathanrice.net/

 * Version: 1.2.4

 * License: GNU General Public License v2.0
 * License URI: https://www.opensource.org/licenses/gpl-license.php

 * NOTE: This plugin is released under the GPLv2 license. The images packaged with this plugin are the property
 * of their respective owners, and do not, necessarily, inherit the GPLv2 license.
 *
 * @package social-profiles-widgets
 */

define( 'SOCIAL_PROFILES_WIDGET_DIR', plugin_dir_path( __FILE__ ) );
define( 'SOCIAL_PROFILES_WIDGET_URL', plugins_url( '', __FILE__ ) );

if ( ! class_exists( 'Social_Profiles_Widget' ) ) {
	require_once SOCIAL_PROFILES_WIDGET_DIR . '/includes/class-social-profiles-widget.php';
}

add_action( 'widgets_init', 'social_profiles_widget_register' );

/**
 * Register widget.
 */
function social_profiles_widget_register() {
	register_widget( 'Social_Profiles_Widget' );
}
