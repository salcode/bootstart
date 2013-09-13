<?php
/**
 * Enqueue bootstrap css and js
 */
if (!function_exists('bstart_bootstrap_scripts_styles')) {
    function bstart_bootstrap_scripts_styles() {
        // bootstrap css
        wp_enqueue_style(  'bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css",  array(), '3.0.0' );
        // bootstrap js
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/js/vendor/bootstrap/bootstrap.min.js",    array('jquery'), '3.0.0', true );
   }
} // function_exists()

add_action( 'wp_enqueue_scripts', 'bstart_bootstrap_scripts_styles' );


