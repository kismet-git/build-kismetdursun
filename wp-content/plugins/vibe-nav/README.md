# Vibe Nav

Minimal sticky CTA that morphs into a nav bar with timeline reveal/parallax.

## Hooks
- CTA wrapper: add `vibe-sticky-cta` as an Additional CSS class on the Buttons block.
- Timeline section: add the `timeline` HTML anchor to the Group block.
- Contact section: add the `contact` HTML anchor to the Group block (nav target).

## Thresholds
Configured in `app/public/wp-content/plugins/vibe-nav/vibe-nav.php` via `VibeNavSettings`:
- `pinThreshold`: scrollY to pin the CTA (default: 400).
- `expandThreshold`: scrollY to expand into the nav (default: 600).

## Classes
- `body.vibe-nav-ready`: set when JS is active.
- `.vibe-nav-pinned`: CTA pinned state.
- `.vibe-nav-expanded`: CTA + nav expanded state.
- `.vibe-timeline-ready`: enables timeline line display.
- `.vibe-timeline-item.is-visible`: reveal state for timeline items.

## Adjusting
- Change labels/URLs in `navLinks` within `vibe-nav.php`.
- Update CSS in `assets/vibe-nav.css` for spacing, borders, and animation timing.
