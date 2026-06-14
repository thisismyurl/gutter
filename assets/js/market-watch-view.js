/**
 * [SKIN] Market-watch view module — the row-highlight interaction.
 *
 * Registers the `gutter-market-watch` Interactivity API store the pattern's
 * markup binds to. The table is fully readable without this module; it is
 * progressive enhancement only. WordPress loads it as an ES module via the
 * Interactivity API (@wordpress/interactivity), so there is no jQuery and no
 * global script — it runs only on pages where the pattern is present.
 *
 * State model (patterns/market-watch.php):
 *   table context  {"activeRow":-1}  — the currently selected row index, shared.
 *   row context    {"row":N}          — that row's own index, merged with table.
 *
 * Bindings:
 *   data-wp-on--click="actions.selectRow"      — selects the clicked row
 *   data-wp-on--keydown="actions.selectRowOnKey" — Enter/Space select the row
 *   data-wp-class--is-row-active="state.isActiveRow" — toggles the highlight
 *
 * @package gutter
 */

import { store, getContext } from '@wordpress/interactivity';

store( 'gutter-market-watch', {
	state: {
		/**
		 * True when this row is the selected one.
		 *
		 * Reads the row's own index and the table-level selection from the same
		 * inherited context, so each row resolves the binding locally — no DOM
		 * position lookups, no brittle index math.
		 *
		 * @return {boolean} Whether the current row is active.
		 */
		get isActiveRow() {
			const context = getContext();
			return context.row === context.activeRow;
		},
	},
	actions: {
		/**
		 * Select the row the event fired on.
		 *
		 * Writes the row's index up to the shared table context. Because
		 * activeRow lives on the table and row lives on each <tr>, the same
		 * context object carries both, and every row's isActiveRow getter
		 * re-resolves against the new selection.
		 */
		selectRow() {
			const context = getContext();
			context.activeRow = context.row;
		},

		/**
		 * Keyboard equivalent of selectRow for Enter and Space.
		 *
		 * Rows carry tabindex="0", so they are keyboard-reachable; this keeps the
		 * highlight interaction operable without a pointer (WCAG 2.1.1).
		 *
		 * @param {KeyboardEvent} event The keydown event.
		 */
		selectRowOnKey( event ) {
			if ( 'Enter' !== event.key && ' ' !== event.key ) {
				return;
			}
			event.preventDefault();
			const context = getContext();
			context.activeRow = context.row;
		},
	},
} );
