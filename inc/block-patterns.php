<?php
/**
 * Alicorn Theme Theme: Block Patterns
 *
 * @package Alicorn Theme
 */

if ( ! function_exists( 'alicorn_register_block_patterns' ) ) :

	/**
	 * Register block patterns and categories.
	 */
	function alicorn_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'utilities',
				array( 'label' => __( 'Utilities', 'alicorn' ) )
			);
		}
	}
endif;

add_action( 'init', 'alicorn_register_block_patterns', 9 );
