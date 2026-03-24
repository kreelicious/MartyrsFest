# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

MartyrsFest is a single-page marketing website for a 3-day Bank Holiday outdoor festival (22–24 May 2026) at Penydarren Park, Merthyr Tydfil. It is a static site — one `index.php` file with inline CSS and JS, no build tools, no frameworks, no dependencies.

## Architecture

- **`index.php`** — the entire site: HTML structure, `<style>` block, and `<script>` block all inline
- **`assets/`** — images only (hero background, day posters, partner logos)
- **`agent.md`** — brand rules, event facts, and content constraints (read this before changing any copy or design)

Sections in order: Nav → Hero → Friday → Saturday → Sunday → Tickets → FAQs → Footer. Each day section has a two-column grid (copy + poster) with scroll-reveal via IntersectionObserver.

## Key Constraints

- **Event facts are locked.** Dates, prices, age restrictions, curfew (10pm), and capacity numbers in `agent.md` are the source of truth. Do not alter them without organiser confirmation.
- **No frameworks or heavy JS libraries.** Vanilla HTML/CSS/JS only.
- **Typography:** Brandon Grotesque via Adobe Fonts (Typekit kit `loh1dbq`).
- **Colour scheme:** Dark base (`#0b0b0b`/`#070707`), white text. Saturday section is light (`#89D3F4` with dark text). Friday is warm brown gradient. Sunday is purple gradient.
- **Seetickets widget** placeholder exists in the tickets section — replace the comment with real embed code when available.
- **Mobile-first responsive.** Single breakpoint at 900px switches grids to single-column and hides the nav date.

## Development

No build step. Open `index.php` directly or serve via any local PHP/web server. All styles and scripts are inline in `index.php`.
