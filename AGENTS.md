# Repository Guidelines

## Project Structure & Module Organization
This repository is a collection of small browser-based tools. Most features live in standalone `.html` files at the repo root, for example `json-formatter.html` or `pdf-merger.html`. The shared frontend dependencies are stored under `assets/`:

- `assets/js/` for bundled libraries and shared scripts
- `assets/css/` for local stylesheets and vendor CSS
- `assets/fonts/` for local font files

`index.php` is the main entry page. It scans the root directory and lists all tool pages automatically, so new tools should usually be added as root-level `.html` files.

## Build, Test, and Development Commands
There is no build step in the current repo. Work locally by serving the directory and opening `index.php`.

- `rtk php -S 127.0.0.1:8000` runs the local PHP server for the directory index
- `rtk php -l index.php` checks PHP syntax for the index page
- `rtk git status` reviews pending changes before commit

Per local repo instructions, prefix shell commands with `rtk`.

## Coding Style & Naming Conventions
Use 4-space indentation in HTML, PHP, CSS, and inline JavaScript to match the existing files. Keep each tool self-contained unless code is genuinely shared. Prefer kebab-case file names such as `time-converter.html` and `openrouter-image.html`.

When adding UI code:

- keep shared assets in `assets/` instead of duplicating libraries
- use clear sectioning and readable inline script blocks
- preserve the existing lightweight stack: static HTML, Alpine.js, Tailwind, and local vendor files

## Testing Guidelines
There is no automated test suite committed yet. Validate changes manually in the browser.

- verify the new or edited tool through `index.php`
- test light and dark mode when applicable
- confirm file import/export flows for tools that handle local files
- check the browser console for runtime errors

If you add automated checks later, document the command here and keep the setup minimal.

## Commit & Pull Request Guidelines
Recent commits use short, task-focused messages such as `markdown converter` or `invoice : debug`. Follow that style: concise subject, optional scope, and no unnecessary prefixes.

Pull requests should include:

- a short summary of the affected tool(s)
- screenshots or a short screen recording for UI changes
- manual test notes listing browser checks performed
