<?php
/**
 * Title: Archive Template: List
 * Slug: alicorn/template-archive-list
 * Template Types: date, tag, category, taxonomy
 * Inserter: no
 */
?>
<!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"Wrapper"},"className":"wrapper"} -->
<div class="wp-block-group wrapper">
	<!-- wp:template-part {"slug":"header-quicklinks","theme":"alicorn","tagName":"header","className":"header-sticky"} /-->
	<!-- wp:group {"lock":{"move":true,"remove":true},"className":"content-body","metadata":{"name":"Body"}} -->
	<div class="wp-block-group content-body">
		<!-- wp:group {"lock":{"move":true,"remove":true},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"content-header","layout":{"inherit":true,"type":"constrained"},"metadata":{"name":"Content Header"}} -->
		<div class="wp-block-group content-header" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:query-title {"type":"archive"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"tagName":"main","lock":{"move":true,"remove":true},"metadata":{"name":"Content Main"},"className":"content-main","style":{"spacing":{"margin":{"top":0,"bottom":0}}},"layout":{"type":"constrained"}} -->
		<main class="wp-block-group content-main">
			<!-- wp:pattern {"slug":"alicorn/query-list-archive"} /-->
		</main>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:template-part {"slug":"footer-columns","theme":"alicorn","tagName":"footer","className":"site-footer-container"} /-->
</div>
<!-- /wp:group -->
