<?php
/**
 * Title: Archive List
 * slug: alicorn/query-list-archive
 * inserter: no
 */

?>

<!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"Archive List (Inherit)"},"align":"full","style":{"spacing":{"margin":{"top":0,"bottom":0},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"lock":{"move":true,"remove":true},"metadata":{"name":"Archive Query (Inherit)"},"className":"aliconrn-query","layout":{"contentSize":null,"type":"constrained"}} -->
	<div class="wp-block-query alicorn-query">
		<!-- wp:post-template {"lock":{"move":true,"remove":true},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default","columnCount":3}} -->
			<!-- wp:group {"className":"alicorn-query__group alicorn-list","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"metadata":{"name":"List Item"}} -->
			<div class="wp-block-group alicorn-query__group alicorn-list" style="min-height:100%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","sizeSlug":"medium"} /-->

			<!-- wp:group {"className":"alicorn-query__body","layout":{"type":"constrained"},"metadata":{"name":"Content"}} -->
			<div class="wp-block-group alicorn-query__body"><!-- wp:post-title {"isLink":true} /-->

			<!-- wp:pattern {"slug":"alicorn/post-meta-date-categories"} /-->

			<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} /--></div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:group {"className":"content-pagination","layout":{"inherit":true,"type":"constrained"},"metadata":{"name":"Pagination"}} -->
		<div class="wp-block-group content-pagination">
			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
