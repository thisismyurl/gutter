=== Margin ===

Contributors: thisismyurl
Tags: blog, news, full-site-editing, block-patterns, two-columns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, accessibility-ready, translation-ready, wide-blocks, sticky-post
Tested up to: 7.0
Requires at least: 6.5
Requires PHP: 8.1
Stable tag: 1.158.1749
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A WordPress theme for financial research publishers. IBM Plex Serif for editorial authority, IBM Plex Mono for every number.

== Description ==

Margin is a full-site-editing theme for financial research publishers — the investment research firms, economic think tanks, and capital markets publications that lead with data, not decoration. Named for the notes in the column beside the argument: the annotation is where the insight lives.

IBM Plex Serif carries editorial authority at display scale. IBM Plex Sans handles every interface element. IBM Plex Mono renders every number, ticker symbol, and data point in its natural form. The data table is the hero; the research hero pattern is how a report leads. A terminal dark style variation inverts the palette for full trading-terminal aesthetics.

WCAG 2.2 AA accessible, Core Web Vitals optimised, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies.

**Signature patterns:** market-watch (data table with row highlighting), research-hero, sector-table, key-metrics strip, research-cards archive, report-header.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Margin" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Margin: Get started for setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= What is the terminal dark style variation? =

The terminal variation inverts the palette: ink-deep becomes near-white, ground becomes near-black, accent becomes a brighter blue. Apply it from the Style Variations panel in the Site Editor — no code required.

= Does the market-watch pattern require JavaScript? =

The market-watch pattern uses the WordPress Interactivity API (stable since WP 6.5) for row highlighting on hover and click. The data table is fully readable without JavaScript — the Interactivity API provides progressive enhancement only.

= Are the fonts included? =

IBM Plex Serif, IBM Plex Sans, and IBM Plex Mono are bundled as WOFF2 files in assets/fonts/ and loaded via theme.json @font-face declarations. The fonts are released under SIL OFL 1.1 by IBM and the IBM Plex Project Authors. They never phone home to any external service.

= How do I add report PDFs? =

Use the File block, the Document block from a compatible plugin, or link from any pattern. The report-header pattern includes a download button placeholder styled to match the theme.

== Changelog ==

= 1.158.1749 =
* Initial release.
* Patterns: market-watch, research-hero, sector-table, key-metrics, research-cards, report-header.
* Templates: front-page, index, single, archive, page, page-wide, page-blank, search, 404.
* Block styles: margin-data-label, margin-overweight, margin-underweight, margin-terminal, margin-pull-stat.
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

Margin WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Margin WordPress Theme, Copyright 2026 Christopher Ross
Margin is distributed under the terms of the GNU GPL.
