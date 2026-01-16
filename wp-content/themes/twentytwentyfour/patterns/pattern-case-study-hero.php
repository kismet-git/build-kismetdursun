<?php
/**
 * Title: Pattern: Case Study Hero
 * Slug: twentytwentyfour/pattern-case-study-hero
 * Categories: my-patterns
 * Description: Hero section for narrative case studies with outcome, AI framing, and CTAs.
 */
?>

<!-- wp:group {"tagName":"section","className":"case-study-hero pattern-case-study-hero"} -->
<section class="wp-block-group case-study-hero pattern-case-study-hero">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading">Case Study Title</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large","className":"case-study-outcome"} -->
	<p class="case-study-outcome has-large-font-size">One-line outcome goes here.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"muted","className":"case-study-framing"} -->
	<p class="case-study-framing has-muted-color has-text-color">AI made this possible by turning a fragile idea into a system I could trust.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":"vibe-sticky-cta case-study-hero-cta"} -->
	<div class="wp-block-buttons vibe-sticky-cta case-study-hero-cta">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">View Live Project</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">View the Build</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
