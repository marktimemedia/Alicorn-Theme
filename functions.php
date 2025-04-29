<?php
/**
 * Functions file.
 *
 * Theme constants, settings, and enqueue of necessary theme files.
 *
 * @package alicorn
 */

/**
 * Theme supports.
 */
if ( ! function_exists( 'alicorn_support' ) ) {
	/**
	 * Add Theme Support
	 */
	function alicorn_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'alicorn' );
		if ( ! 'alicorn' === wp_get_theme()->get( 'TextDomain' ) ) {
			load_theme_textdomain( wp_get_theme()->get( 'TextDomain' ) );
		}

		// Add support for responsive embedded content.
		// See https://github.com/WordPress/gutenberg/issues/26901.
		add_theme_support( 'responsive-embeds' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Declare that there are no <title> tags and allow WordPress to provide them.
		add_theme_support( 'title-tag' );

		// Experimental support for adding blocks inside nav menus.
		add_theme_support( 'block-nav-menus' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Don't use core WordPress patterns, only ours.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'alicorn_support', 9 );

/**
 *
 * Enqueue frontend scripts and styles.
 */
function alicorn_enqueue_frontend_scripts() {
	// Custom theme styles.
	wp_enqueue_style( 'alicorn-base', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'alicorn-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), alicorn_get_asset_version( get_template_directory() . '/assets/css/styles.css' ) );
	// Dependencies.
	wp_enqueue_script( 'jquery' );
	// Custom theme scripts.
	wp_enqueue_script( 'alicorn-editor-scripts', get_template_directory_uri() . '/assets/js/build/index.js', array( 'jquery' ), array(), alicorn_get_asset_version( get_template_directory() . '/assets/js/build/index.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'alicorn_enqueue_frontend_scripts' );

/***
 * Enqueue frontend styles in the editor.
 */
add_editor_style( array( '/assets/css/styles.css' ) );

/***
 * Enqueue block editor-specific scripts.
 */
function alicorn_enqueue_editor_scripts() {
	wp_enqueue_script( 'alicorn-editor-scripts', get_template_directory_uri() . '/assets/js/editor.js', array( 'wp-blocks' ), array(), alicorn_get_asset_version( get_template_directory() . '/assets/js/editor.js' ), true );
}
add_action( 'enqueue_block_editor_assets', 'alicorn_enqueue_editor_scripts' );

/***
 * Enqueue block editor-specific styles.
 */
function alicorn_enqueue_editor_styles() {
	// If you want to add styles exclusively for the block editor, use is_admin().
	if ( is_admin() ) {
		wp_enqueue_style( 'alicorn-editor-styles', get_template_directory_uri() . '/assets/css/editor-styles.css', array(), alicorn_get_asset_version( get_template_directory() . '/assets/css/editor-styles.css' ) );
	}
}
add_action( 'enqueue_block_assets', 'alicorn_enqueue_editor_styles' );

/**
 * Include the rest of the theme files
 */
foreach ( glob( __DIR__ . '/inc/*.php' ) as $alicorn_filename ) {
	if ( preg_match( '#/inc/_#i', $alicorn_filename ) ) {
		continue; // Ignore files prefixed with an underscore.
	}

	include $alicorn_filename;
}
