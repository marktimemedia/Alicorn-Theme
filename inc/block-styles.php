<?php
/**
 * Alicorn Theme Theme: Block Styles
 *
 * @package Alicorn Theme
 */

if ( function_exists( 'register_block_style' ) ) {

	register_block_style(
		'core/navigation',
		array(
			'name'  => 'alicorn-megamenu',
			'label' => __( 'Megamenu', 'alicorn' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'button-secondary',
			'label' => __( 'Secondary', 'alicorn' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'button-reverse',
			'label' => __( 'Reverse', 'alicorn' ),
		)
	);

}
