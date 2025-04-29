<?php
/**
 * Title: Post Meta: Date & Author
 * Slug: alicorn/post-meta-date-author
 * Categories: utilities
 * Description: Display the post author and the publish date
 * Keywords: post meta, author, date
 */

?>
<!-- wp:group {"metadata":{"name":"Metadata"},"className":"post-meta post-meta-text","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|05"}},"fontSize":"x-small","layout":{"type":"flex","verticalAlignment":"center","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group post-meta post-meta-text has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:post-date {"style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0;line-height:1.1">by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"isLink":true,"style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->