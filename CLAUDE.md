# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Commands

Prefix all shell commands with `rtk` (see global CLAUDE.md / RTK.md):

```bash
rtk php -S 127.0.0.1:8000   # serve locally, then open index.php
rtk php -l index.php          # check PHP syntax
rtk git status                # review pending changes
```

No build step — all tools are static HTML served directly.

## Architecture

This is a collection of standalone browser-based utility tools. Each tool is a single self-contained `.html` file at the repo root. `index.php` auto-discovers and lists all root-level `.html` files as navigation links.

**Shared assets** (never inline what's already here):
- `assets/js/` — Alpine.js, Tailwind CSS (browser build), CodeMirror, highlight.js, marked, pdf-lib, xlsx, Dexie (IndexedDB), jQuery, Fomantic UI, Treant, Raphael
- `assets/css/` — CodeMirror themes, Fomantic UI, Font Awesome, Material Icons, font CSS

**Standard page pattern:**
- `x-data="componentName()"` Alpine.js component on `<html>` or top-level `<div>`
- Dark mode via `darkMode` Alpine state + Tailwind `class` strategy (`:class="{ dark: darkMode }"`)
- `localStorage` for persistence (theme preference, chat history, app state)
- Tools that handle large binary data (image editing history) use IndexedDB via Dexie

**AI-connected tools** (openrouter-client, ai-html-viewer, json-analyzer, spreadsheet-analyzer) call OpenRouter API with a user-supplied API key stored in `localStorage`.

## Coding Conventions

- 4-space indentation throughout (HTML, PHP, CSS, inline JS)
- Kebab-case filenames: `time-converter.html`, `openrouter-image.html`
- New tools go at the repo root as a single `.html` file; only genuinely shared code goes in `assets/`
- Tools must be fully functional offline except for external API calls
- Light/dark mode support is expected for all new tools
- Commit messages are short and task-focused: `markdown converter`, `atop reader : perbaikan mapping`
