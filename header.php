<?php
/**
 * The Header for the theme.
 *
 * @package bootstart
 */
?><!DOCTYPE html>
<?php 
 // IE conditional comments to html element
 // http://www.paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
?><!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"  <?php language_attributes(); ?><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php // viewport based on http://getbootstrap.com/getting-started/#template ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php // shim and Respond.js based on http://getbootstrap.com/getting-started/#template ?>
    <?php
    /*
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      // NEEDS TO BE UPDATED
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    */
    ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php do_action( 'before' ); ?>
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <div class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </div>
                <div class="site-description">
                    <?php bloginfo( 'description' ); ?>
                </div>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="screen-reader-text skip-link">
                    <a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a>
                </div><!-- .screen-reader-text -->

                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
        <?php do_action('header_after'); ?>
        <div id="content" class="site-content">
