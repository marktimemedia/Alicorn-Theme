<?php
/**
 * Title: Post Meta: Date & Categories
 * Slug: alicorn/post-meta-date-categories
 * Categories: utilities
 * Description: Display the post author and categories
 * Keywords: post meta, author, date
 */

?>
<!-- wp:group {"metadata":{"name":"Metadata"},"className":"post-meta post-meta-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"fontSize":"x-small","layout":{"type":"flex","verticalAlignment":"center","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group post-meta post-meta-text has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:post-date {"style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->
<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"}}} /--></div>
<!-- /wp:group -->