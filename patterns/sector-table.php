<?php
/**
 * Title: Sector Analysis Table
 * Slug: gutter/sector-table
 * Categories: gutter-data
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full-width sector analysis table with overweight/underweight ratings. Uses WordPress Table block styled with IBM Plex Mono. Analyst ratings column uses gutter-overweight and gutter-underweight signal styles.
 */
?>
<!-- wp:group {"className":"gutter-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group gutter-section" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--6)">
		<!-- wp:paragraph {"className":"is-style-gutter-data-label"} -->
		<p class="is-style-gutter-data-label">Sector Coverage · Q2 2026</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-serif","fontWeight":"300","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|ink-deep"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--plex-serif);font-weight:300;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.02em;color:var(--wp--preset--color--ink-deep)">Sector Ratings Overview</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:table {"hasFixedLayout":true,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|sm"}},"className":"is-style-stripes"} -->
	<figure class="wp-block-table is-style-stripes" style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--sm)">
		<table class="has-fixed-layout">
			<thead>
				<tr>
					<th>Sector</th>
					<th>Weight</th>
					<th>YTD Return</th>
					<th>P/E (fwd)</th>
					<th>Div Yield</th>
					<th>Rating</th>
					<th>Analyst</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Clean Energy</td>
					<td>18.4%</td>
					<td style="color:var(--wp--preset--color--positive)">+14.2%</td>
					<td>28.4×</td>
					<td>2.1%</td>
					<td><strong>OW</strong></td>
					<td>Chen, A.</td>
				</tr>
				<tr>
					<td>Natural Gas Infra</td>
					<td>12.1%</td>
					<td style="color:var(--wp--preset--color--positive)">+6.8%</td>
					<td>16.2×</td>
					<td>4.7%</td>
					<td><strong>OW</strong></td>
					<td>Okafor, T.</td>
				</tr>
				<tr>
					<td>Regulated Utilities</td>
					<td>22.7%</td>
					<td style="color:var(--wp--preset--color--negative)">-1.2%</td>
					<td>19.1×</td>
					<td>3.8%</td>
					<td>EW</td>
					<td>Park, S.</td>
				</tr>
				<tr>
					<td>Coal Generation</td>
					<td>3.2%</td>
					<td style="color:var(--wp--preset--color--negative)">-11.4%</td>
					<td>7.4×</td>
					<td>6.9%</td>
					<td style="color:var(--wp--preset--color--negative)"><strong>UW</strong></td>
					<td>Williams, J.</td>
				</tr>
				<tr>
					<td>Nuclear</td>
					<td>9.8%</td>
					<td style="color:var(--wp--preset--color--positive)">+22.1%</td>
					<td>34.7×</td>
					<td>0.8%</td>
					<td><strong>OW</strong></td>
					<td>Chen, A.</td>
				</tr>
			</tbody>
		</table>
		<figcaption style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--2xs);color:var(--wp--preset--color--ink-muted)">OW = Overweight · EW = Equal Weight · UW = Underweight. For illustrative purposes only.</figcaption>
	</figure>
	<!-- /wp:table -->

</div>
<!-- /wp:group -->
