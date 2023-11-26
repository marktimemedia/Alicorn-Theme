<?php
/**
 * Title: Toggleable Search
 * Slug: alicorn/toggle-search
 * Categories: utilities
 * Description: A search form with button toggle
 * Keywords: search, form
 */

?>
<!-- wp:group {"className":"search-toggle-container","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-group search-toggle-container">
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"search-toggle-form is-style-small-search"} /-->
<!-- wp:button {"className":"search-toggle-trigger run-toggle is-style-outline"} -->
<div class="wp-block-button search-toggle-trigger run-toggle is-style-outline">
	<a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Toggle Search Bar', 'alicorn' ); ?></a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:group -->