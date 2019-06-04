<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


// Add custom js
function my_JS() {

	wp_deregister_script( 'jquery' );

	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', '', 1, true );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'magnificpopup', get_template_directory_uri() . '/js/magnificpopup.js', array(), 1, true );
	wp_enqueue_script( 'magnificpopup' );

	wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), 1, true );
	wp_enqueue_script( 'custom-js' );
}

add_action( 'wp_enqueue_scripts', 'my_JS' );
