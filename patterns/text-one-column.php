<?php
/**
 * Title: One Column Content
 * Slug: alicorn/text-one-column
 * Categories: text, columns, sections
 * Description: One column of content with subheading and lede
 * Keywords: columns, two columns, subheadings, read more
 */

?>
<!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"name":"Content Group"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:700">Optional subheading</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"emphasis"} -->
		<p class="has-emphasis-font-size">The first paragraph might be larger, and provide a summary of the content that follows, or communicate the big ideas prior to the details. It should be no longer than a few sentences and serve to encourage further reading below.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>This section can contain multiple paragraphs, images, media, cards, lists, or other content that is not designed to be full-width. The group container provides spacing around this content to allow for easier readability, and to constrain the width so the content remains legible.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
