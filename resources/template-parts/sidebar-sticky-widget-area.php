<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

if ( ! is_active_sidebar( get_post_type() . '-post-type-sidebar-sticky-widget-area' ) ) {
	return;
}
?>

<div class="l-sidebar-sticky-widget-area">
	<?php dynamic_sidebar( get_post_type() . '-post-type-sidebar-sticky-widget-area' ); ?>
</div>
