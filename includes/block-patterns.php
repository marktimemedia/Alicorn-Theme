<?php
/**
 * Alicorn Theme Theme: Block Patterns
 *
 * @package Alicorn Theme
 */
if ( ! function_exists( 'alicorn_register_block_patterns' ) ) :

	function alicorn_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'utilities',
				array( 'label' => __( 'Utilities', 'alicorn' ) )
			);
			register_block_pattern_category(
				'headers',
				array( 'label' => __( 'Headers', 'alicorn' ) )
			);
			register_block_pattern_category(
				'footers',
				array( 'label' => __( 'Footers', 'alicorn' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {

			//register header templates also as patterns
			$header_patterns = array(
				'basic',
				'centered',
				'quicklinks',
			);

			foreach ( $header_patterns as $header_pattern ) {
				register_block_pattern(
					'alicorn/header-' . $header_pattern,
					array(
						'title'      => __( 'Alicorn Theme Header (' . $header_pattern . ')', 'alicorn' ),
						'categories' => array( 'headers' ),
						'blockTypes' => array( 'core/template-part/header' ),
						'content'    => file_get_contents (get_template_directory() . '/parts/header-' . $header_pattern . '.html'),
					)
				);
			}

			//register footer templates also as patterns
			$footer_patterns = array(
				'utility',
				'horizontal',
				'columns'
			);

			foreach ( $footer_patterns as $footer_pattern ) {
				register_block_pattern(
					'alicorn/footer-' . $footer_pattern,
					array(
						'title'      => __( 'Alicorn Theme Footer (' . $footer_pattern . ')', 'alicorn' ),
						'categories' => array( 'footers' ),
						'blockTypes' => array( 'core/template-part/footer' ),
						'content'    => file_get_contents (get_template_directory() . '/parts/footer-' . $footer_pattern . '.html'),
					)
				);
			}
		}
	}
endif;

add_action( 'init', 'alicorn_register_block_patterns', 9 );
