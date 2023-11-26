<?php
/**
 * Title: Comments
 * slug: alicorn/comments
 * inserter: no
 */

?>
<!-- wp:group {"backgroundColor":"gray-100","className":"content-comments","layout":{"type":"constrained"}} -->
<div class="wp-block-group content-comments has-gray-100-background-color has-background"><!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"white"} -->
<div class="wp-block-column has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"10px"}}}} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"format":"F j, Y \\a\\t g:i a","fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:comment-reply-link {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination --></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"content-comments-form","layout":{"type":"constrained"}} -->
<div class="wp-block-group content-comments-form has-white-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:post-comments-form /--></div>
<!-- /wp:group -->