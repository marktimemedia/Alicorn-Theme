<?php
/**
 * Title: Post Meta With Icons
 * Slug: alicorn/three-columns-image
 * Categories: utilities
 * Description: Post author, date, categories, and tags with icons
 * Keywords: categories, tags, author, date, post meta
 */

?>
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
    <!-- wp:group {"className":"post-meta post-meta-icons","layout":{"type":"flex"}} -->
    <div class="wp-block-group post-meta post-meta-icons">
        <!-- wp:post-author {"showAvatar":false,"showBio":false,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-small)"}},"className":"is-style-post-author-icon"} /-->
        <!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-small)"}},"className":"is-style-post-date-icon"} /-->
        <!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-small)"}},"className":"is-style-post-category-icon"} /-->
        <!-- wp:post-terms {"term": "post_tag","style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-small)"}},"className":"is-style-post-tag-icon"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->