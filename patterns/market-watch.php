<?php
/**
 * Title: Market Watch
 * Slug: margin/market-watch
 * Categories: margin-data
 * Viewport Width: 1280
 * Inserter: true
 * Description: Market data table with dark header row and Interactivity API row highlighting. IBM Plex Mono throughout. Overweight/underweight signal labels.
 */
?>
<!-- wp:group {"className":"margin-section margin-band--ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group margin-section margin-band--ground" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--6);border-bottom:1px solid var(--wp--preset--color--rule)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-serif","fontWeight":"300","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|ink-deep"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--plex-serif);font-weight:300;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.02em;color:var(--wp--preset--color--ink-deep)">Market Watch</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|ink-faint"}}} -->
		<p style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--xs);color:var(--wp--preset--color--ink-faint)">Updated 14 Jun 2026</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Market-watch table wrapper — Interactivity API row highlighting -->
	<!-- wp:html -->
	<div class="margin-market-watch" style="margin-top:var(--wp--preset--spacing--6)">
		<table
			data-wp-interactive="margin-market-watch"
			data-wp-init="callbacks.init"
		>
			<thead>
				<tr>
					<th>Ticker</th>
					<th>Name</th>
					<th>Price</th>
					<th>Chg%</th>
					<th>Vol</th>
					<th>Rating</th>
				</tr>
			</thead>
			<tbody>
				<tr
					data-wp-on--click="callbacks.selectRow"
					data-wp-class--is-row-active="state.activeRow === 0"
				>
					<td style="font-weight:500">NEP</td>
					<td>NextEra Energy Partners</td>
					<td>41.22</td>
					<td style="color:var(--wp--preset--color--positive)">+1.84%</td>
					<td>2.3M</td>
					<td><span class="is-style-margin-overweight">Overweight</span></td>
				</tr>
				<tr
					data-wp-on--click="callbacks.selectRow"
					data-wp-class--is-row-active="state.activeRow === 1"
				>
					<td style="font-weight:500">BEP</td>
					<td>Brookfield Renewable Partners</td>
					<td>28.17</td>
					<td style="color:var(--wp--preset--color--positive)">+0.97%</td>
					<td>1.1M</td>
					<td><span class="is-style-margin-overweight">Overweight</span></td>
				</tr>
				<tr
					data-wp-on--click="callbacks.selectRow"
					data-wp-class--is-row-active="state.activeRow === 2"
				>
					<td style="font-weight:500">PPL</td>
					<td>PPL Corporation</td>
					<td>32.44</td>
					<td style="color:var(--wp--preset--color--negative)">-0.32%</td>
					<td>4.7M</td>
					<td><span class="is-style-margin-underweight">Underweight</span></td>
				</tr>
				<tr
					data-wp-on--click="callbacks.selectRow"
					data-wp-class--is-row-active="state.activeRow === 3"
				>
					<td style="font-weight:500">AES</td>
					<td>AES Corporation</td>
					<td>17.89</td>
					<td style="color:var(--wp--preset--color--positive)">+2.11%</td>
					<td>8.2M</td>
					<td><span class="is-style-margin-overweight">Overweight</span></td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- /wp:html -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}},"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|2xs"},"color":{"text":"var:preset|color|ink-faint"}}} -->
	<p style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--2xs);color:var(--wp--preset--color--ink-faint)">Data for illustrative purposes only. Click a row to highlight. Not investment advice.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
