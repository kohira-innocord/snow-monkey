<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Add sidebar widget area
 *
 * @return void
 */
add_action( 'init', function() {
	$post_types = snow_monkey_get_public_post_types();
	foreach ( $post_types as $post_type => $post_type_object ) {
		register_sidebar( [
			// @codingStandardsIgnoreStart
			'name'          => sprintf( __( '%1$s sidebar', 'snow-monkey' ), __( $post_type_object->label ) ),
			'description'   => sprintf( __( 'This widgets are displayed in the %1$s page sidebar.', 'snow-monkey' ), __( $post_type_object->label ) ),
			// @codingStandardsIgnoreEnd
			'id'            => $post_type_object->name . '-post-type-sidebar-widget-area',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="c-widget__title"><span>',
			'after_title'   => '</span></h2>',
		] );

		register_sidebar( [
			// @codingStandardsIgnoreStart
			'name'          => sprintf( __( '%1$s sticky sidebar', 'snow-monkey' ), __( $post_type_object->label ) ),
			'description'   => sprintf( __( 'This widgets are displayed in the %1$s page sidebar.', 'snow-monkey' ), __( $post_type_object->label ) ),
			// @codingStandardsIgnoreEnd
			'id'            => $post_type_object->name . '-post-type-sidebar-sticky-widget-area',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="c-widget__title"><span>',
			'after_title'   => '</span></h2>',
		] );
	}
}, 11 );

/**
* Add top of title widget area
*
* @return void
*/
add_action( 'init', function() {
	$post_types = snow_monkey_get_public_post_types();
	foreach ( $post_types as $post_type => $post_type_object ) {
		register_sidebar( [
			// @codingStandardsIgnoreStart
			'name'          => sprintf( __( '%1$s top of title', 'snow-monkey' ), __( $post_type_object->label ) ),
			'description'   => sprintf( __( 'This widgets are displayed in the top of %1$s title.', 'snow-monkey' ), __( $post_type_object->label ) ),
			// @codingStandardsIgnoreEnd
			'id'            => $post_type_object->name . '-post-type-title-top-widget-area',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="c-widget__title"><span>',
			'after_title'   => '</span></h2>',
		] );
	}
}, 11 );

/**
* Add bottom of contents widget area
*
* @return void
*/
add_action( 'init', function() {
	$post_types = snow_monkey_get_public_post_types();
	foreach ( $post_types as $post_type => $post_type_object ) {
		register_sidebar( [
			// @codingStandardsIgnoreStart
			'name'          => sprintf( __( '%1$s bottom of contents', 'snow-monkey' ), __( $post_type_object->label ) ),
			'description'   => sprintf( __( 'This widgets are displayed in the bottom of %1$s contents.', 'snow-monkey' ), __( $post_type_object->label ) ),
			// @codingStandardsIgnoreEnd
			'id'            => $post_type_object->name . '-post-type-contents-bottom-widget-area',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="c-widget__title"><span>',
			'after_title'   => '</span></h2>',
		] );
	}
}, 11 );

/**
* Add sidebar widget area
*
* @return void
*/
add_action( 'widgets_init', function() {
	register_sidebar( [
		'name'          => __( 'Archive sidebar', 'snow-monkey' ),
		'id'            => 'archive-sidebar-widget-area',
		'description'   => __( 'This widgets are displayed in the archive page sidebar.', 'snow-monkey' ),
		'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="c-widget__title"><span>',
		'after_title'   => '</span></h2>',
	] );
} );

/**
 * Add footer widget area
 *
 * @return void
 */
add_action( 'widgets_init', function() {
	register_sidebar( [
		'name'          => __( 'Footer', 'snow-monkey' ),
		'id'            => 'footer-widget-area',
		'description'   => __( 'This widgets are displayed in the footer.', 'snow-monkey' ),
		'before_widget' => '<div class="l-footer-widget-area__item c-row__col c-row__col--1-1 c-row__col--lg-' . esc_attr( get_theme_mod( 'footer-widget-area-column-size' ) ) . '"><div id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="c-widget__title"><span>',
		'after_title'   => '</span></h2>',
	] );
} );

/**
 * Add front page widget area
 *
 * @return void
 */
add_action( 'widgets_init', function() {
	register_sidebar( [
		'name'          => __( 'Front page (Top of page)', 'snow-monkey' ),
		'id'            => 'front-page-top-widget-area',
		'description'   => __( 'This widgets are displayed in the static front page.', 'snow-monkey' ),
		'before_widget' => '<div class="l-front-page-widget-area__item"><div id="%1$s" class="c-section %2$s"><div class="c-container">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h2 class="c-section__title">',
		'after_title'   => '</h2>',
	] );
} );

/**
 * Add front page widget area
 *
 * @return void
 */
add_action( 'widgets_init', function() {
	register_sidebar( [
		'name'          => __( 'Front page (Bottom of page)', 'snow-monkey' ),
		'id'            => 'front-page-bottom-widget-area',
		'description'   => __( 'This widgets are displayed in the static front page.', 'snow-monkey' ),
		'before_widget' => '<div class="l-front-page-widget-area__item"><div id="%1$s" class="c-section %2$s"><div class="c-container">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h2 class="c-section__title">',
		'after_title'   => '</h2>',
	] );
} );
