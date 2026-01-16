(() => {
	const timelines = Array.from(document.querySelectorAll('.timeline-build'));
	if (!timelines.length) {
		return;
	}

	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	const cards = [];

	timelines.forEach((timeline) => {
		const timelineCards = Array.from(
			timeline.querySelectorAll('.timeline-card.timeline-reveal')
		);
		timelineCards.forEach((card, index) => {
			card.style.setProperty('--reveal-delay', `${Math.min(index * 90, 360)}ms`);
			cards.push(card);
		});
	});

	if (reducedMotion || !('IntersectionObserver' in window)) {
		cards.forEach((card) => card.classList.add('is-revealed'));
		return;
	}

	const observer = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-revealed');
					observer.unobserve(entry.target);
				}
			});
		},
		{
			threshold: 0.2,
			rootMargin: '0px 0px -10% 0px',
		}
	);

	cards.forEach((card) => observer.observe(card));
})();
