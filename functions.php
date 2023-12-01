<?php
if ( ! function_exists( 'alicorn_support' ) ) :
	function alicorn_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'alicorn' );
		if ( ! 'alicorn' === wp_get_theme()->get( 'TextDomain' ) ) {
			load_theme_textdomain( wp_get_theme()->get( 'TextDomain' ) );
		}
		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for responsive embedded content.
		// https://github.com/WordPress/gutenberg/issues/26901
		add_theme_support( 'responsive-embeds' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Declare that there are no <title> tags and allow WordPress to provide them
		add_theme_support( 'title-tag' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 200,
				'width'       => 200,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Don't use core WordPress patterns, only ours
		remove_theme_support('core-block-patterns');

		// Enqueue theme css in editor styles
		add_editor_style( array( '/style-editor.css', ) );

		add_filter(
			'block_editor_settings_all',
			function( $settings ) {
				$settings['defaultBlockTemplate'] = '<!-- wp:group {"layout":{"inherit":true}} --><div class="wp-block-group"><!-- wp:post-content /--></div><!-- /wp:group -->';
				return $settings;
			}
		);

	}
endif;
add_action( 'after_setup_theme', 'alicorn_support', 9 );


/**
 *
 * Enqueue child editor scripts and styles.
 */
function alicorn_editor_styles() {

	// Add the child theme CSS if it exists.
	if ( file_exists( get_stylesheet_directory() . '/assets/theme.css' ) ) {
		add_editor_style( '/assets/theme.css' );
	}
}
add_action( 'admin_init', 'alicorn_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function alicorn_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'alicorn-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	// custom theme scripts
	wp_enqueue_script( 'header-resize', get_template_directory_uri() . '/assets/js/build/index.js', '', 1, true );

	// Add the child theme CSS if it exists.
	if ( file_exists( get_stylesheet_directory() . '/assets/theme.css' ) ) {
		wp_enqueue_style( 'alicorn-child-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'alicorn-styles' ), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'alicorn_scripts' );


/**
 * Customize Global Styles
 */
require get_template_directory() . '/includes/fonts/custom-fonts.php';


/**
 * Block Patterns.
 */
require get_template_directory() . '/includes/block-patterns.php';

// Add the child theme patterns if they exist.
if ( file_exists( get_stylesheet_directory() . '/includes/block-patterns.php' ) ) {
	require_once get_stylesheet_directory() . '/includes/block-patterns.php';
}

/**
 * Block Styles.
 */
require get_template_directory() . '/includes/block-styles.php';

// Add the child theme patterns if they exist.
if ( file_exists( get_stylesheet_directory() . '/includes/block-styles.php' ) ) {
	require_once get_stylesheet_directory() . '/includes/block-styles.php';
}