# build-kismetdursun

Personal build environment for **Kismet Dursun** — a modern WordPress portfolio site built with block themes, custom plugins, and an AI-assisted workflow.

This repo is not a theme demo. It is a **working system**: design, engineering, iteration, and documentation of real builds.

---

## What This Repo Is

- A production-grade WordPress site used as a **portfolio and experimentation lab**
- A place to ship:
  - Custom block patterns
  - Theme token systems
  - Purpose-built plugins
  - AI-assisted development workflows
- A living record of **how things were built**, not just what they look like

---

## Core Stack

- **WordPress** (block theme: Twenty Twenty-Four)
- **Custom plugin**
  - `vibe-nav` — sticky CTA → morphing nav + timeline reveal
- **Theme tokens**
  - `theme.json` driven color, type, spacing system
- **Local dev**
  - LocalWP
- **Version control**
  - Git + GitHub
- **AI tooling**
  - Codex for implementation
  - Claude / v0 for planning and design exploration

---

## Repo Structure

wp-content/
themes/
twentytwentyfour/
theme.json        # global tokens + block styles
plugins/
vibe-nav/
vibe-nav.php
assets/
vibe-nav.css
vibe-nav.js

case-studies/
brain-memory-game.md
ai-roomshots.md

---

## Design System Philosophy

- **Minimal first**
- **Color by exception**
- **Typography over decoration**
- **Structure over spectacle**

Visual target: clean, readable, restrained — inspired by ideabrowser-style interfaces.

---

## Custom Plugin: Vibe Nav

## Purpose

Turns a hero CTA into:

- a pinned element at scroll  
- then a morphing navigation bar  

Drives:

- sticky thresholds  
- timeline reveal hooks  
- nav link injection  

## Location

`wp-content/plugins/vibe-nav/`

## Key config

```php
'ctaSelector'   => '.vibe-sticky-cta',
'pinThreshold' => 400,
'expandThreshold' => 600,


## Pattern System

All page sections are built as block patterns, not page-builder layouts.

### Pattern goals
- Reusable  
- Token-driven  
- Styleable without editing markup  
- Portable across themes  

### Current custom patterns
- Hero — Build  
- Timeline — Build  
- Featured Case Studies — Build  
- About — Build  
- Contact — Build  

Each pattern uses:
- semantic groups  
- utility classes for targeting  
- zero inline styling  

---

## Case Study Workflow

Every major project is documented twice:  
1. On the site — narrative case study  
2. In this repo — technical log  

Case study markdown includes:
- constraints  
- architecture  
- prompts  
- commits  
- failures  
- decisions  
- outcomes  

This is intentional.  
Hiring managers read outcomes. Builders read process.

---

## Local Development

```bash
cd ~/Local\ Sites/build-kismetdursun/app/public
git status
git pull
