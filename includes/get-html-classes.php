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
function bstart_class($id, $classes = array(), $return = false ) {
    $classes = apply_filters( 'bstart_'.$id.'_class', $classes );
    $output = implode(' ', $classes);

    if ($return) {
        // when called with final parameter true
        // e.g. bstart_class('main', array(), true);
        return $output;
    } else {
        // default behavior
        echo $output;
    }
}

/**
 * Add default classes for the following html elements
 */

// #page - .container
add_filter( 'bstart_page_class', 'do_bstart_page_class' );
function do_bstart_page_class( $classes ) {
    $classes[] = 'container';
    return $classes;
}
// #content - .row
add_filter( 'bstart_content_class', 'do_bstart_content_class' );
function do_bstart_content_class( $classes ) {
    $classes[] = 'row';
    return $classes;
}


// #primary
add_filter( 'bstart_primary_class', 'do_bstart_primary_class' );
function do_bstart_primary_class( $classes ) {
    $classes[] = 'abc';
    return $classes;
}

// #main - col
add_filter( 'bstart_main_class', 'do_bstart_main_class' );
function do_bstart_main_class( $classes ) {
    $classes[] = 'col-sm-9';
    return $classes;
}

/*
remove_filter( 'bstart_main_class', 'do_bstart_main_class' );
add_filter( 'bstart_main_class', 'change_main_class' );
function change_main_class( $classes ) {
    $classes[] = 'col-sm-5';
    return $classes;
}
*/

