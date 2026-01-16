<?php
/**
 * Title: Case Study: AI Roomshots
 * Slug: twentytwentyfour/case-study-ai-roomshots
 * Categories: my-patterns
 * Description: Full narrative case study page for AI Roomshots.
 */
?>

<!-- wp:group {"tagName":"main","className":"case-study case-study-ai-roomshots"} -->
<main class="wp-block-group case-study case-study-ai-roomshots">
	<!-- wp:group {"tagName":"section","className":"case-study-hero pattern-case-study-hero"} -->
	<section class="wp-block-group case-study-hero pattern-case-study-hero">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">AI Roomshots</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","className":"case-study-outcome"} -->
		<p class="case-study-outcome has-large-font-size">I built a production-ready AI system that turns simple rug PNGs into consistent, photorealistic room scenes without losing product accuracy, proportions, or control.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"muted","className":"case-study-framing"} -->
		<p class="case-study-framing has-muted-color has-text-color">AI made this possible by turning visual rules into enforceable behavior instead of wishful prompts.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"vibe-sticky-cta case-study-hero-cta"} -->
		<div class="wp-block-buttons vibe-sticky-cta case-study-hero-cta">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://airoomshots.com">View Live Project</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/kismet-git/airoomshots_web">View the Build</a></div>
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
		<p>I kept running into the same gap in retail: lifestyle images are essential, but photography does not scale. Rugs made the problem even sharper because size and proportion are the product.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>Before AI, this felt out of reach for me. I tried versions in 2025 using Replit, v0, and WordPress prototypes, and each one failed for the same reason: the models could not hold rules. By early 2026, the tools finally got stable enough for me to try again with real discipline.</p>
		<!-- /wp:paragraph -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-expectations pattern-case-study-section"} -->
	<section class="wp-block-group case-study-expectations pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">What I Thought It Would Be</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>I assumed the hard part was making the images look good, and that careful prompting would keep the product intact.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>I underestimated how operational this problem was. Deterministic behavior, strict framing, and non-negotiable rules mattered more than creativity. I also thought I could leave those rules in prose instead of code. I was wrong.</p>
		<!-- /wp:paragraph -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"case-study-reality pattern-case-study-section"} -->
	<section class="wp-block-group case-study-reality pattern-case-study-section">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">What Actually Happened</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>The messy middle was a lot of rules and a lot of testing. I built a prompt library per size and room, a prompt assembler, a validator that enforced the non-negotiables, and a variation engine that kept outputs stable instead of random.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>Runner rugs were the breakpoint. They kept getting cropped, which made the images useless for retail. The fix was not a nicer prompt. It was treating composition like code.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"pattern-case-study-highlight case-study-highlight"} -->
		<div class="wp-block-group pattern-case-study-highlight case-study-highlight">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Prompt that finally worked</h3>
			<!-- /wp:heading -->

			<!-- wp:quote -->
			<blockquote class="wp-block-quote">
				<!-- wp:paragraph -->
				<p>"Camera pulls back. Full rug visible edge to edge. No crop, no zoom, no reimagining. Maintain exact rug proportions."</p>
				<!-- /wp:paragraph -->
				<cite>Runner rules that stopped the model from cheating</cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<p>The other turning point was moving scene rules into code. Once I stopped relying on loose prompts and formalized size and room rules, consistency improved more than any model upgrade ever did.</p>
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
			<li>Runner rugs kept getting cropped until I enforced camera distance and aspect rules.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>PNG transparency was silently lost in a fallback conversion, which meant I had to lock the pipeline to alpha-safe formats.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Costs mattered. I could not hide behind "cool outputs" if the system could not scale.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>AI fails quietly unless you force correctness. That meant validators, not trust.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>As a non-engineer, I had to keep every part understandable or I would not be able to maintain it.</li>
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
			<li>Deterministic prompt pipeline with strict size and room rules.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Validation layer that enforces framing, proportions, and product immutability.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Auth foundation with Supabase and a clear infrastructure path on Vercel.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Outputs that are usable for retail, not just visually interesting.</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">What still feels fragile</h3>
		<!-- /wp:heading -->

		<!-- wp:list -->
		<ul>
			<!-- wp:list-item -->
			<li>Model costs and edge-case framing still need tuning.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Abuse protection is early and billing is not built yet.</li>
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
		<p>AI is leverage, not magic. It moves fast when I give it strict rules and clear intent, and it drifts the moment I leave correctness to chance.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>I also learned that I do not need to be a traditional engineer to build real systems. I need judgment, a willingness to make rules explicit, and the patience to keep testing until the output is trustworthy.</p>
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
			<li>Finish storage integration and lock down protected routes.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Add a credit system, billing, and real rate limiting.</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Prepare a first retailer pilot and learn from real usage.</li>
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
		<p>I am not trying to prove I can write perfect code. I am trying to show that a non-technical builder can use AI to ship real systems, learn in public, and keep the work honest.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://airoomshots.com">View Live Project</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/kismet-git/airoomshots_web">View the Build</a></div>
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
