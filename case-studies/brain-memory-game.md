# Brain Memory Game — building a production game with AI as my primary dev partner

**One-line outcome:**  
I shipped a production-grade memory game with SEO landing pages, mobile-first UX, and ad-ready infrastructure using AI as my main build partner

**Live URL:** https://www.brainmemorygame.com/  
**Repo:** https://github.com/kismet-git/brain-memory-game  

---

## Stack
- Next.js (App Router)  
- TypeScript  
- Vanilla CSS  
- Vercel  
- Google Search Console  
- Google AdSense (approved, not yet live)

## Dates
- Start: Dec 30, 2025  
- Initial build time: ~5 hours  
- SEO + mobile optimization: Jan 2026  

## Monetization
- Plan: wait for baseline traffic, then enable AdSense  
- Status: AdSense approved, not yet enabled in production  

## Audience
- Brain-training and memory-improvement seekers  

---

## Problem
I wanted to ship a real product, not a demo. A game that felt polished, could rank in search, and could eventually monetize — without turning into a long engineering project.

## Constraints
- Solo builder  
- No backend team  
- No design system framework  
- SEO had to coexist with gameplay  
- Mobile UX could not break the core loop  

## Non-negotiables
- Gameplay must stay clean and distraction-free  
- SEO pages cannot interfere with game logic  
- No heavy frameworks  
- Continuous deploys  
- Codebase must stay understandable without a team  

## Success definition
- Game runs clean on desktop and mobile  
- SEO pages indexed in Google  
- Internal linking in place  
- Legal + contact pages live  
- Ad infrastructure wired without breaking UX  
- Codebase stable enough to extend without fear  

---

## Flow diagram (text)
User lands →  
If homepage: plays game  
If SEO page: reads guide → clicks “Play Game” → enters same game flow  
Footer always available → legal + contact  

## Data flow
Static rendering for SEO pages →  
Client-side state for gameplay →  
No persistent user data →  
AdSense loads conditionally via env var  

## Key components
- `app/layout.tsx` — metadata, icons, ads script  
- SEO routes  
  - `/memory-test`  
  - `/pattern-memory-game`  
  - `/how-to-improve-visual-memory`  
- Header split  
  - Gameplay header  
  - SEO header with nav + hamburger  
- Footer system: legal + contact  
- `robots.ts` + `sitemap.ts`  

---

## Dec 30, 2025
**Goal:**  
Ship a playable game fast without cutting corners  

**Prompt:**  
“Build a clean memory game using Next.js App Router. Keep UI minimal. Optimize for speed and clarity. No unnecessary abstractions.”

**Why it mattered:**  
I needed proof that I could move from idea to production, not just prototype  

**Result:**  
A working game in one session — foundation strong enough to extend  

---

## Jan 2026
**Goal:**  
Turn the game into a real product site with SEO, legal compliance, and mobile polish  

**Prompt:**  
“Add SEO landing pages without changing gameplay. Keep routing clean. Export metadata per page. Add internal links. Do not introduce third-party SEO libraries.”

**Why it mattered:**  
Without organic entry points, the game would rely entirely on direct traffic and never justify monetization  

**Result:**  
Three long-form SEO pages shipped, indexed, and internally linked to the game  

---

## Commit
**What changed:**  
Added SEO routes, sitemap integration, metadata exports  

**Why:**  
To create discoverable entry points into the product  

**Impact:**  
Search Console confirmed indexing. Real traffic path established  

---

## Issue
**Root cause:**  
Favicon and icon system mismatched across metadata, manifest, and assets  

**Fix:**  
Audited icon pipeline end-to-end  
- `metadata.icons`  
- `/public` assets  
- `site.webmanifest`  
- Apple touch icon  
Aligned sizes and paths. Removed placeholder branding  

**What it taught:**  
Polish lives in boring details. If icons break, trust drops instantly  

---

## Option A vs B
**A:** Add full navigation everywhere  
**B:** Keep gameplay header minimal, add nav only on SEO pages  

**Chosen:** B  
**Reason:**  
Gameplay UX must stay focused. SEO pages serve a different intent  
**Cost:**  
Two header systems instead of one. Worth it  

---

## What works now
- Clean separation between game UI and content UI  
- SEO pages indexable and readable  
- Mobile nav works without polluting gameplay  
- Footer legal structure in place  
- AdSense approved and ready  

## What’s fragile
- Header logic split across contexts  
- Icon system easy to regress if assets change  
- Mobile spacing sensitive to small CSS tweaks  

## What’s next
- Wait for baseline traffic  
- Enable AdSense in production  
- Add lightweight analytics  
- Expand SEO content cluster  
- Introduce score persistence  
- Add share mechanics  
