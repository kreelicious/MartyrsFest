# MartyrsFest Website – AI Development Agent Guide

## Project Overview

MartyrsFest is a 3-day Bank Holiday outdoor festival taking place at Penydarren Park, Merthyr Tydfil, 22–24 May 2026.

This is a single-page marketing website with:
- Sticky navigation
- Scroll-based sections
- Seetickets integration
- Poster-based event promotion
- Clear licensing-compliant information

This file defines brand rules, content constraints, event facts, and technical standards for all AI-assisted development.

---

## Core Event Facts (Source of Truth)

Dates:
22–24 May 2026

Location:
Penydarren Park, Merthyr Tydfil

Event Structure:

Friday – Kicking Country Night
- Headline: The Luke Combs Experience
- Support: Diggs
- Time: 6pm–10pm
- Ticket: £20

Saturday – Day Fever
- Time: 2pm–10pm
- Ticket: £20
- 18+ only

Sunday – Vortex Day
- Charity Football
- Live Bands
- Street Food
- Family Entertainment
- Time: 3pm–10pm
- Adult: £17.50
- Child: £5
- Family: £40

Curfew:
10pm strict (all days)

Bars:
Licensed. Challenge 25 policy enforced.

Capacity:
Up to 2,000 (Fri/Sat)
Up to 1,500 (Sun)

Re-entry:
No re-entry Friday or Saturday.

Under-18 Policy:
Saturday: 18+ only
Friday: 16+ (under 18 must be accompanied)
Sunday: Family ticketing. Under-18 wristbands.

These facts must not be altered without confirmation from event organisers.

---

## Brand & Tone

Tone:
- Confident
- Community-driven
- Proudly Merthyr
- Clear and direct
- No hype exaggeration

Avoid:
- Overly corporate tone
- Over-promising
- Language that conflicts with licensing restrictions

Positioning:
MartyrsFest is a professionally run but locally rooted Bank Holiday festival.

---

## Visual & Design Rules

Navigation:
- Black background
- White text
- Sticky at top
- Logo left
- Links center
- Date right

Typography:
Heading: Brandon Grotesque Bold
Body: Brandon Grotesque Regular

Section Structure:
1. Hero
2. Friday
3. Saturday
4. Sunday
5. Tickets
6. FAQ’s
7. Footer

Each Day Section Must:
- Include event name
- Include time
- Include ticket price
- Include poster
- Poster animates in on scroll

Footer:
- Black background
- White text
- Include Merthyr Town FC logo
- Include Vortex logo
- Include “Brought to you by” partners

---

## Animation Rules

Posters:
- Appear on scroll using IntersectionObserver
- Smooth fade + slight upward movement
- No aggressive parallax
- Performance-first approach

No heavy JS libraries unless approved.

---

## Tickets Integration

Primary ticketing platform:
Seetickets

Embed via:
- Iframe or official widget
- Responsive container
- Minimum height defined
- No styling that breaks Seetickets CSS

---

## Accessibility Standards

- Proper heading hierarchy (H1 only once)
- Alt text on posters
- Button focus states
- Sufficient colour contrast
- Avoid text baked into images without duplication in HTML

---

## SEO Structure

Title Tag:
MartyrsFest – 22–24 May 2026 | Penydarren Park

Meta Description:
3-day Bank Holiday outdoor festival in Merthyr Tydfil featuring live music, Day Fever, Vortex Day, licensed bars and street food.

OpenGraph:
- Event poster
- Clear title
- Dates included

---

## Performance Constraints

- Single-page site
- Lightweight CSS
- Minimal dependencies
- Optimised poster images
- Lazy loading for below-the-fold images

---

## Development Principles

When updating:

1. Never alter core event facts.
2. Never change age restrictions.
3. Never remove 10pm curfew references.
4. Maintain black / white base styling.
5. Keep design bold, clean, and legible.

If uncertain about:
- Licensing
- Age rules
- Pricing
- Event naming

Stop and request clarification.

---

## Future Enhancements (Optional)

- Line-up reveal animation
- Countdown timer
- Sponsor carousel
- Merch pre-order integration
- SMS reminder signup
- Post-event photo gallery

These must not compromise page speed.

---

## Agent Behaviour Guidelines

When generating code:
- Provide clean HTML/CSS/JS only
- Avoid unnecessary frameworks
- Comment major blocks clearly
- Preserve existing structure unless improvement is explicitly requested

When generating copy:
- Stay factual
- Stay aligned with flyer
- No speculative additions

When generating layout:
- Mobile-first responsive
- Maintain visual hierarchy
- Preserve poster prominence

---

End of file.