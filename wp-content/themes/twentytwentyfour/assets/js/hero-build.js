(() => {
	const hero = document.querySelector('.hero-build');
	if (!hero) {
		return;
	}

	const icons = Array.from(hero.querySelectorAll('.hero-build__icon'));
	if (!icons.length) {
		return;
	}
	if (!window.__heroBuildIconsLogged) {
		console.log('[hero-build] icons found:', icons.length);
		window.__heroBuildIconsLogged = true;
	}

	const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)');
	const state = {
		start: 0,
		end: 600,
		scale: 1,
		anchorX: 0,
		anchorY: 0,
		width: 0,
		height: 0,
		clampIcons: false,
		current: -1,
		raf: 0,
	};
	const iconConfigs = new Map();
	const cta = hero.querySelector('.hero-build__cta');

	const clamp = (value, min, max) => Math.min(max, Math.max(min, value));

	const getScale = () => {
		if (window.innerWidth <= 640) {
			state.clampIcons = true;
			return 0.6;
		}
		if (window.innerWidth <= 900) {
			state.clampIcons = false;
			return 0.8;
		}
		state.clampIcons = false;
		return 1;
	};

	const readMetrics = () => {
		const rect = hero.getBoundingClientRect();
		const scrollY = window.scrollY || window.pageYOffset;
		const heroTop = rect.top + scrollY;
		state.start = heroTop;
		state.end = Math.max(420, Math.min(720, rect.height));
		state.scale = getScale();
		state.width = rect.width;
		state.height = rect.height;

		const ctaLink = hero.querySelector('.hero-build__cta .wp-block-button__link');
		if (ctaLink) {
			const ctaRect = ctaLink.getBoundingClientRect();
			state.anchorX = ctaRect.left - rect.left + ctaRect.width / 2;
			state.anchorY = ctaRect.top - rect.top + ctaRect.height / 2;
		} else {
			state.anchorX = rect.width / 2;
			state.anchorY = rect.height / 2;
		}
	};

	const readIconConfig = () => {
		icons.forEach((icon) => {
			iconConfigs.set(icon, {
				inX: parseFloat(icon.dataset.inX) || 0,
				inY: parseFloat(icon.dataset.inY) || 0,
				outX: parseFloat(icon.dataset.outX) || 0,
				outY: parseFloat(icon.dataset.outY) || 0,
				rotate: parseFloat(icon.dataset.rotate) || 0,
				scale: parseFloat(icon.dataset.scale) || 1,
				size: icon.getBoundingClientRect().width || 72,
			});
		});
	};

	const apply = (t) => {
		icons.forEach((icon) => {
			const config = iconConfigs.get(icon);
			if (!config) {
				return;
			}
			const x = (config.inX + (config.outX - config.inX) * t) * state.scale;
			const y = (config.inY + (config.outY - config.inY) * t) * state.scale;
			const s = config.scale || 1;
			let absX = state.anchorX + x;
			let absY = state.anchorY + y;
			if (state.clampIcons && state.width && state.height) {
				const pad = 10;
				const maxX = state.width - config.size - pad;
				const maxY = state.height - config.size - pad;
				absX = clamp(absX, pad, Math.max(pad, maxX));
				absY = clamp(absY, pad, Math.max(pad, maxY));
			}
			icon.style.transform = `translate3d(${absX}px, ${absY}px, 0) rotate(${config.rotate}deg) scale(${s})`;
		});
	};

	const updateCta = (scrollY) => {
		if (!cta) {
			return;
		}
		const isSticky = scrollY >= 400;
		const isExpanded = scrollY >= 600;
		cta.classList.toggle('is-sticky', isSticky);
		cta.classList.toggle('is-expanded', isExpanded);
	};

	const update = () => {
		state.raf = 0;
		const scrollY = window.scrollY || window.pageYOffset;
		const t = clamp((scrollY - state.start) / state.end, 0, 1);
		if (Math.abs(t - state.current) < 0.001) {
			return;
		}
		state.current = t;
		apply(t);
		updateCta(scrollY);
	};

	const onScroll = () => {
		if (state.raf) {
			return;
		}
		state.raf = window.requestAnimationFrame(update);
	};

	const onResize = () => {
		readMetrics();
		readIconConfig();
		apply(state.current < 0 ? 0 : state.current);
	};

	readMetrics();
	readIconConfig();
	apply(0);
	updateCta(window.scrollY || window.pageYOffset);

	if (prefersReduced.matches) {
		return;
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	window.addEventListener('resize', onResize);
})();
