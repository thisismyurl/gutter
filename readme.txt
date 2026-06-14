=== Gutter ===

Contributors: thisismyurl
Tags: blog, news, full-site-editing, block-patterns, two-columns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, accessibility-ready, translation-ready, wide-blocks, sticky-post
Tested up to: 6.8
Requires at least: 6.5
Requires PHP: 7.4
Stable tag: 1.6165.1612
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A WordPress theme for financial research publishers. IBM Plex Serif for editorial authority, IBM Plex Mono for every number.

== Description ==

Gutter is a full-site-editing theme for financial research publishers — the investment research firms, economic think tanks, and capital markets publications that lead with data, not decoration. Named for the notes in the column beside the argument: the annotation is where the insight lives.

Built for the sell-side research desk and the economic think tank: the research desk that publishes data tables, sector analysis, and long-form reports and wants them to read like a sell-side note, not a blog.

== Typography ==

Gutter runs on three IBM Plex faces, each with a defined role:

* **IBM Plex Serif** carries editorial authority — headlines, report titles, and
  display scale. It is the voice of the argument.
* **IBM Plex Sans** handles every interface element — navigation, labels, body
  copy, and excerpts. It stays out of the way.
* **IBM Plex Mono** renders every number, ticker symbol, date, and data point.
  In a research publication the figures are the evidence, so they get a face of
  their own — monospaced, so columns of numbers align and read like a terminal.

The serif/sans/mono split is the typographic system, not decoration: it is how a
data table reads as data and a headline reads as a headline.

IBM Plex Serif carries editorial authority at display scale. IBM Plex Sans handles every interface element. IBM Plex Mono renders every number, ticker symbol, and data point in its natural form. The data table is the hero; the research hero pattern is how a report leads. A terminal dark style variation inverts the palette for full trading-terminal aesthetics.

The theme is built to WCAG 2.2 AA guidance: a keyboard skip link, visible focus outlines, semantic landmark regions, exactly one h1 per template, logical heading order, and motion that honours a prefers-reduced-motion setting. This is implementation guidance, not a certified audit — verify against your own content and plugins. Core Web Vitals minded, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies.

**Signature patterns:** market-watch (data table with row highlighting), research-hero, sector-table, key-metrics strip, research-cards archive, report-header.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Gutter" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Gutter: Get started for setup steps.

== Compatibility ==

Requires WordPress 6.5 or later and PHP 7.4 or later. Tested up to WordPress 6.8.

WordPress 6.5+ is required because two features depend on APIs that stabilised in
that release: the footer copyright and credit lines use block bindings, and the
market-watch pattern uses the Interactivity API. On WordPress 6.7+ the block-level
RTL direction conversion is handled automatically. The PHP requirement is 7.4; the
theme uses no syntax above that floor, and the filter example below is 7.4-compatible.

The market-watch row-highlight interaction is built on the WordPress Interactivity
API and the Script Modules API, both stable since WordPress 6.5. The view module is
enqueued only on pages that render the pattern, so it adds no front-end JavaScript
anywhere else. On installs older than 6.5 the interaction is absent by design: the
table renders as a static, fully readable, fully printable table with no errors. The
progressive-enhancement contract is auditable in code — see register_market_watch_view()
and enqueue_market_watch_view() in inc/skin.php, and the conditional enqueue keyed on
the pattern's data-wp-interactive marker.

== Frequently Asked Questions ==

= Is this theme accessible? =

It is built to WCAG 2.2 AA guidance, not certified by a third-party audit. Concretely:
every template ships a keyboard skip link to the main landmark, visible focus outlines
on interactive elements, semantic landmark regions (header, nav, main, footer), exactly
one h1 per template with a logical heading order beneath it, and motion that honours a
prefers-reduced-motion setting. Accessibility also depends on your own content — heading
order in posts, image alt text, and link wording — so verify against your real pages.

= Is the theme right-to-left ready? =

Yes. The theme's CSS uses logical properties (margin-inline, padding-inline,
border-inline, inset-inline) rather than hardcoded left/right values, so layouts mirror
correctly under RTL locales. WordPress 6.7+ handles block-level direction conversion
automatically. This is RTL-ready by construction; it has not been run through a
per-locale visual audit, so if a specific RTL rendering issue appears, confirm you are
on WordPress 6.7+ with current logical-property browser support.



= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= What is the terminal dark style variation? =

The terminal variation inverts the palette: ink-deep becomes near-white, ground becomes near-black, accent becomes a brighter blue. Apply it from the Style Variations panel in the Site Editor — no code required.

= Does the market-watch pattern require JavaScript? =

No. The data table is fully readable, navigable, and printable without JavaScript.
Click-and-keyboard row highlighting is layered on top through the WordPress
Interactivity API (stable since WP 6.5): click a row, or focus it and press Enter
or Space, to highlight it. This is progressive enhancement only — the view module
loads as an ES module solely on pages where the pattern appears, so every other
page ships zero front-end JavaScript. On WordPress installs older than 6.5 (before
the Script Modules and Interactivity APIs), the table degrades to a static,
fully readable table with no highlight interaction and no errors.

= Are the fonts included? =

IBM Plex Serif, IBM Plex Sans, and IBM Plex Mono are bundled as WOFF2 files in assets/fonts/ and loaded via theme.json @font-face declarations. The fonts are released under SIL OFL 1.1 by IBM and the IBM Plex Project Authors. They never phone home to any external service.

= How do I add report PDFs? =

Use the File block, the Document block from a compatible plugin, or link from any pattern. The report-header pattern includes a download button placeholder styled to match the theme.

== Developers ==

**Built on the Colophon core.** Gutter is built on Colophon, a small documented
theme core (the CORE/SKIN architecture: portable infrastructure in inc/setup.php,
inc/assets.php, inc/bindings.php, and inc/admin.php; theme-specific personality in
inc/skin.php). Two deliberate Colophon-core names survive in Gutter and are
inheritance, not residue:

* The colour system is driven by three anchor custom properties named
  `--wp--custom--colophon-light`, `--wp--custom--colophon-dark`, and
  `--wp--custom--colophon-accent` (theme.json `settings.custom`, overridden per
  style variation). These are the Colophon-core token contract; the entire neutral
  and accent scale derives from them via color-mix() in OKLCh space. See
  assets/css/skin.css for the full derivation.
* The "developer guide" link on the Appearance → Gutter: Get started page points
  at the Colophon core documentation by default. Repoint it with the
  gutter/developer_guide_url filter below.

**The skip link is rendered in PHP, not in a template part.** The keyboard skip
link is printed on the wp_body_open hook by render_skip_link() in inc/setup.php,
not as a wp:html literal in a template part. This is deliberate: a static HTML
template part cannot wrap its text in a gettext call, so a hardcoded skip link
ships an untranslatable English label. Rendering it in PHP lets the label pass
through esc_html_e(), so "Skip to content" translates with the rest of the theme
and appears in languages/gutter.pot. It fires once per request, before any
template part, as the first focusable element, and targets #main-content — the id
every template's <main> carries. Change the label with the gutter/skip_link_text
filter (documented below) without editing a template.

**One template ships without site chrome.** page-blank.html intentionally omits the
header and footer parts so the editor owns the entire canvas for coming-soon and
full-bleed layouts. It is the only template without site chrome. It still exposes
the skip-link target — a single empty h1 and the main landmark with
id="main-content" — and because the skip link is rendered on wp_body_open rather
than inside the header part, it is present and functional on page-blank too. The
template is labelled "Page: Blank (no header/footer)" in the editor so the omission
is explicit. Every other template includes the header, footer, and landmark scaffold.

Gutter exposes a small set of public filters. All hook names are prefixed with the
theme slug (gutter/). Examples use closures and are PHP 7.4 compatible.

= gutter/skip_link_text =

Filter (string). Changes the visible label of the keyboard skip link. The value is
escaped with esc_html() on output. Default: "Skip to content". Fires from
render_skip_link() in inc/setup.php, which prints the link on wp_body_open.

    add_filter( 'gutter/skip_link_text', function ( $label ) {
        return 'Skip to main content';
    } );

= gutter/developer_guide_url =

Filter (string). Changes the URL the "developer guide" link on the Appearance →
Gutter: Get started page points to. Default: https://thisismyurl.com/colophon.
Fires from get_started_content() in inc/admin.php.

    add_filter( 'gutter/developer_guide_url', function ( $url ) {
        return 'https://example.com/my-developer-guide';
    } );

= gutter/footer_credit =

Filter (string). Replaces the footer credit line, or removes it by returning an
empty string. The value is sanitised with wp_kses to a minimal anchor allow-list.
Default: "Built with the Gutter theme." (theme name linked to its Theme URI). Fires
from get_footer_credit_value() in inc/bindings.php (block-bindings source
gutter/footer-credit).

    add_filter( 'gutter/footer_credit', function ( $credit ) {
        return ''; // Remove the credit entirely.
    } );

= gutter/copyright_text =

Filter (string). Replaces the whole footer copyright sentence. Default:
"© {year} {Site Title}. All rights reserved." Fires from get_copyright_value() in
inc/bindings.php (block-bindings source gutter/copyright).

    add_filter( 'gutter/copyright_text', function ( $copyright ) {
        return '© ' . gmdate( 'Y' ) . ' Example Inc.';
    } );

= gutter/copyright_date_format =

Filter (string). Changes the PHP date format used for the copyright year, or supply a
literal string for a range. Default: 'Y' (four-digit year). The value is passed to
current_time(), so the year follows the site timezone. Fires from get_copyright_value()
in inc/bindings.php.

    add_filter( 'gutter/copyright_date_format', function () {
        return '2022–' . gmdate( 'Y' ); // A year range, e.g. "2022–2026".
    } );

= gutter/preload_fonts =

Filter (array). Adds theme-relative font paths to preload for LCP. Default includes the
IBM Plex Serif variable file. Fires from the asset enqueue in inc/assets.php.

    add_filter( 'gutter/preload_fonts', function ( array $fonts ) {
        $fonts[] = 'assets/fonts/my-extra-face.woff2';
        return $fonts;
    } );

== Changelog ==

= 1.6165.1612 =
Accessibility (WCAG 2.1 1.4.3 — contrast, the data-table surfaces):
* Fixed: striped tables (core's is-style-stripes) bound their odd-row zebra to a
  hardcoded light grey (#f0f0f0). In the dark variations that light stripe stranded
  the inverted body ink on a light fill — terminal 1.30:1, night-report 1.17:1.
  The odd-row fill now binds to the rule-light token, a subtle ground shade that is
  light in the light variations and dark in the dark ones, so the zebra stays a quiet
  ground tint and body text clears AA on it in every variation (worst case 9.93:1).
  The override matches core's own selector (.is-style-stripes tbody tr:nth-child(odd)).
* Fixed: the positive/negative figure tokens (the green up / red down figures in the
  market-watch table and the overweight/underweight signal styles) failed AA on the
  light variations against their actual grounds, including the active-row accent-tint
  ground, not only the page ground. Bull Market's positive darkened from #2A8050 to
  #1E6038 (active-row ground was 4.14:1). Commodities' positive darkened from #2a8a3a
  to #1E6E2B (page ground 3.91:1, active-row 3.58:1) and its negative from #cc3333 to
  #B82626 (active-row 4.20:1). Green-up / red-down semantics and the terminal feel are
  preserved; every figure-token use now clears 4.5:1 on every ground it lands on.
* Note: an exhaustive contrast recompute was re-run across the default palette and all
  five style variations — every text and UI pair against its actual rendered ground,
  with every table surface checked (header, body, zebra odd/even, active row, figure
  cells, overweight/underweight). Every normal-size pair clears 4.5:1 and every
  large-text/UI pair clears 3:1.

= 1.6165.1545 =
Accessibility (WCAG 2.1 1.4.3 — contrast, every style variation):
* Fixed: the Terminal style variation now redefines the full colour palette
  (thirteen tokens) instead of only the three Colophon anchor custom properties.
  The previous build left every wp:preset palette token at its light-mode value
  while setting a dark page ground, so body text, headings, links, and the active
  market-watch row rendered dark-on-dark — unreadable. Terminal now inverts to a
  coherent amber-on-near-black palette and every text/surface pair clears AA.
* Fixed: Night Report and Commodities palettes were tuned for AA across every
  surface. Night Report's accent lightened to clear AA on its dark accent-tint and
  ground, its "white" token redefined dark so button, accent-band, and skip-link
  text reads dark-on-accent, its muted/faint tones rebalanced for the inverted
  ground, and its negative red lightened. Commodities darkened its accent and muted
  ink and moved its page ground off the mid-tone "rule" colour (which failed body
  and meta contrast) onto the light "ground" colour, with the standard heading,
  link, and button element overrides added.
* Fixed: the underweight signal block style no longer hardcodes a light pink
  background (#fbeeee). It binds to the paper token, which inverts with the palette,
  so the negative-red label clears AA in the default palette and in the terminal,
  night-report, and commodities variations alike.
* Fixed: secondary page text (post dates, data labels, the data-label block style,
  table captions, comment dates, the site tagline) moved from the ink-faint token
  to ink-muted. ink-faint is a decorative-weight grey that did not clear 4.5:1 as
  body-adjacent text on a light ground; ink-muted does, on every variation's page
  ground, while still reading quieter than body copy. ink-faint is now reserved for
  the dim labels on the dark footer/report chrome band, where it pairs with the
  ink-deep band token and inverts coherently.
* Fixed: the site-footer pattern's About heading moved from the white token to the
  ground token, and the report-header pattern's confidentiality label, subtitle, and
  byline moved from fixed rgba-white literals to the ink-faint and paper tokens.
  Both surfaces sit on the inverting ink-deep band; the fixed-white values stranded
  near-white text on a light ground once ink-deep inverted in the dark variations.
* Note: an exhaustive contrast audit was run across all five style variations and
  the default palette, computing WCAG relative luminance for every text element
  against its actual rendered background (including alpha-composited and inverted
  grounds). Every normal-size pair now clears 4.5:1 and every large-text/UI pair
  clears 3:1. Decorative non-text hairlines at opacity <= 0.15 are exempt.

Versioning:
* Version synced across style.css, readme.txt, inc/bootstrap.php, and colophon.json
  (colophon.json had drifted to the pre-release 1.158.1749 value).

= 1.6164.1430 =
Internationalisation (translation-ready integrity):
* Fixed: the keyboard skip link is now rendered in PHP on wp_body_open
  (render_skip_link() in inc/setup.php) and wrapped in esc_html_e() instead of
  shipping as a hardcoded "Skip to content" literal in a wp:html block. A
  non-English site previously saw the link in English despite the translation-ready
  tag; the label now translates and appears in languages/gutter.pot. The label is
  filterable via gutter/skip_link_text. The header template part no longer carries
  a skip link, so there is still exactly one in the DOM.
* Fixed: archive.html, index.html, and search.html no longer set a hardcoded
  "Read more" moreText override on their post-excerpt blocks. Core now supplies its
  own translatable read-more link text, so a non-English site renders the
  translated label.
* Fixed: removed the visitor-facing English literals from block markup that a
  non-English site would have rendered in English. search.html dropped its
  "Search Results" eyebrow (the query-title h1 beneath it already reads "Search
  results for: X" and is translatable through core). index.html and archive.html
  replaced their hardcoded no-results sentences with the search form as the
  recovery path, matching search.html and 404.html. research-cards.php, a
  PHP-rendered pattern, wraps its no-results line in esc_html_e().
* Fixed: patterns/site-footer.php no longer hardcodes "© 2026 Gutter Research. All
  rights reserved." Its copyright paragraph binds to the gutter/copyright source,
  so an inserted copy carries the live, translatable copyright with a year that
  never goes stale.
* Updated: languages/gutter.pot regenerated — Project-Id-Version matched to the
  current Stable tag, and the new "Skip to content" and "Gutter: Reports" strings
  added.

Pattern library:
* Fixed: the gutter-reports pattern category is now registered
  (skin_pattern_categories() in inc/skin.php). report-cta, section-navigation, and
  site-footer declared that category but it was never registered, so they fell
  under Uncategorised in the inserter.

Dev hygiene:
* Fixed: the gutter/github_updater_repo filter registration in inc/skin.php is now
  guarded by the same file_exists() check the loader uses, so the SKIN file carries
  no live reference to inc/github-updater.php (removed for the WordPress.org build).

Dead links:
* Fixed: the hardcoded /research link in front-page.html and research-cards.php
  (a dead link on any fresh install with no /research page) now points at the
  site root by default, with an editor comment to repoint it.

Documentation:
* Added: a Typography section documenting the IBM Plex Serif/Sans/Mono role split.
* Added: an explicit ideal-buyer line ("the sell-side research desk and the
  economic think tank") to sharpen Featured-theme positioning.
* Added: the gutter/skip_link_text filter is documented in the Developers section.
* Added: a Developers note documenting the Colophon-core inheritance — the
  surviving colophon-* token names and the developer-guide link are the CORE
  contract, not residue — that the skip link is PHP-rendered (and therefore
  translatable and present on page-blank), and naming page-blank.html as the one
  template that intentionally ships without site chrome.

= 1.6164.0900 =
Accuracy and the market-watch interaction:
* Fixed: the Get-started page no longer claims "zero front-end JavaScript." The
  market-watch pattern uses the Interactivity API, so the copy now reads "minimal
  JavaScript — the Interactivity API only on the market-watch pattern."
* Added: a real Interactivity API view module for the market-watch table
  (assets/js/market-watch-view.js). The advertised row highlight now works end to
  end. The store was previously referenced by the markup but never registered, so
  the interaction did nothing.
* Added: keyboard operability for the row highlight — rows are focusable and
  respond to Enter and Space, not click only (WCAG 2.1.1).
* Added: the view module is registered and enqueued only on pages that render the
  pattern (register_market_watch_view() and enqueue_market_watch_view() in
  inc/skin.php), keyed on the pattern's data-wp-interactive marker, so no other
  page gains front-end JavaScript. It is guarded on the Script Modules API and
  degrades to a static, readable table on installs older than WordPress 6.5.

Accessibility:
* Fixed: report-header pattern title demoted from h1 to h2. As an inserter-visible
  editorial pattern dropped into page or post content, its h1 collided with the
  template's post-title h1 (WCAG 2.1 1.3.1). The display scale is set by font-size,
  not heading level, so the cover still reads as the dominant headline. A template
  comment documents the choice.
* Added: a comments section to the single-post template so research notes can carry
  discussion. The comments-title is h2, preserving heading order under the post h1.

Documentation:
* Fixed: cross-theme residue in comments — base.css, reset.css, and print.css no
  longer reference a sibling theme's name or palette words; inc/assets.php and
  templates/single.html now name IBM Plex (the fonts the theme actually uses)
  rather than Fraunces/Jakarta; inc/bindings.php docblock now names the
  gutter/copyright source the code registers.
* Fixed: normalised stale @since tags in inc/admin.php and inc/bindings.php to
  1.0.0, matching the convention used elsewhere and the changelog history.
* Added: the Compatibility section and the JavaScript FAQ now document the
  Interactivity API version dependency and the no-JS fallback explicitly, so the
  progressive-enhancement promise is auditable.
* Added: a one-line "perfect for" positioning sentence near the top of the
  description.

= 1.6163.2249 =
**Theme renamed Margin -> Gutter.** This release aligns the theme's internal
identity with its repository and distribution name. The theme name, text
domain, PHP namespace, pattern slugs and category, block-style names, CSS
class names, hook prefixes, and CLI manifest are all now "gutter"/"Gutter".
Existing sites: re-save the active theme after updating; custom CSS or child
themes targeting the old margin- class names or is-style-margin- block styles
must be updated to the gutter- equivalents.

Accessibility (WCAG 2.1 1.3.1 - one h1 per template):
* archive, search: query-title promoted to level:1
* index: gains a level:1 query-title (it had no page heading)
* page-blank: gains an empty, editor-fillable h1
* front-page (hero-pattern h1), page, page-wide, single, and 404 already complied.
* front-page now carries a template comment documenting the pattern-sourced h1.

Internationalisation:
* 404 template: removed hardcoded English explanation; the heading, search form,
  and a translatable Home-link block now orient the visitor.
* search template: removed the hardcoded no-results sentence; the search form is
  the recovery path and its label is translatable through core.
* footer: the copyright and credit lines are now wired to the block-bindings
  sources (gutter/copyright, gutter/footer-credit) instead of hardcoded text, so
  the year stays live, the credit is filterable, and no prose is left untranslated.
* languages/gutter.pot regenerated from the current source strings (the stale
  margin.pot, which carried the previous theme's strings, was removed).

Versioning and requirements:
* Version synced across style.css, readme.txt, and inc/bootstrap.php (the
  bootstrap VERSION constant still held the pre-rename value).
* Requires PHP corrected to 7.4 (the theme uses no syntax above that floor).
* Tested up to corrected to 6.8 (the previous 7.0 value names an unreleased core).
* Residual margin-era identifiers cleaned up: the GitHub-update repo filter, the
  welcome-notice option and dismiss-action slugs, and a CLI loader comment.

Hardening:
* comment-form attribute injection now uses a guarded preg_replace (single
  replacement, null-check, no-match fallback) instead of a naive str_replace.
* oEmbed content width reads theme.json contentSize (pixel-validated, 720px fallback).
* Get started developer-guide URL filterable via gutter/developer_guide_url.

Requirements:
* Requires PHP 7.4+ and WordPress 6.5+.
* Block bindings (footer copyright and credit) and the Interactivity API
  (market-watch pattern) require WordPress 6.5+.

= 1.158.1749 =
* Initial release.
* Patterns: market-watch, research-hero, sector-table, key-metrics, research-cards, report-header.
* Templates: front-page, index, single, archive, page, page-wide, page-blank, search, 404.
* Block styles: gutter-data-label, gutter-overweight, gutter-underweight, gutter-terminal, gutter-pull-stat.
* Style variation: Terminal dark.

== Credits ==

= IBM Plex Serif =
* Copyright 2017 IBM Corp. and the IBM Plex Project Authors (https://github.com/IBM/plex)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/IBM/plex

= IBM Plex Sans =
* Copyright 2017 IBM Corp. and the IBM Plex Project Authors (https://github.com/IBM/plex)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/IBM/plex

= IBM Plex Mono =
* Copyright 2017 IBM Corp. and the IBM Plex Project Authors (https://github.com/IBM/plex)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/IBM/plex

== License ==

Gutter WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Gutter WordPress Theme, Copyright 2026 Christopher Ross
Gutter is distributed under the terms of the GNU GPL.
