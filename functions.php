<?php
/**
 * functions.php
 * NOTE: this functions include hooks outlined on http://core.trac.wordpress.org/ticket/21506
 * header_after (done)
 * post_after
 * comment_after
 * footer_after (done)
 * 
 * other possible hooks?  https://github.com/zamoose/themehookalliance
 *
 * @package bootstart
 */

define( 'BSTART_VERSION', '0.1.0' );

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */
foreach ( glob( dirname( __FILE__ ) . '/includes/*.php' ) as $file ) { include $file; }

/**
 * Enqueue base css and js
 */

function bstart_scripts_styles() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_style(  'bootstrap', "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css", array(), '3.0.0' );

    wp_enqueue_script( 'bstart', get_template_directory_uri() . "/js/bootstart.js", array('bootstrap'), BSTART_VERSION, true );
    wp_enqueue_style(  'bstart', get_template_directory_uri() . "/theme.css", array(), BSTART_VERSION );
}
add_action( 'wp_enqueue_scripts', 'bstart_scripts_styles' );


