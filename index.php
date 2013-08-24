<?php
/**
 * The default template file
 *
 * @package bootstart
 */

    get_header();
?>
<div id="primary" class="container">
    <main id="main" class="site-main" role="main">
        <?php get_template_part( 'loop' ); ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
