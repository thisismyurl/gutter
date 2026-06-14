<?php
/**
 * [SKIN] The skin layer — the one PHP file `colophon sync` never overwrites.
 *
 * Gutter's PHP-side personality: the editorial image crops for research
 * publication layout, the LCP font preload (IBM Plex Serif 300 paints every
 * h1 on the research hero), the block styles the data patterns depend on, and
 * the pattern category registrations.
 *
 * The [CORE] inc/ files stay portable because none of Gutter's specifics leak
 * into them. That separation is the whole point of the CORE/SKIN split.
 *
 * Pillar 8 (Kodawari): the LCP preload is IBM Plex Serif Light — not all
 * weights, not all faces. Only what paints the first visible element.
 *
 * @package gutter
 */

namespace Gutter;

defined( 'ABSPATH' ) || exit;

// Opt this theme into GitHub-release self-updates, but only when the updater
// actually ships. inc/github-updater.php is [REMOVABLE] and absent in the
// WordPress.org build (functions.php loads it behind the same file_exists guard),
// so registering the filter unconditionally would leave a live reference to a
// file that does not exist. Guarding it here keeps the SKIN file honest: no
// dangling hook for a feature that isn't installed.
if ( file_exists( DIR . '/inc/github-updater.php' ) ) {
	add_filter( 'gutter/github_updater_repo', static function (): string {
		return 'thisismyurl/gutter';
	} );
}

/**
 * Register Gutter's image crop sizes.
 *
 * research-hero: 16:9 — the standard research article banner.
 * research-card: 3:2 — archive card thumbnail in the research-cards pattern.
 * report-cover: 2:3 — portrait crop for report PDF cover thumbnails.
 */
function skin_image_sizes(): void {
	add_image_size( 'gutter-research-hero', 1360, 765, true );  // 16:9 article banner.
	add_image_size( 'gutter-research-card', 780, 520, true );   // 3:2 archive card.
	add_image_size( 'gutter-report-cover', 520, 780, true );    // 2:3 report cover.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_image_sizes' );

/**
 * Preload IBM Plex Serif Light — the LCP-critical font on every Gutter page.
 *
 * The variable Serif file covers all weights the theme uses (300/400/500).
 * One preload instead of three discrete files — browser gets the axis file
 * early so h1 rendering is never blocked waiting for weight negotiation.
 *
 * Pillar 8 (Kodawari): preloading the right file, not the family.
 */
add_filter(
	'gutter/preload_fonts',
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/ibm-plex-serif/ibm-plex-serif-variable.woff2';
		return $fonts;
	}
);

/**
 * Register Gutter's block styles.
 *
 * These are the is-style-{name} classes patterns and editors apply. CSS
 * treatments live in skin.css @layer components. Registrations here provide
 * the editor-facing label. Keep labels plain English — the editor should
 * understand the style without needing to see the CSS.
 *
 * Pillar 7 (High Agency): editors can apply these without developer help.
 */
function skin_block_styles(): void {

	// [SKIN] Paragraph styled as a financial data label — IBM Plex Mono, tracked,
	// ink-faint. Used beside figures in the market-watch and key-metrics patterns.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'gutter-data-label',
			'label' => __( 'Data label', 'gutter' ),
		)
	);

	// [SKIN] Paragraph styled as an overweight signal — accent colour (blue), Mono.
	// Used in the sector-table pattern to flag positive analyst ratings.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'gutter-overweight',
			'label' => __( 'Overweight signal', 'gutter' ),
		)
	);

	// [SKIN] Paragraph styled as an underweight signal — negative colour (red), Mono.
	// Used in the sector-table pattern to flag negative analyst ratings.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'gutter-underweight',
			'label' => __( 'Underweight signal', 'gutter' ),
		)
	);

	// [SKIN] Group styled as a terminal display — dark background, Mono face,
	// reduced leading. The terminal dark style variation inverts this further.
	// Used in the market-watch pattern header row.
	register_block_style(
		'core/group',
		array(
			'name'  => 'gutter-terminal',
			'label' => __( 'Terminal display', 'gutter' ),
		)
	);

	// [SKIN] Heading styled as a pull-statistic — oversized Plex Mono number,
	// ink-faint label beneath. Used in the key-metrics pattern.
	register_block_style(
		'core/heading',
		array(
			'name'  => 'gutter-pull-stat',
			'label' => __( 'Pull statistic', 'gutter' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_block_styles' );

/**
 * Register the market-watch Interactivity API view module.
 *
 * Registered (not enqueued) on init so it is available to enqueue on demand.
 * It depends on @wordpress/interactivity, the core module that ships the store
 * runtime; WordPress loads both as ES modules, so there is no global script and
 * no jQuery. The actual enqueue is conditional — see enqueue_market_watch_view().
 *
 * Guarded on wp_register_script_module() so the theme degrades cleanly on any
 * pre-6.5 install that slips past the "Requires at least" header: without the
 * Script Modules API the table simply stays a static, fully readable table.
 */
function register_market_watch_view(): void {
	if ( ! function_exists( 'wp_register_script_module' ) ) {
		return;
	}

	$path = DIR . '/assets/js/market-watch-view.js';
	if ( ! file_exists( $path ) ) {
		return;
	}

	wp_register_script_module(
		SLUG . '-market-watch-view',
		URI . '/assets/js/market-watch-view.js',
		array( '@wordpress/interactivity' ),
		(string) filemtime( $path )
	);
}
add_action( 'init', __NAMESPACE__ . '\\register_market_watch_view' );

/**
 * Enqueue the market-watch view module only on pages that render the pattern.
 *
 * The pattern is a wp:html block, so its rendered output carries the
 * data-wp-interactive marker. Detecting it here means the Interactivity runtime
 * loads only where the table actually appears — zero JavaScript on every other
 * page. The module is registered once (above) and enqueued at most once.
 *
 * @param string $block_content The rendered block HTML.
 * @return string The block HTML, unchanged.
 */
function enqueue_market_watch_view( string $block_content ): string {
	if (
		function_exists( 'wp_enqueue_script_module' )
		&& false !== strpos( $block_content, 'data-wp-interactive="gutter-market-watch"' )
	) {
		wp_enqueue_script_module( SLUG . '-market-watch-view' );
	}

	return $block_content;
}
add_filter( 'render_block_core/html', __NAMESPACE__ . '\\enqueue_market_watch_view' );

/**
 * Register Gutter's block pattern categories.
 *
 * Patterns auto-register from patterns/ (WordPress 6.0+). These categories
 * give them a clear home in the pattern library under "Gutter: …" rather than
 * appearing under Uncategorised.
 */
function skin_pattern_categories(): void {

	register_block_pattern_category(
		'gutter-data',
		array(
			'label'       => __( 'Gutter: Data', 'gutter' ),
			'description' => __( 'Market data tables, sector tables, and key metrics patterns.', 'gutter' ),
		)
	);

	register_block_pattern_category(
		'gutter-editorial',
		array(
			'label'       => __( 'Gutter: Editorial', 'gutter' ),
			'description' => __( 'Research heroes, article headers, and report covers.', 'gutter' ),
		)
	);

	register_block_pattern_category(
		'gutter-archive',
		array(
			'label'       => __( 'Gutter: Archive', 'gutter' ),
			'description' => __( 'Research card grids and post archive patterns.', 'gutter' ),
		)
	);

	register_block_pattern_category(
		'gutter-reports',
		array(
			'label'       => __( 'Gutter: Reports', 'gutter' ),
			'description' => __( 'Report calls to action, section navigation, and the site footer.', 'gutter' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_pattern_categories' );
