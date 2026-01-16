<?php
/**
 * Title: Featured Case Studies — Build
 * Slug: twentytwentyfour/featured-projects-build
 * Categories: featured, posts
 * Viewport width: 1400
 * Description: Featured case studies grid for the build homepage.
 */
?>

<!-- wp:group {"className":"pattern-case-studies","layout":{"type":"constrained"}} -->
<div id="case-studies" class="wp-block-group pattern-case-studies"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><br><br>Recent Case Studies</h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":24,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[4]},"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"twentytwentyfour/posts-3-col","name":"List of posts"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","scale":"contain","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}},"shadow":"var:preset|shadow|natural"}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:0"><!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"typography":{"fontSize":"1.7rem","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"instrument-serif"} /-->

<!-- wp:post-excerpt {"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:read-more /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
