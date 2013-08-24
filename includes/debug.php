<?php
/**
 * error_log an object (rather than just a string)
 *
 * http://justin.ag/technology/writing-to-the-php-error-log-with-var_dump-and-print_r/
 */
if (!function_exists('epr')) :
    function epr($x){
        error_log( print_r( $x, true ) );
    }
endif; // epr()

/**
 * error_log an object (rather than just a string)
 *
 * http://justin.ag/technology/writing-to-the-php-error-log-with-var_dump-and-print_r/
 */
if (!function_exists('evd')) :
    function evd($object){
        ob_start();                    // start buffer capture
        var_dump($object);             // dump the values
        $contents = ob_get_contents(); // put the buffer into a variable
        ob_end_clean();                // end capture
        error_log($contents);          // log contents of the result of var_dump($object)
    }
endif; // evd()


/**
 * print_r() surrounded by  <pre> tags
 */
if (!function_exists('pre_print_r')) :
    function pre_print_r($x) {
        echo '<pre>';
        print_r( $x );
        echo '</pre>';
    }
endif; // pre_print_r()

/**
 * var_dump() surrounded by  <pre> tags
 */
if (!function_exists('pre_var_dump')) :
    function pre_var_dump($x) {
        echo '<pre>';
        var_dump( $x );
        echo '</pre>';
    }
endif; // pre_var_dump()

/**
 * alias to evd (based on legacy code Sal Ferrarello has worked on
 */
if (!function_exists('error_logging')) :
    function error_logging($x) {
        evd($x);
    }
endif; // error_logging()

?>
