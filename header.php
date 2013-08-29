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
<!--[if gt IE 9]><!--><html class="no-js"  <?php language_attributes(); ?>><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php // viewport based on http://getbootstrap.com/getting-started/#template ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?> - <?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php do_action( 'before_page_container' ); ?>

    <div id="page" class="<?php bstart_class('page', array('hfeed') ); ?>">
        <?php do_action( 'before' ); ?>

            <?php do_action('header_after'); ?>

            <div id="content" class="<?php bstart_class('content'); ?>">
