<?php
/**
 * One World Love functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OneWorldLove
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Bootstrap the theme.
 */
require get_template_directory() . '/inc/class-theme-base.php';
require get_template_directory() . '/inc/class-theme.php';

new OneWorldLove\Theme();


