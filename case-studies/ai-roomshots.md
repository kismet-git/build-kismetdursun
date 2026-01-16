# AI Roomshots

## Turning flat product images into retail-ready lifestyle scenes

---

## One-line outcome

I built a production-grade AI system that turns simple rug PNGs into consistent, photorealistic room scenes — without losing product accuracy, proportions, or control

---

## Live URL

Local development → production domain: **airoomshots.com**

---

## Repo

[github.com/kismet-git/airoomshots_web](https://github.com/kismet-git/airoomshots_web)

---

## Stack

### Frontend

Next.js (App Router), React

### Backend

Next.js API routes

### AI

Google Gemini 2.5 Flash Image via Vercel AI Gateway

### Image processing

Sharp

### Auth

Supabase (email magic link + Google login)

### Storage

Cloudflare R2 (planned), Supabase for metadata

### Infrastructure

Vercel

### Dev tools

VS Code, GitHub, Codex

### Earlier attempts

Replit, v0.dev, WordPress prototypes

---

## Dates

First attempt: **March 2025**  
Current production build: **January 2026**

### Context that matters

This idea didn’t fail because it was bad — it failed because the tools weren’t ready yet

I tried building versions of this throughout 2025 using Replit, v0, WordPress, and early AI coding tools. Every time, I hit the same wall: the models couldn’t hold visual rules consistently, and the tooling wasn’t reliable enough to support a real product

By early 2026, that changed. The models got better. The tooling got more stable. The same idea that felt impossible a year ago suddenly became very buildable

This project exists because the timing finally caught up to the vision

---

## The problem

Mid to large rug retailers have the same pain point

They need lifestyle images  
They need a lot of them  
And traditional photography just doesn’t scale

But most AI image tools don’t solve the real problem either. They’re great at creativity — terrible at control

For retail, control is everything

- proportions must stay exact
- runners can’t get cropped
- edges can’t blur
- rugs can’t get “re-imagined” by the model
- consistency matters more than novelty

The gap wasn’t artistic

The gap was **operational**

---

## Constraints I built within

- I’m not an engineer by training
- The system had to be understandable and maintainable
- Costs had to stay predictable
- It had to run on modern serverless infra
- It had to support real users eventually, not just demos
- It had to be safe to expose publicly

---

## Non-negotiables

- The rug image must be used exactly as-is
- No cropping, especially for runners
- No “AI creativity” applied to the product itself
- Deterministic behavior — same inputs should behave the same way
- Clear guardrails instead of silent failures
- A path to production security and scalability

---

## What success looks like

A retailer uploads a transparent rug PNG

They pick a size and a room type

They get a lifestyle image that feels studio-shot

Not close-up  
Not distorted  
Not stylized

Just clean, usable, retail-ready imagery they can trust

---

## How the system flows

### User flow

Upload rug → choose size + room → generate → download

### Behind the scenes

Rug PNG  
→ prompt assembled from strict rules  
→ sent through AI gateway  
→ image generated  
→ validated for framing + proportions  
→ stored  
→ delivered to user

---

## Key building blocks

### Prompt library

Clear rules per size and room type

### Prompt assembler

Builds the final instruction set from policy blocks

### Validator

Enforces non-negotiables like aspect ratio, immutability, staging rules

### Variation engine

Keeps outputs deterministic instead of random

### Gateway adapter

Keeps the model provider swappable

### Auth layer

Supabase for real user access

### Storage layer

Object storage for images, database for history

---

## Moments that shaped the product

### January 2026

#### Goal

Stop runner rugs from being cropped

#### Why it mattered

Runners exposed the core weakness of most image models. They default to close-ups, which completely breaks retail usability

#### What changed

I stopped trying to “convince” the model with nicer language and started enforcing composition like a system

- camera must pull back
- full rug must be visible
- strict aspect rules
- no zooming, no cropping

#### Result

Runner images finally became usable, not just pretty

---

## Commit moment

### Commit

`feat(scene-spec): enforce size→room rules + aspect normalization`

### What did I do differently

I stopped relying on loose prompts and formalized scene rules into actual code

### Why

If something matters to the business, it can’t live only in prose

### Impact

Visual consistency improved more than any model upgrade ever did

---

## Hard lesson

### Issue

PNG transparency was silently lost

### Root cause

A fallback image conversion stripped alpha channels without surfacing an error

### Fix

Locked the pipeline to alpha-safe formats and aligned metadata validation

### What it taught me

AI systems fail quietly unless you make correctness explicit

And if you don’t test for it, you won’t even notice

---

## A real architecture choice

### Option A

Return base64 images directly from the API

### Option B

Store images in object storage and return secure links

### Chosen

Option B

### Why did I choose Option B

- Lower memory usage
- Lower bandwidth
- Scales cleanly
- Enables user libraries and history

### Tradeoff

More setup now, much better future later

---

## Where the product stands today

### What works

- Deterministic prompt pipeline
- Strong size and room enforcement
- Auth foundation in place
- Clear infrastructure path
- Production-ready direction

### What’s fragile

- Model costs still matter
- Edge-case framing still needs tuning
- Abuse protection is early
- Billing layer not built yet

### What’s next

- Finish storage integration
- Lock down auth flows and protected routes
- Add credit system
- Harden rate limiting
- Prepare first retailer pilot

---

## Why this case study exists

I’m not a traditional engineer

I don’t come from a computer science background

But I’ve learned that with the right AI tools — and the right way of thinking about systems — you don’t need to be deeply technical to build real products

This project isn’t about showing perfect code

It’s about showing how a non-technical builder can use AI as a force multiplier to create something that actually works in the real world

---

## How this dossier will be used

This file is intentionally structured as a **Case Study Evidence Dossier**

It will be fed into Codex to guide

- page copy
- layout sections
- design patterns
- CTA placement
- storytelling structure
