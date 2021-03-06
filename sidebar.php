<?php
/**
 * The Sidebar for the theme.
 *
 * @package bootstart
 */
?>

<?php bstart_comment('BEGIN sidebar.php'); ?>
<div id="sidebar1" class="<?php bstart_class( 'sidebar1', '!widget-area col-sm-3' ); ?>" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar1' ) ) : ?>

        <aside id="search" class="widget widget_search">
            <?php get_search_form(); ?>
        </aside>

        <aside id="archives" class="widget">
            <h4 class="widget-title"><?php _e( 'Categories', 'bstart' ); ?></h4>
            <ul>
                <?php wp_list_categories(array(
                    'title_li'    => ''
                )); ?>
            </ul>
        </aside>

    <?php endif; // end sidebar widget area ?>
</div><?php bstart_comment('#sidebar'); ?>
<?php bstart_comment('END sidebar.php'); ?>
