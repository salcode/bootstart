<?php
/**
 * Modify Theme Support
 *
 * @package bootstart
 */

// enable Featured Images
add_theme_support('post-thumbnails');

// Add RSS feeds
add_theme_support('automatic-feed-links');

// Add Menus
add_theme_support( 'menus' );
register_nav_menus(
    array(
        'main-nav' => __( 'The Main Menu', 'bstart' ),   // main nav in header
    )
);

