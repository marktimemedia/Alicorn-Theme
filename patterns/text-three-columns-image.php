<?php
/**
 * Title: Three Column Content with Images
 * Slug: alicorn/three-columns-image
 * Categories: text, columns, sections
 * Description: Three columns of text with images
 * Keywords: columns, three columns, images, read more
 */

?>
<!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"name":"Content Group"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:700">Optional subheading</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"emphasis"} -->
		<p class="has-emphasis-font-size">The first paragraph might be larger, and provide a summary of the content that follows, or communicate the big ideas prior to the details. It should be no longer than a few sentences and serve to encourage further reading below.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
				<figure class="wp-block-image" style="margin-bottom:var(--wp--preset--spacing--30)"><img alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"placeholder":"Column subheading..."} -->
				<h3 class="wp-block-heading">Column subheading</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"placeholder":"Add an inner paragraph..."} -->
				<p>Column content should be related to each other in some way, such as different programs offered by an agency, or different elements of a larger idea.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Call To Action</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
				<figure class="wp-block-image" style="margin-bottom:var(--wp--preset--spacing--30)"><img alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"placeholder":"Column subheading..."} -->
				<h3 class="wp-block-heading">Column subheading</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"placeholder":"Add an inner paragraph..."} -->
				<p>The call to action is optional, and should use descriptive text rather than a generic "Learn More" message. This call to action could send visitors to another page on your site, or to an external site.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Call To Action</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
				<figure class="wp-block-image" style="margin-bottom:var(--wp--preset--spacing--30)"><img alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"placeholder":"Column subheading..."} -->
				<h3 class="wp-block-heading">Column subheading</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"placeholder":"Add an inner paragraph..."} -->
				<p>It is best to limit the subheading to one or two lines, and the content in the column to one or two short paragraphs, in order to encourage further reading.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Call To Action</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
