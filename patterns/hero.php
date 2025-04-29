<?php
/**
 * Title: Hero
 * Slug: alicorn/hero
 * Categories: banner, buttons
 * Description: Hero image with title and call to action
 * Keywords: hero, cover, callout, image
 * Block Types: core/cover
 */

?>
<!-- wp:cover {"dimRatio":10,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":40,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"tagName":"section","lock":{"move":false,"remove":false},"metadata":{"name":"Hero"},"align":"full","className":"alicorn-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull is-light alicorn-hero" style="margin-top:0;margin-bottom:0;min-height:40vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"lock":{"move":true,"remove":true},"className":"alicorn-hero__callout","style":{"dimensions":{"minHeight":"100%"},"layout":{"type":"constrained"}}} -->
			<div class="wp-block-group alicorn-hero__callout" style="min-height:100%">
				<!-- wp:heading {"level":1,"className":"alicorn-hero__heading","style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<h1 class="wp-block-heading alicorn-hero__heading" style="margin-bottom:var(--wp--preset--spacing--20);line-height:1.1">Custom hero title that might be different than the page title</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Some short explanatory text to support the callout. You don’t need more than a couple of sentences.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0">
					<!-- wp:button {"className":"is-style-secondary-button"} -->
					<div class="wp-block-button is-style-secondary-button"><a class="wp-block-button__link wp-element-button">Call to action</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-button-secondary"} -->
					<div class="wp-block-button is-style-button-secondary"><a class="wp-block-button__link wp-element-button">Additional call to action</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
</section>
<!-- /wp:cover -->
