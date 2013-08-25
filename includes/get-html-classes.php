<?php
/**
 * Get classes for different html elements using filters
 *
 * @package bootstart
 */

/**
 * Get classes for different html elements using filters
 *
 * Since we are building this with Bootstrap 
 */
function bstart_get_html_classes($id, $classes = array() ) {
    $classes = apply_filters( 'bstart_'.$id.'_class', $classes );
    return implode(' ', $classes);
}

/**
 * Add default classes for the following html elements
 */

// #primary
add_filter( 'bstart_primary_class', 'do_bstart_primary_class' );
function do_bstart_primary_class( $classes ) {
    $classes[] = 'abc';
    return $classes;
}

// #main
add_filter( 'bstart_main_class', 'do_bstart_main_class' );
function do_bstart_main_class( $classes ) {
    $classes[] = 'col-sm-9';
    return $classes;
}

remove_filter( 'bstart_main_class', 'do_bstart_main_class' );
add_filter( 'bstart_main_class', 'change_main_class' );
function change_main_class( $classes ) {
    $classes[] = 'col-sm-5';
    return $classes;
}

