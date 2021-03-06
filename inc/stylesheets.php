<?php
/**
 * Register and enqueue the front end CSS
 *
 * @package Alien Ship
 * @since 1.0
 */


/* Load our styles */
function alienship_theme_styles() {
    $alienship = wp_get_theme();

    /* Load core Bootstrap CSS */
    wp_enqueue_style( 'bootstrap', alienship_locate_template_uri( 'css/bootstrap.min.css' ), array(), $alienship['Version'], 'all' );

    /* Load responsive Bootstrap if enabled */
    if ( of_get_option( 'alienship_responsive', 1 ) ) {
        wp_enqueue_style( 'bootstrap-responsive', alienship_locate_template_uri( 'css/bootstrap-responsive.min.css' ), array( 'bootstrap' ), $alienship['Version'], 'all' );
    }

    /* Load theme styles */
    wp_enqueue_style( 'alienship-style', get_stylesheet_uri(), array( 'bootstrap' ), $alienship['Version'], 'all' );
}
add_action( 'wp_enqueue_scripts', 'alienship_theme_styles' );