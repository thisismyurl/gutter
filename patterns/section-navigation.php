<?php
/**
 * Title: Section Navigation
 * Slug: gutter/section-navigation
 * Categories: gutter-reports
 * Viewport Width: 1280
 * Inserter: true
 * Description: Horizontal secondary navigation bar of section tabs — Markets, Economy, Policy, Data, Opinion — in Plex Sans uppercase. Active tab carries an accent underline; the bar sits on a ground field above a rule.
 *
 * @package gutter
 */
?>
<!-- wp:group {"className":"gutter-section-nav","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}},"color":{"background":"var:preset|color|ground"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group gutter-section-nav has-background" style="border-bottom:1px solid var(--wp--preset--color--rule);background-color:var(--wp--preset--color--ground);padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"className":"gutter-section-nav__tab is-active","style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ink-deep"}}},"border":{"bottom":{"color":"var:preset|color|accent","style":"solid","width":"2px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}}},"textColor":"ink-deep"} -->
		<p class="gutter-section-nav__tab is-active has-ink-deep-color has-text-color has-link-color" style="border-bottom:2px solid var(--wp--preset--color--accent);padding-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><a href="#markets" style="color:inherit;text-decoration:none">Markets</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"gutter-section-nav__tab","style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500","letterSpacing":"0.06em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ink-primary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}}},"textColor":"ink-primary"} -->
		<p class="gutter-section-nav__tab has-ink-primary-color has-text-color has-link-color" style="padding-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;letter-spacing:0.06em;text-transform:uppercase"><a href="#economy" style="color:inherit;text-decoration:none">Economy</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"gutter-section-nav__tab","style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500","letterSpacing":"0.06em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ink-primary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}}},"textColor":"ink-primary"} -->
		<p class="gutter-section-nav__tab has-ink-primary-color has-text-color has-link-color" style="padding-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;letter-spacing:0.06em;text-transform:uppercase"><a href="#policy" style="color:inherit;text-decoration:none">Policy</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"gutter-section-nav__tab","style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500","letterSpacing":"0.06em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ink-primary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}}},"textColor":"ink-primary"} -->
		<p class="gutter-section-nav__tab has-ink-primary-color has-text-color has-link-color" style="padding-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;letter-spacing:0.06em;text-transform:uppercase"><a href="#data" style="color:inherit;text-decoration:none">Data</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"gutter-section-nav__tab","style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","fontWeight":"500","letterSpacing":"0.06em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ink-primary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"}}},"textColor":"ink-primary"} -->
		<p class="gutter-section-nav__tab has-ink-primary-color has-text-color has-link-color" style="padding-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--plex-sans);font-size:var(--wp--preset--font-size--sm);font-weight:500;letter-spacing:0.06em;text-transform:uppercase"><a href="#opinion" style="color:inherit;text-decoration:none">Opinion</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
