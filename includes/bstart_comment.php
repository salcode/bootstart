<?php
/**
 * Function for displaying html markup comments when in debug mode
 * can also be extended using filters to bring blocks to help troubleshoot html
 *
 * @package bootstart
 */

if ( !function_exists('bstart_comment') ) {
    function bstart_comment( $output, $return = false ) {

        // by default, when DEBUG is true, we go ahead
        $bstart_comment_active = WP_DEBUG;

        // apply filter to override whether or not we go ahead
        if ( !apply_filters('bstart_comment_active', $bstart_comment_active) ) {
            // bstart_comment not active, exit
            return false;
        }

        // apply filter to modify output
        // default filter (bstart_comment_html) is to add html comment tags
        // i.e.  "<!-- " and " -->"
        $output = apply_filters('bstart_comment', $output);


        if ($return) {
            return $output;
        } else {
            echo $output;
        }

    } // bstart_comment()

} // if function_exists()

/**
 * filter to add html comment tags
 * e.g. "<!-- " and " -->"
 */
function bstart_comment_html( $output ) {
    return '<!-- ' . $output . ' -->';
}
add_filter('bstart_comment', 'bstart_comment_html');

#### e.g. if you want to output NOT as a comment but in <STRONG> tags
/*remove_filter('bstart_comment', 'bstart_comment_html');
function bstart_comment_strong( $output ) {
    return '<strong>' . $output . '</strong>';
}
add_filter('bstart_comment', 'bstart_comment_strong');
// */

