<?php
/**
 * Title: Report Header
 * Slug: margin/report-header
 * Categories: margin-editorial
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full-width report cover header for a research publication page. Series label, report title, publication info, and a download button placeholder. Terminal dark background.
 */
?>
<!-- wp:group {"className":"margin-section margin-band--terminal","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group margin-section margin-band--terminal" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Report classification + series label -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"rgba(255,255,255,0.15)","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid rgba(255,255,255,0.15)">
		<!-- wp:paragraph {"className":"is-style-margin-data-label","style":{"color":{"text":"var:preset|color|accent-tint"}}} -->
		<p class="is-style-margin-data-label" style="color:var(--wp--preset--color--accent-tint)">Energy Infrastructure Series · Report 4 of 6</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|xs"},"color":{"text":"rgba(255,255,255,0.4)"}}} -->
		<p style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--xs);color:rgba(255,255,255,0.4)">CONF: For Institutional Clients Only</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Report title -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10)">

		<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-serif","fontWeight":"300","fontSize":"var:preset|font-size|4xl","lineHeight":"1.05","letterSpacing":"-0.025em"},"color":{"text":"var:preset|color|paper"}}} -->
		<h1 style="font-family:var(--wp--preset--font-family--plex-serif);font-weight:300;font-size:var(--wp--preset--font-size--4xl);line-height:1.05;letter-spacing:-0.025em;color:var(--wp--preset--color--paper)">North American Energy Transition: Capital Allocation and the Infrastructure Gap</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|md","lineHeight":"1.6","fontWeight":"300"},"color":{"text":"rgba(250,249,247,0.72)"}}} -->
		<p style="font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--md);line-height:1.6;font-weight:300;color:rgba(250,249,247,0.72)">Grid modernisation requires $4.7 trillion in new capital by 2040. This report examines capital deployment patterns across utility, developer, and infrastructure segments — and identifies the sectors where the gap between required and available capital is widest.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--8)">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"white","style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","fontWeight":"600","letterSpacing":"0.03em"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-white-color has-background has-text-color" style="border-radius:0;font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);font-weight:600;letter-spacing:0.03em">Download PDF →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|xs"},"color":{"text":"rgba(255,255,255,0.4)"}}} -->
			<p style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--xs);color:rgba(255,255,255,0.4)">Alexandra Chen, CFA · June 2026 · 48 pp.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
