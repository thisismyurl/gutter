<?php
/**
 * Title: Research Cards Archive
 * Slug: gutter/research-cards
 * Categories: gutter-archive
 * Viewport Width: 1280
 * Inserter: true
 * Description: Three-column research post grid using wp:query. IBM Plex Mono dates and category labels; Plex Serif post titles; Plex Sans excerpts.
 */
?>
<!-- wp:group {"className":"gutter-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group gutter-section" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--rule)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-serif","fontWeight":"300","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|ink-deep"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--plex-serif);font-weight:300;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.02em;color:var(--wp--preset--color--ink-deep)">Latest Research</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|accent"}}} -->
		<p style="font-family:var(--wp--preset--font-family--plex-mono);font-size:var(--wp--preset--font-size--xs);color:var(--wp--preset--color--accent)"><a href="/research" style="color:inherit;text-decoration:none">All reports →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|8"}}}} -->
			<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|accent"}}} /-->

			<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-serif","fontWeight":"300","lineHeight":"1.2","letterSpacing":"-0.01em","fontSize":"var:preset|font-size|lg"},"color":{"text":"var:preset|color|ink-deep"},"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} /-->

			<!-- wp:post-excerpt {"moreText":"Read report","showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans","fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} /-->

			<!-- wp:post-date {"format":"j M Y","style":{"typography":{"fontFamily":"var:preset|font-family|plex-mono","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|ink-faint"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|plex-sans"},"color":{"text":"var:preset|color|ink-muted"}}} -->
			<p style="font-family:var(--wp--preset--font-family--plex-sans);color:var(--wp--preset--color--ink-muted)">No research reports published yet.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
