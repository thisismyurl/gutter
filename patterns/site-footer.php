<?php
/**
 * Title: Site Footer
 * Slug: margin/site-footer
 * Categories: margin-reports
 * Viewport Width: 1280
 * Inserter: true
 * Description: Dark professional footer on ink-deep ground. Four columns — About, Research, Data, Subscribe — over a footer bar carrying copyright and legal disclaimers in Plex Mono.
 *
 * @package margin
 */
?>
<!-- wp:group {"className":"margin-site-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|10","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"color":{"background":"var:preset|color|ink-deep","text":"var:preset|color|ground"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group margin-site-footer has-ground-color has-ink-deep-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-serif","fontWeight":"300","fontSize":"var:preset|font-size|lg","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|white"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--plex-serif);font-weight:300;font-size:var(--wp--preset--font-size--lg);letter-spacing:-0.01em;color:var(--wp--preset--color--white)">About</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","lineHeight":"1.65"},"color":{"text":"var:preset|color|ink-faint"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);line-height:1.65;color:var(--wp--preset--color--ink-faint)">Independent research and market intelligence for analysts, economists, and institutional desks. Data-led, methodology-first, published without sponsorship.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|2xs","fontWeight":"500","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|ink-faint"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--2xs);font-weight:500;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--ink-faint)">Research</h2>
			<!-- /wp:heading -->
			<!-- wp:list {"className":"margin-footer-links","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}},"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","lineHeight":"2"}}} -->
			<ul class="wp-block-list margin-footer-links" style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);line-height:2">
				<!-- wp:list-item -->
				<li><a href="#markets" style="color:var(--wp--preset--color--ground);text-decoration:none">Markets</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#economy" style="color:var(--wp--preset--color--ground);text-decoration:none">Economy</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#policy" style="color:var(--wp--preset--color--ground);text-decoration:none">Policy</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#reports" style="color:var(--wp--preset--color--ground);text-decoration:none">All reports</a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|2xs","fontWeight":"500","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|ink-faint"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--2xs);font-weight:500;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--ink-faint)">Data</h2>
			<!-- /wp:heading -->
			<!-- wp:list {"className":"margin-footer-links","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}},"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","lineHeight":"2"}}} -->
			<ul class="wp-block-list margin-footer-links" style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);line-height:2">
				<!-- wp:list-item -->
				<li><a href="#datasets" style="color:var(--wp--preset--color--ground);text-decoration:none">Datasets</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#methodology" style="color:var(--wp--preset--color--ground);text-decoration:none">Methodology</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#api" style="color:var(--wp--preset--color--ground);text-decoration:none">Data API</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#licensing" style="color:var(--wp--preset--color--ground);text-decoration:none">Licensing</a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|2xs","fontWeight":"500","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|ink-faint"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--2xs);font-weight:500;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--ink-faint)">Subscribe</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","lineHeight":"1.65"},"color":{"text":"var:preset|color|ink-faint"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);line-height:1.65;color:var(--wp--preset--color--ink-faint)">New research in your inbox the morning it publishes.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex"}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--5)">
				<!-- wp:button {"backgroundColor":"accent","textColor":"white","style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontWeight":"600","letterSpacing":"0.03em"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-accent-background-color has-text-color has-background wp-element-button" href="#subscribe" style="border-radius:0;font-family:var(--wp--preset--font-family--plex-sans);font-weight:600;letter-spacing:0.03em">Get the briefing</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"margin-footer-bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|6"},"margin":{"top":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|3"},"border":{"top":{"color":"var:preset|color|ink-primary","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group margin-footer-bar" style="border-top:1px solid var(--wp--preset--color--ink-primary);margin-top:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--6)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|xs","letterSpacing":"0.04em"},"color":{"text":"var:preset|color|ink-faint"}}} -->
		<p style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--xs);letter-spacing:0.04em;color:var(--wp--preset--color--ink-faint)">© 2026 Margin Research. All rights reserved.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|xs","letterSpacing":"0.04em"},"color":{"text":"var:preset|color|ink-faint"}}} -->
		<p style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--xs);letter-spacing:0.04em;color:var(--wp--preset--color--ink-faint)">Not investment advice. Figures are estimates and subject to revision.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
