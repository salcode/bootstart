<?php

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */
foreach ( glob( dirname( __FILE__ ) . '/includes/*.php' ) as $file ) { include $file; }


