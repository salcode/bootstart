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

define( 'BSTART_VERSION', '0.1.1' );

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */
foreach ( glob( dirname( __FILE__ ) . '/includes/*.php' ) as $file ) { include $file; }

add_action('before_page_container', 'bstart_do_nav_before_page_container');
if (!function_exists('bstart_do_nav_before_page_container')) {
    function bstart_do_nav_before_page_container() {
        get_template_part( 'nav' );
    }
} // function_exists()

/**
 * Enqueue base css and js
 */
if (!function_exists('bstart_scripts_styles')) {
    function bstart_scripts_styles() {
        wp_enqueue_script( 'bstart', get_template_directory_uri() . "/js/bootstart.js", array('jquery', 'bootstrap'), BSTART_VERSION, true );
        wp_enqueue_style(  'bstart', get_template_directory_uri() . "/theme.css", array(), BSTART_VERSION );
    }
} // function_exists()
add_action( 'wp_enqueue_scripts', 'bstart_scripts_styles' );

/**
 * Enqueue js with IE conditional comments
 *
 * based on
 * http://getbootstrap.com/getting-started/#template
 * http://stackoverflow.com/questions/11564142/wordpress-enqueue-scripts-for-only-if-lt-ie-9/16221114#16221114
 */
if (!function_exists('bstart_ie_cc_js')) {
    function bstart_ie_cc_js() {
       ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script src="<?php echo get_template_directory_uri() . '/js/vendor/respond/respond.min.js'; ?>"></script>
        <![endif]-->

        <?php
    }
} // function_exists()
add_action( 'wp_head', 'bstart_ie_cc_js');




/**
 * Image Sizes
 */
add_image_size( 'bstart-featured', 847, 420, true );



