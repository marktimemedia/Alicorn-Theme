<?php
/**
 * Title: Two Columns with Subheadings
 * Slug: alicorn/two-columns-text
 * Categories: columns
 * Description: Two columns of text with subheadings
 * Keywords: columns, two columns, subheadings, read more
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
	<!-- wp:heading {"level":3,"placeholder":"Column subheading..."} -->
	<h3></h3>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"placeholder":"Add an inner paragraph..."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph -->
	<p><a class="cta-link read-more" href="#"><?php echo esc_html__( 'Learn More', 'alicorn' ); ?></a></p>
	<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
	<!-- wp:heading {"level":3,"placeholder":"Column subheading..."} -->
	<h3></h3>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"placeholder":"Add an inner paragraph..."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph -->
	<p><a class="cta-link read-more" href="#"><?php echo esc_html__( 'Learn More', 'alicorn' ); ?></a></p>
	<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->