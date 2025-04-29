<?php
/**
 * Title: Large Page Header
 * Slug: alicorn/page-header-large
 * Categories: banner
 * Description: Page header with hero image
 * Keywords: hero, cover, callout, image
 * Block Types: core/cover
 */

?>
<!-- wp:cover {"dimRatio":10,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"tagName":"section","lock":{"move":false,"remove":false},"metadata":{"name":"Large Page Header"},"align":"full","className":"alicorn-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull is-light alicorn-hero" style="margin-top:0;margin-bottom:0;min-height:20vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<!-- wp:group {"lock":{"move":true,"remove":true},"className":"alicorn-hero__callout","style":{"dimensions":{"minHeight":"100%"},"backgroundColor":"primary-darker","textColor":"reverse","layout":{"type":"constrained"}}} -->
			<div class="wp-block-group alicorn-hero__callout has-background-background-color has-background has-link-color" style="min-height:100%;">
				<!-- wp:post-title {"level":1,"className":"alicorn-hero__heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}}} /-->
			</div>
			<!-- /wp:group -->
			</div>
		<!-- /wp:column -->
		</div>
	<!-- /wp:columns -->
	</div>
</section>
<!-- /wp:cover -->
