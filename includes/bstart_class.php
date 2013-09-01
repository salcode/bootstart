<?php
/**
 * Get classes for different html elements using filters
 * Modified 20130831 to separate classes and important_classes to make it easy to
 * overwrite general classes without impacting important classes
 * use case for important classes would be something like .widget-area
 *
 * @package bootstart
 */

/**
 * Get classes for different html elements using filters
 * classes are passed in as an array of class names
 * Because some classes are important (e.g. 'widget-area') regardless
 * of other styles that need to be applied (e.g. 'col-sm-3')
 * I've added support for important classes
 * important classes start with an exclamation point and are stored in the
 * important class variable.
 *
 * Since we are building this with Bootstrap
 */
function bstart_class($id, $classes = array(), $important_classes = array(), $return = false ) {
    // ensure classes are arrays (e.g. convert from string to array if necessary)
    $classes            = bstart_class_force_array ( $classes );
    $important_classes  = bstart_class_force_array ( $important_classes );

    // parse for important classes (see note about important classes)
    list($classes, $important_classes) = bstart_class_parse_important( $classes, $important_classes );
    /*evd(array(
        $classes,
        $important_classes,
    ));
    */

    // filter for general classes (things like 'col-sm-3')
    $classes = apply_filters(
        'bstart_'.$id.'_class',
        $classes,
        $important_classes
    );

    // filter for important classes (seldom used), things like 'widget-area'
    $important_classes  = apply_filters(
        'bstart_'.$id.'_class_important',
        $important_classes, 
        $classes
    );

    /*evd(array(
        $classes,
        $important_classes,
    ));
    */

    // create string for output (using both $classes and $important_classes)
    $output = implode(' ', array_merge( $classes, $important_classes ) );

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
 * Force $classes to be an array (e.g. convert from string if necessary)
 */
function bstart_class_force_array( $classes ) {
    if (is_string( $classes ) ) {
        // convert string to array by breaking at spaces
        return explode(' ', $classes);
    }

    if ( is_array( $classes ) ) {
        // already an array, no need to do anything different
        return $classes;
    }
    
    // the parameter is not a recognized type
    //error_log('bstart_class parameter is neither a string nor array');
    return new WP_Error('bstart_class_paramter', __('$classes (or $important_classes) paramter for bstart_class is neither an array nor string'));
}

/**
 * Modify array of classes which may include shortcut important class
 * (e.g. '!example_class')
 * and correctly assign values into the two arrays
 * $classes and $important_classes
 *
 */
function bstart_class_parse_important( $classes, $important_classes) {
    foreach( $classes as $i=>$class ) {
        // if class is imporant
        if ( '!' === $class[0] ) {
            // add to $important_classes array ( after remove ! )
            $important_classes[] = substr( $class, 1 );
            // remove from $classes
            unset( $classes[$i] );
        }
    }
    // $classes = array_values( $classes ); // undecided if this is needed here
    return array(
        $classes,
        $important_classes
    );
}

/**
 * Test modify sidebar
 */

//add_filter( 'bstart_sidebar1_class', 'do_bstart_sidebar1_class', 10, 2);
function do_bstart_sidebar1_class( $classes, $important_classes ) {
    $classes = array('col-sm-2');
    return $classes;
}

