<?php
/**
 * Alicorn Theme Theme: Block Styles
 *
 * @package Alicorn Theme
 */

if ( function_exists( 'register_block_style' ) ) {

	$screen_args = array(
		'name'  => 'full-screen',
		'label' => __( 'Full Screen', 'imfto' )
	);

	// Fullscreen
	register_block_style( 'core/cover', $screen_args );
	register_block_style( 'core/group', $screen_args );
	register_block_style( 'core/row', $screen_args );
	register_block_style( 'core/stack', $screen_args );

}
