<?php
/**
 * Title: Page Template: Standard
 * Slug: alicorn/template-standard-page
 * Template Types: front-page, page, single, singular, privacy-policy
 * Inserter: no
 */
?>
<!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"Wrapper"},"className":"wrapper"} -->
<div class="wp-block-group wrapper">
  <!-- wp:template-part {"slug":"header-quicklinks","theme":"alicorn","tagName":"header","className":"header-sticky"} /-->

  <!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"Body"},"className":"content-body"} -->
  <div class="wp-block-group content-body">
    <!-- wp:group {"tagName":"main","lock":{"move":true,"remove":true},"metadata":{"name":"Content Main"},"className":"content-main","style":{"spacing":{"margin":{"top":0,"bottom":0}}},"layout":{"type":"constrained"}} -->
    <main class="wp-block-group content-main">
      <!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
    </main>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  
  <!-- wp:template-part {"slug":"footer-columns","theme":"alicorn","tagName":"footer","className":"site-footer-container"} /-->
</div>
<!-- /wp:group -->
 