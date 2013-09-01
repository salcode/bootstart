<?php
/**
 * The default template file
 *
 * @package bootstart
 */

    get_header();
?>
<main id="main" class="<?php bstart_class('main', 'col-sm-9'); ?>" role="main">
    <?php get_template_part( 'loop' ); ?>
</main><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
