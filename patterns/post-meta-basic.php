<?php
/**
 * Title: Post Author And Date
 * Slug: alicorn/post-meta-basic
 * Categories: utilities
 * Description: Display the post author and the publish date
 * Keywords: post meta, author, date
 */

?>
<!-- wp:group {"className":"post-meta post-meta-text","layout":{"type":"flex"}} -->
<div class="wp-block-group post-meta post-meta-text">
	<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dfont-sizes\u002d\u002dx-small)"}}} /-->
	<!-- wp:paragraph -->
	<p>by</p>
	<!-- /wp:paragraph -->
	<!-- wp:post-author {"showAvatar":false,"showBio":false,"style":{"typography":{"fontSize":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dfont-sizes\u002d\u002dx-small)"}}} /-->
</div>
<!-- /wp:group -->
