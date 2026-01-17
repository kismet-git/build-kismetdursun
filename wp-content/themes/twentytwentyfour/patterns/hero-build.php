<?php
/**
 * Title: Hero — Build
 * Slug: twentytwentyfour/hero-build
 * Categories: featured, text
 * Viewport width: 1400
 * Description: Hero section for the build homepage.
 */
?>

<!-- wp:group {"align":"wide","className":"pattern-hero hero-build","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide pattern-hero hero-build" id="hero">
	<div class="hero-build__icons" aria-hidden="true">
		<!-- data-in = start pose (top of page), data-out = outward drift (after scroll), offsets are from CTA center -->
		<img class="hero-build__icon hero-build__icon--chatgpt" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-chatgpt.png' ) ); ?>" width="72" height="72" alt="" data-in-x="-750" data-in-y="-570" data-out-x="-800" data-out-y="-640" data-rotate="-8" data-scale="1.02" />
		<img class="hero-build__icon hero-build__icon--local" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-local.png' ) ); ?>" width="72" height="72" alt="" data-in-x="-610" data-in-y="-390" data-out-x="-660" data-out-y="-440" data-rotate="-12" data-scale="0.98" />
		<img class="hero-build__icon hero-build__icon--terminal" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-terminal.png' ) ); ?>" width="72" height="72" alt="" data-in-x="-510" data-in-y="-240" data-out-x="-570" data-out-y="-280" data-rotate="-6" data-scale="1" />
		<img class="hero-build__icon hero-build__icon--vscode" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-vscode.png' ) ); ?>" width="72" height="72" alt="" data-in-x="610" data-in-y="-270" data-out-x="660" data-out-y="-320" data-rotate="6" data-scale="0.96" />
		<img class="hero-build__icon hero-build__icon--github" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-github.png' ) ); ?>" width="72" height="72" alt="" data-in-x="750" data-in-y="-570" data-out-x="800" data-out-y="-640" data-rotate="8" data-scale="1.02" />
		<img class="hero-build__icon hero-build__icon--vercel" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-vercel.png' ) ); ?>" width="72" height="72" alt="" data-in-x="610" data-in-y="-370" data-out-x="670" data-out-y="-420" data-rotate="10" data-scale="0.98" />
		<img class="hero-build__icon hero-build__icon--wordpress" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero/icon-wordpress.png' ) ); ?>" width="72" height="72" alt="" data-in-x="520" data-in-y="-250" data-out-x="570" data-out-y="-290" data-rotate="-8" data-scale="0.96" />
		<div class="hero-build__debug-anchor" aria-hidden="true"></div>
	</div>
	<div class="hero-build__content">
		<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">You can just build things.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Subtext</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hero-build__cta","layout":{"type":"constrained"}} -->
<div class="wp-block-group hero-build__cta">
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"textAlign":"center","className":"hero-build__cta-button"} -->
		<div class="wp-block-button hero-build__cta-button"><a class="wp-block-button__link has-text-align-center wp-element-button" href="#case-studies">VIEW CASE STUDIES</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<div class="hero-build__cta-nav" aria-hidden="true">
		<div class="hero-build__cta-nav-inner">
			<span class="hero-build__cta-logo" aria-hidden="true"></span>
			<nav class="hero-build__cta-links" aria-label="Site">
				<a href="#case-studies">Case Studies</a>
				<a href="/blog">Blog</a>
				<a href="#contact">Contact</a>
			</nav>
		</div>
	</div>
</div>
<!-- /wp:group -->
		<div class="hero-build__cta-spacer" aria-hidden="true"></div>
		<div class="hero-build__debug-readout" aria-hidden="true"></div>
	</div>
</div>
<!-- /wp:group -->
