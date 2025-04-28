<?php

/**
 * Local Custom1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Local_Custom_Theme
 * @since Local Custom1 1.0
 */


if (! function_exists('localwptheme_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Local Custom1 1.0
	 *
	 * @return void
	 */
	function localwptheme_support()
	{

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');
	}

endif;

add_action('after_setup_theme', 'localwptheme_support');

if (! function_exists('localwptheme_styles')) :

	/**
	 * Enqueue styles.
	 *
	 * @since Local Custom1 1.0
	 *
	 * @return void
	 */
	function localwptheme_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'localwptheme-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('localwptheme-style');
	}

endif;

add_action('wp_enqueue_scripts', 'localwptheme_styles');

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
