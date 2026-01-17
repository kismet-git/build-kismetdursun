(() => {
	const hero = document.querySelector('.hero-build');
	if (!hero) {
		return;
	}

	const icons = Array.from(hero.querySelectorAll('.hero-build__icon'));
	const cta = hero.querySelector('.hero-build__cta');
	const nav = hero.querySelector('.hero-build__cta-nav');
	const navLinks = nav ? Array.from(nav.querySelectorAll('a')) : [];
	const debugReadout = hero.querySelector('.hero-build__debug-readout');

	if (!icons.length && !cta) {
		return;
	}

	const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)');
	const state = {
		start: 0,
		end: 600,
		anchorX: 0,
		anchorY: 0,
		width: 0,
		height: 0,
		spread: 1,
		travel: 1,
		clampIcons: false,
		current: -1,
		raf: 0,
	};
	const iconConfigs = new Map();
	const heading = hero.querySelector('.hero-build .wp-block-heading');

	const clamp = (value, min, max) => Math.min(max, Math.max(min, value));

	const readCSSVars = () => {
		const styles = getComputedStyle(hero);
		state.spread = parseFloat(styles.getPropertyValue('--hero-build-icon-spread')) || 1;
		state.travel = parseFloat(styles.getPropertyValue('--hero-build-icon-travel')) || 1;
		state.clampIcons = parseFloat(styles.getPropertyValue('--hero-build-icon-clamp')) === 1;
	};

	const readMetrics = () => {
		const rect = hero.getBoundingClientRect();
		const scrollY = window.scrollY || window.pageYOffset;
		const heroTop = rect.top + scrollY;
		state.start = heroTop - Math.min(240, window.innerHeight * 0.25);
		state.end = clamp(rect.height * 0.6, 320, 560);
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

		hero.style.setProperty('--hero-build-anchor-x', `${state.anchorX}px`);
		hero.style.setProperty('--hero-build-anchor-y', `${state.anchorY}px`);
	};

	const readIconConfig = () => {
		icons.forEach((icon) => {
			const rect = icon.getBoundingClientRect();
			const size = rect.width || parseFloat(getComputedStyle(icon).width) || 72;
			iconConfigs.set(icon, {
				inX: parseFloat(icon.dataset.inX) || 0,
				inY: parseFloat(icon.dataset.inY) || 0,
				outX: parseFloat(icon.dataset.outX) || 0,
				outY: parseFloat(icon.dataset.outY) || 0,
				rotate: parseFloat(icon.dataset.rotate) || 0,
				scale: parseFloat(icon.dataset.scale) || 1,
				size,
			});
		});
	};

	const apply = (t) => {
		const maxRadius = (() => {
			if (state.width >= 1200) {
				return 420;
			}
			if (state.width >= 900) {
				return 360;
			}
			if (state.width >= 640) {
				return 300;
			}
			return null;
		})();

		const heroRect = hero.getBoundingClientRect();
		const headingRect = heading ? heading.getBoundingClientRect() : null;
		const minGap = 50;
		const headingBox = headingRect
			? {
					left: headingRect.left - heroRect.left - minGap,
					top: headingRect.top - heroRect.top - minGap,
					right: headingRect.right - heroRect.left + minGap,
					bottom: headingRect.bottom - heroRect.top + minGap,
					cx: headingRect.left - heroRect.left + headingRect.width / 2,
					cy: headingRect.top - heroRect.top + headingRect.height / 2,
			  }
			: null;

		const positions = icons.map((icon) => {
			const config = iconConfigs.get(icon);
			if (!config) {
				return null;
			}
			const travelT = clamp(t * state.travel, 0, 1);
			let x = (config.inX + (config.outX - config.inX) * travelT) * state.spread;
			let y = (config.inY + (config.outY - config.inY) * travelT) * state.spread;

			if (maxRadius) {
				const distance = Math.hypot(x, y);
				if (distance > maxRadius) {
					const scale = maxRadius / distance;
					x *= scale;
					y *= scale;
				}
			}
			return {
				icon,
				config,
				x: state.anchorX + x - config.size / 2,
				y: state.anchorY + y - config.size / 2,
			};
		});

		for (let iteration = 0; iteration < 3; iteration += 1) {
			positions.forEach((pos) => {
				if (!pos || !headingBox) {
					return;
				}
				const centerX = pos.x + pos.config.size / 2;
				const centerY = pos.y + pos.config.size / 2;
				const intersects =
					pos.x < headingBox.right &&
					pos.x + pos.config.size > headingBox.left &&
					pos.y < headingBox.bottom &&
					pos.y + pos.config.size > headingBox.top;
				if (!intersects) {
					return;
				}
				let dx = centerX - headingBox.cx;
				let dy = centerY - headingBox.cy;
				const distance = Math.hypot(dx, dy) || 1;
				dx /= distance;
				dy /= distance;
				pos.x += dx * minGap;
				pos.y += dy * minGap;
			});

			for (let i = 0; i < positions.length; i += 1) {
				const a = positions[i];
				if (!a) {
					continue;
				}
				for (let j = i + 1; j < positions.length; j += 1) {
					const b = positions[j];
					if (!b) {
						continue;
					}
					const ax = a.x + a.config.size / 2;
					const ay = a.y + a.config.size / 2;
					const bx = b.x + b.config.size / 2;
					const by = b.y + b.config.size / 2;
					let dx = ax - bx;
					let dy = ay - by;
					let distance = Math.hypot(dx, dy) || 1;
					const minDistance = (a.config.size + b.config.size) / 2 + minGap;
					if (distance >= minDistance) {
						continue;
					}
					const push = (minDistance - distance) / 2;
					dx /= distance;
					dy /= distance;
					a.x += dx * push;
					a.y += dy * push;
					b.x -= dx * push;
					b.y -= dy * push;
				}
			}
		}

		positions.forEach((pos) => {
			if (!pos) {
				return;
			}
			let absX = pos.x;
			let absY = pos.y;
			if (state.clampIcons && state.width && state.height) {
				const pad = 8;
				const maxX = state.width - pos.config.size - pad;
				const maxY = state.height - pos.config.size - pad;
				absX = clamp(absX, pad, Math.max(pad, maxX));
				absY = clamp(absY, pad, Math.max(pad, maxY));
			}
			pos.icon.style.transform = `translate3d(${absX}px, ${absY}px, 0) rotate(${pos.config.rotate}deg) scale(${pos.config.scale})`;
		});
	};

	const setNavState = (expanded) => {
		if (!nav) {
			return;
		}
		nav.setAttribute('aria-hidden', expanded ? 'false' : 'true');
		navLinks.forEach((link) => {
			if (expanded) {
				link.removeAttribute('tabindex');
			} else {
				link.setAttribute('tabindex', '-1');
			}
		});
	};

	const updateCta = (scrollY) => {
		if (!cta) {
			return;
		}
		const shouldStick = scrollY >= 400;
		const shouldExpand = scrollY >= 600;
		const wasSticky = cta.classList.contains('is-sticky');
		const wasExpanded = cta.classList.contains('is-expanded');

		if (shouldStick === wasSticky && shouldExpand === wasExpanded) {
			setNavState(shouldExpand);
			return;
		}

		const firstRect = cta.getBoundingClientRect();

		cta.classList.toggle('is-sticky', shouldStick);
		cta.classList.toggle('is-expanded', shouldExpand);
		if (!shouldStick) {
			cta.classList.remove('is-expanded');
		}

		setNavState(shouldExpand);

		const lastRect = cta.getBoundingClientRect();
		if (prefersReduced.matches) {
			return;
		}

		const deltaX = firstRect.left - lastRect.left;
		const deltaY = firstRect.top - lastRect.top;
		const scaleX = firstRect.width / lastRect.width;
		const scaleY = firstRect.height / lastRect.height;

		cta.style.setProperty('--hero-build-cta-x', `${deltaX}px`);
		cta.style.setProperty('--hero-build-cta-y', `${deltaY}px`);
		cta.style.setProperty('--hero-build-cta-scale-x', `${scaleX}`);
		cta.style.setProperty('--hero-build-cta-scale-y', `${scaleY}`);

		requestAnimationFrame(() => {
			cta.style.setProperty('--hero-build-cta-x', '0px');
			cta.style.setProperty('--hero-build-cta-y', '0px');
			cta.style.setProperty('--hero-build-cta-scale-x', '1');
			cta.style.setProperty('--hero-build-cta-scale-y', '1');
		});
	};

	const update = () => {
		state.raf = 0;
		const scrollY = window.scrollY || window.pageYOffset;
		const t = clamp((scrollY - state.start) / state.end, 0, 1);
		hero.style.setProperty('--hero-build-scroll-progress', t.toFixed(3));
		if (debugReadout) {
			debugReadout.textContent = `t=${t.toFixed(3)}`;
		}
		updateCta(scrollY);

		if (prefersReduced.matches) {
			return;
		}
		if (Math.abs(t - state.current) < 0.001) {
			return;
		}
		state.current = t;
		apply(t);
	};

	const onScroll = () => {
		if (state.raf) {
			return;
		}
		state.raf = window.requestAnimationFrame(update);
	};

	const onResize = () => {
		readCSSVars();
		readMetrics();
		readIconConfig();
		apply(prefersReduced.matches ? 0 : state.current < 0 ? 0 : state.current);
	};

	readCSSVars();
	readMetrics();
	readIconConfig();
	apply(0);
	setNavState(false);
	updateCta(window.scrollY || window.pageYOffset);

	window.addEventListener('scroll', onScroll, { passive: true });
	window.addEventListener('resize', onResize);

	if (prefersReduced.matches) {
		state.current = 0;
	}
})();
