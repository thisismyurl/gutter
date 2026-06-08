# Gutter

A free, typography-first full-site-editing WordPress theme for financial research publishers — the investment research firms, economic think tanks, and capital markets publications that lead with data, not decoration.

[Releases](https://github.com/thisismyurl/gutter/releases) · [Built on Colophon](https://github.com/thisismyurl/colophon)

---

## Why I built it this way

Gutter is a typographic term for the space between two facing pages in a spread — or the inner margin that keeps text from colliding with the binding. It's the invisible structural element that makes a document readable. Which is the right name for a theme designed for publishers who have to present numbers, charts, and dense research copy without losing the reader.

Financial research publishers have a specific problem: their content is data-heavy, their audience is sophisticated, and the wrong visual decision destroys credibility instantly. A serif that reads as academic, not literary. Tables that don't require JavaScript to scroll. Charts that don't compete with the prose. White space that implies deliberation, not decoration.

IBM Plex Serif was the right choice for the editorial role because it was designed for the exact environment where financial research gets published — screens, not print, long-form, not short-form. It has the authority of a traditional editorial serif without the archaism. Plex Sans handles interface elements and short-form labels. Plex Mono handles every number, every ticker symbol, every code reference. The system is deliberate: one family, three optical roles, no stylistic tension.

The data table pattern was the reason this theme existed before the rest of it did. I couldn't find a WordPress FSE pattern that treated a data table as a first-class design element — properly type-set, responsive without horizontal scroll at mobile, number-column aligned. So I built it.

---

## Design decisions

- **IBM Plex family across all three optical roles** — Serif for editorial, Sans for interface, Mono for data. One family, zero font-system conflict, correct authority signal for financial publishing.
- **Data table as a first-class pattern** — typed with Plex Mono in numeric columns, responsive collapse at mobile, designed to present financial data without requiring a spreadsheet embed or JavaScript dependency.
- **High-contrast neutral palette** — navy/slate/white with amber accent for data callouts. Reads correctly for WCAG 2.2 AA in all variants without adjustment.
- **Archive and research library templates** — designed for publications with deep back catalogues of reports, whitepapers, and research notes. Browse by date, by sector, by author.
- **Pull-quote and data-callout patterns** — the two moments in financial research where you need to stop the reader and direct attention to a single number. Designed to work in-flow without interrupting the reading experience.

---

## Built on Colophon

Gutter runs on the [Colophon](https://github.com/thisismyurl/colophon) core: WCAG 2.2 AA accessible in all variants, zero plugin dependencies, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties.

---

## License

GPLv2 or later. IBM Plex fonts are SIL Open Font License 1.1.
