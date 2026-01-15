(function () {
	const settings = window.VibeNavSettings || {};
	const ctaSelector = settings.ctaSelector || '.vibe-sticky-cta';
	const pinThreshold = Number(settings.pinThreshold || 400);
	const expandThreshold = Number(settings.expandThreshold || 600);
	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	const ctaContainer = document.querySelector(ctaSelector);
	if (!ctaContainer) {
		return;
	}

	document.body.classList.add('vibe-nav-ready');

	const ctaLinks = Array.from(ctaContainer.querySelectorAll('a.wp-block-button__link'));
	let ctaButton = null;
	if (ctaLinks.length) {
		ctaButton = ctaLinks.find((link) =>
			link.textContent.trim() === settings.ctaTextMatch
		);
		if (!ctaButton) {
			ctaButton = ctaLinks[0];
		}
		ctaButton.classList.add('vibe-cta-button');
	}

	const nav = document.createElement('nav');
	nav.className = 'vibe-nav-links';
	(settings.navLinks || []).forEach((item) => {
		const link = document.createElement('a');
		link.href = item.href;
		link.textContent = item.label;
		link.className = 'vibe-nav-link';
		nav.appendChild(link);
	});
	ctaContainer.appendChild(nav);

	const placeholder = document.createElement('div');
	placeholder.className = 'vibe-cta-placeholder';
	placeholder.setAttribute('aria-hidden', 'true');
	placeholder.style.height = '0px';
	ctaContainer.parentNode.insertBefore(placeholder, ctaContainer);

	let ticking = false;
	let pinned = false;
	let expanded = false;

	function updatePlaceholder() {
		if (pinned) {
			placeholder.style.height = ctaContainer.offsetHeight + 'px';
		} else {
			placeholder.style.height = '0px';
		}
	}

	function updateNavState() {
		const scrollY = window.scrollY || window.pageYOffset;
		const nextPinned = scrollY > pinThreshold;
		const nextExpanded = scrollY > expandThreshold;

		if (nextPinned !== pinned) {
			pinned = nextPinned;
			ctaContainer.classList.toggle('vibe-nav-pinned', pinned);
			updatePlaceholder();
		}

		if (nextExpanded !== expanded) {
			expanded = nextExpanded;
			ctaContainer.classList.toggle('vibe-nav-expanded', expanded);
		}
	}

	function onScroll() {
		if (!ticking) {
			ticking = true;
			window.requestAnimationFrame(() => {
				updateNavState();
				ticking = false;
			});
		}
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	window.addEventListener('resize', updatePlaceholder);
	updateNavState();

	const timeline = document.querySelector('#timeline');
	if (timeline) {
		timeline.classList.add('vibe-timeline-ready');
		const timelineItems = Array.from(timeline.children).filter(
			(node) => node.nodeType === 1
		);
		timelineItems.forEach((item) => item.classList.add('vibe-timeline-item'));

		if ('IntersectionObserver' in window) {
			const observer = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							observer.unobserve(entry.target);
						}
					});
				},
				{
					threshold: 0.18,
					rootMargin: '0px 0px -10% 0px',
				}
			);

			timelineItems.forEach((item) => observer.observe(item));
		} else {
			timelineItems.forEach((item) => item.classList.add('is-visible'));
		}

		if (!reducedMotion) {
			const updateParallax = () => {
				const rect = timeline.getBoundingClientRect();
				const viewport = window.innerHeight || 0;
				const progress = (viewport - rect.top) / (viewport + rect.height);
				const shift = Math.max(-12, Math.min(12, (progress - 0.5) * 24));
				timeline.style.setProperty('--vibe-line-shift', shift.toFixed(2) + 'px');
			};

			updateParallax();
			window.addEventListener(
				'scroll',
				() => {
					window.requestAnimationFrame(updateParallax);
				},
				{ passive: true }
			);
			window.addEventListener('resize', updateParallax);
		}
	}
})();
