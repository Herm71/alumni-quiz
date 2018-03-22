<?php
/**
 * General
 *
 * This file contains any general functions
 *
 * @package      BB_Custom_Functionality
 * @since        1.0.0
 * @link         https://github.com/Herm71/blackbird-core-functionality-plugin.git
 * @author       Blackbird Consulting <info@blackbirdconsult.com>
 * @copyright    Copyright (c) 2015, Blackbird Consulting
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
 
/**
 * Don't Update Plugin
 * @since 1.0.0
 * 
 * This prevents you being prompted to update if there's a public plugin
 * with the same name.
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param array $r, request arguments
 * @param string $url, request url
 * @return array request arguments
 */
function bb_custom_functionality_hidden( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/plugins/update-check' ) )
		return $r; // Not a plugin update request. Bail immediately.
	$plugins = unserialize( $r['body']['plugins'] );
	unset( $plugins->plugins[ plugin_basename( __FILE__ ) ] );
	unset( $plugins->active[ array_search( plugin_basename( __FILE__ ), $plugins->active ) ] );
	$r['body']['plugins'] = serialize( $plugins );
	return $r;
}
add_filter( 'http_request_args', 'bb_custom_functionality_hidden', 5, 2 );

// Use shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );

// Enqueue jQuery Libraries
function add_jQuery_libraries() {
 
    // Registering Scripts
     wp_register_script('google-hosted-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false);

	 wp_register_script('jquery-validation-plugin', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js', array('google-hosted-jquery'));
	 
	 wp_register_script('clear-form', plugins_url('js/clear-form.js', __DIR__), array('jquery'),'1.1', true);

    // Enqueueing Scripts to the head section
    wp_enqueue_script('google-hosted-jquery');
	wp_enqueue_script('jquery-validation-plugin');
	wp_enqueue_script('clear-form');
}
// Wordpress action that says, hey wait! lets add the scripts mentioned in the function as well.
add_action( 'wp_enqueue_scripts', 'add_jQuery_libraries' );