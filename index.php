<?php
/**
 * The default template file
 *
 * @package bootstart
 */

    get_header();
?>
<main id="main" class="<?php echo bstart_get_html_classes('main', array('site-main') ); ?>" role="main">
    <?php get_template_part( 'loop' ); ?>
</main><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
