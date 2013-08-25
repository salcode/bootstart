<?php
/**
 * Remove public facing WordPress version number
 *
 * @package bootstart
 */

// remove WP version
remove_action( 'wp_head', 'wp_generator' );
// remove WP version from RSS
add_filter('the_generator', 'bstart_remove_rss_wp_ver');
function bstart_remove_rss_wp_ver() { return ''; }

