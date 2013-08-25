<?php
/**
 * The Sidebar for the theme.
 *
 * @package bootstart
 */
?>
<div id="sidebar1" class="widget-area col-sm-3" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar1' ) ) : ?>

        <aside id="search" class="widget widget_search">
            <?php get_search_form(); ?>
        </aside>

        <aside id="archives" class="widget">
            <h1 class="widget-title"><?php _e( 'Categories', 'bstart' ); ?></h1>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
        </aside>

    <?php endif; // end sidebar widget area ?>
</div><!-- #sidebar1 -->
