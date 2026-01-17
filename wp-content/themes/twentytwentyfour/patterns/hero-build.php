<?php
/**
 * Title: Hero — Build
 * Slug: twentytwentyfour/hero-build
 * Categories: featured, text
 * Viewport width: 1400
 * Description: Hero section for the build homepage.
 */
?>

<!-- wp:group {"align":"wide","className":"pattern-hero hero-build","style":{"spacing":{"padding":{"top":"96px","bottom":"96px"}},"dimensions":{"minHeight":"70vw"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide pattern-hero hero-build" id="hero" style="min-height:70vw;padding-top:96px;padding-bottom:96px">
	<div class="hero-build__icons" aria-hidden="true">
		<!-- data-in = start pose (top of page), data-out = expanded pose (after scroll), values are px offsets from the CTA center -->
		<!-- Left cluster -->
		<img class="hero-build__icon hero-build__icon--chatgpt" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-chatgpt.png' ) ); ?>" width="72" height="72" alt="" data-in-x="-300" data-in-y="-420" data-out-x="-470" data-out-y="-560" data-rotate="-8" />
		<img class="hero-build__icon hero-build__icon--local" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-local.png' ) ); ?>" width="72" height="72" alt="" data-in-x="-440" data-in-y="-290" data-out-x="-620" data-out-y="-390" data-rotate="-12" />
		<img class="hero-build__icon hero-build__icon--terminal" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-terminal.png' ) ); ?>" width="72" height="72" alt="" data-in-x="-500" data-in-y="-160" data-out-x="-700" data-out-y="-230" data-rotate="-6" />
		<img class="hero-build__icon hero-build__icon--vscode" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-vscode.png' ) ); ?>" width="72" height="72" alt="" data-in-x="-140" data-in-y="-360" data-out-x="-210" data-out-y="-490" data-rotate="6" />
		<!-- Right cluster -->
		<img class="hero-build__icon hero-build__icon--github" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-github.png' ) ); ?>" width="72" height="72" alt="" data-in-x="300" data-in-y="-400" data-out-x="460" data-out-y="-540" data-rotate="8" />
		<img class="hero-build__icon hero-build__icon--vercel" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-vercel.png' ) ); ?>" width="72" height="72" alt="" data-in-x="460" data-in-y="-260" data-out-x="640" data-out-y="-340" data-rotate="10" />
		<img class="hero-build__icon hero-build__icon--wordpress" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-wordpress.png' ) ); ?>" width="72" height="72" alt="" data-in-x="170" data-in-y="-300" data-out-x="250" data-out-y="-400" data-rotate="-8" />
	</div>
	<div class="hero-build__content">
		<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">You can just build things.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Subtext</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-build__cta","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons hero-build__cta"><!-- wp:button {"textAlign":"center","className":"hero-build__cta-button"} -->
<div class="wp-block-button hero-build__cta-button"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#case-studies">VIEW CASE STUDIES</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
</div>
</div>
<!-- /wp:group -->
