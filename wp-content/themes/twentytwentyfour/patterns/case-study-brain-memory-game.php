<?php
/**
 * Title: Case Study: Brain Memory Game
 * Slug: twentytwentyfour/case-study-brain-memory-game
 * Categories: my-patterns
 * Description: Full narrative case study page for Brain Memory Game.
 */
?>

<!-- wp:group {"tagName":"main","className":"case-study case-study-brain-memory-game"} -->
<main class="wp-block-group case-study case-study-brain-memory-game">
	<!-- wp:group {"tagName":"section","className":"case-study-hero pattern-case-study-hero"} -->
	<section class="wp-block-group case-study-hero pattern-case-study-hero">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Brain Memory Game</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","className":"case-study-outcome"} -->
		<p class="case-study-outcome has-large-font-size">I shipped a production-grade memory game with SEO landing pages, mobile-first UX, and ad-ready infrastructure using AI as my main build partner.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"muted","className":"case-study-framing"} -->
		<p class="case-study-framing has-muted-color has-text-color">AI made it possible to move from idea to production in hours without skipping the hard parts that make a real site work.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"vibe-sticky-cta case-study-hero-cta"} -->
		<div class="wp-block-buttons vibe-sticky-cta case-study-hero-cta">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.brainmemorygame.com/">View Live Project</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/kismet-git/brain-memory-game">View the Build</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-origin pattern-case-study-section"} -->
	<section class="wp-block-group case-study-origin pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Why I Tried This</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>I wanted to ship a real product, not a demo. A game that felt polished, could rank in search, and could eventually monetize without turning into a long engineering project.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>As a solo builder, the mix of gameplay, SEO, and mobile polish felt like too much to do well. AI changed that. It gave me a way to move fast without ignoring the details that make a site credible.</p>
		<!-- /wp:paragraph -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-expectations pattern-case-study-section"} -->
	<section class="wp-block-group case-study-expectations pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">What I Thought It Would Be</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>I thought it was a simple game build and a quick deploy. I underestimated how much work it would take to make the experience feel complete.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>SEO pages, metadata, legal pages, icon systems, and mobile navigation were all bigger than I expected. The real effort was keeping those layers from polluting the gameplay loop.</p>
		<!-- /wp:paragraph -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-reality pattern-case-study-section"} -->
	<section class="wp-block-group case-study-reality pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">What Actually Happened</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>In the first session, I used a simple prompt and had a playable game in hours. That was the easy part.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>The real build started when I added SEO entry points without touching gameplay. I split the header, added three long-form landing pages, built a sitemap, and wired metadata per page so search could index it cleanly.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"pattern-case-study-highlight case-study-highlight"} -->
		<div class="wp-block-group pattern-case-study-highlight case-study-highlight">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Prompt that set the direction</h3>
			<!-- /wp:heading -->

			<!-- wp:quote -->
			<blockquote class="wp-block-quote">
				<!-- wp:paragraph -->
				<p>"Add SEO landing pages without changing gameplay. Keep routing clean. Export metadata per page. No third-party SEO libraries."</p>
				<!-- /wp:paragraph -->
				<cite>The constraint that protected the core loop</cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<p>That choice forced me to design two experiences in one site: a focused game surface and a readable content surface. It added complexity, but it kept the product clean.</p>
		<!-- /wp:paragraph -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-hard-parts pattern-case-study-section"} -->
	<section class="wp-block-group case-study-hard-parts pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">The Hard Parts</h2>
		<!-- /wp:heading -->

		<!-- wp:list -->
		<ul>
			<!-- wp:list-item -->
			<li>Keeping gameplay clean while layering in SEO content and navigation.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Splitting the header logic without breaking mobile UX.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Auditing the icon pipeline after mismatches across metadata and manifest files.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Mobile spacing that could regress with tiny CSS tweaks.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Loading ads conditionally without hurting the core loop.</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-results pattern-case-study-section"} -->
	<section class="wp-block-group case-study-results pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">What Shipped</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">What works</h3>
		<!-- /wp:heading -->

		<!-- wp:list -->
		<ul>
			<!-- wp:list-item -->
			<li>Clean gameplay on desktop and mobile with no distractions.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Three long-form SEO pages indexed with internal links to the game.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Legal and contact pages live, footer structure in place.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>AdSense approved and ready for a future toggle.</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">What still feels fragile</h3>
		<!-- /wp:heading -->

		<!-- wp:list -->
		<ul>
			<!-- wp:list-item -->
			<li>Header logic split across contexts is easy to regress.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Icon consistency depends on careful asset and metadata alignment.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Mobile spacing is sensitive to small CSS changes.</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-lessons pattern-case-study-section"} -->
	<section class="wp-block-group case-study-lessons pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">What This Taught Me</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Shipping is hidden in boring details. AI helped me move fast, but it did not replace the need to audit, test, and make boring choices on purpose.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>It also reminded me that constraints are a feature. When I tell AI what cannot change, it becomes a real partner instead of a shortcut.</p>
		<!-- /wp:paragraph -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-next pattern-case-study-section"} -->
	<section class="wp-block-group case-study-next pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">What&#039;s Next</h2>
		<!-- /wp:heading -->

		<!-- wp:list -->
		<ul>
			<!-- wp:list-item -->
			<li>Wait for baseline traffic, then enable AdSense in production.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Add lightweight analytics to understand real usage.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Expand the SEO content cluster and add score persistence.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Introduce share mechanics once the loop is stable.</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-cta pattern-case-study-cta"} -->
	<section class="wp-block-group case-study-cta pattern-case-study-cta">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Close</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>This is the kind of project I can now take on with quiet confidence. It is not perfect, but it is real, and it taught me how to ship with AI as a steady build partner.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.brainmemorygame.com/">View Live Project</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/kismet-git/brain-memory-game">View the Build</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#case-studies">See More Case Studies</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</section>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
