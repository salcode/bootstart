<?php
/**
 * The loop
 *
 * @package bootstart
 */
?>
<?php bstart_comment('BEGIN loop.php'); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );
        ?>
    <?php endwhile; ?>
    <?php comments_template(); ?>
    <?php get_template_part( 'pagination', get_post_format() ); ?>
<?php else: ?>
    No results
<?php endif; ?>
<?php bstart_comment('END loop.php'); ?>
