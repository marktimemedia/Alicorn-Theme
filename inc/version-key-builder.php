<?php
/**
 * Build a version key for things that need to be enqueued.
 * This is used to ensure that assets are re-enqueued when they change.
 */
function alicorn_get_asset_version( $asset_path ) {

	// Build file path.
	$build_file = get_template_directory() . '/build/index.asset.php';

	// If the build file or asset path does not exist, return a unique ID.
	if ( ! file_exists( $build_file ) || ! file_exists( $asset_path ) ) {
		return uniqid();
	}

	// Get the asset info.
	$asset_info = require get_template_directory() . '/build/index.asset.php';

	// If it has the key we need, return it.
	if ( array_key_exists( 'version', $asset_info ) ) {
		return $asset_info['version'];
	}

	// If the version key is not found, return the filemtime of the asset.
	return filemtime( $asset_path );
}
