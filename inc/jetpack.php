<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package rfm
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function rfm_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'rfm_jetpack_setup' );
