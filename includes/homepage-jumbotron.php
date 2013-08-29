<?php
/**
 * 
 *
 * 
 */
if (!function_exists('bstart_homepage_hero')) :
    function bstart_homepage_hero(){
        get_template_part( 'homehero' );
    }
endif; // bstart_homepage_hero()
add_action('before', 'bstart_homepage_hero');
