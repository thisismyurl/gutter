<?php
/**
 * Title: Report CTA
 * Slug: margin/report-cta
 * Categories: margin-reports
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full-width call to action to download or subscribe to a research report. Plex Serif headline, Plex Sans pitch copy, accent-blue primary button and a secondary subscribe link on a light accent-tint ground with an accent left rule.
 *
 * @package margin
 */
?>
<!-- wp:group {"className":"margin-section margin-report-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"left":{"color":"var:preset|color|accent","style":"solid","width":"4px"}},"color":{"background":"var:preset|color|accent-tint"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group margin-section margin-report-cta has-background" style="border-left:4px solid var(--wp--preset--color--accent);background-color:var(--wp--preset--color--accent-tint);padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}},"textColor":"accent"} -->
		<p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Q2 2026 Outlook</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-serif","fontWeight":"300","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.02em","lineHeight":"1.1"},"color":{"text":"var:preset|color|ink-deep"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--plex-serif);font-weight:300;font-size:var(--wp--preset--font-size--2xl);letter-spacing:-0.02em;line-height:1.1;color:var(--wp--preset--color--ink-deep)">Access the full report</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
		<p style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--base);line-height:1.65;color:var(--wp--preset--color--ink-muted)">Forty pages of sector analysis, charted forecasts, and the underlying dataset. Read the methodology, download the figures, and put the numbers to work before the next print.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"},"margin":{"top":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">
			<!-- wp:button {"backgroundColor":"accent","textColor":"white","style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontWeight":"600","letterSpacing":"0.03em"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-accent-background-color has-text-color has-background wp-element-button" href="#download" style="border-radius:0;font-family:var(--wp--preset--font-family--plex-sans);font-weight:600;letter-spacing:0.03em">Download Now</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","textColor":"accent","style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontWeight":"600","letterSpacing":"0.03em"},"color":{"background":"transparent"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-color has-text-color has-background wp-element-button" href="#subscribe" style="border-radius:0;background-color:transparent;font-family:var(--wp--preset--font-family--plex-sans);font-weight:600;letter-spacing:0.03em">Subscribe to research</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
