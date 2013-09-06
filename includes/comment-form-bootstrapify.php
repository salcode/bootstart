<?php
/**
 * error_log an object (rather than just a string)
 *
 */
//error_log('comment-form-bootstrapify');
function bstart_do_comment_form_default_fields( $fields ) {
    epr( $fields );
    return $fields;
}
//add_filter('comment_form_default_fields', 'bstart_do_comment_form_default_fields');

//add_action('wp_footer', 'bstart_do_comment_form_default_fields');
