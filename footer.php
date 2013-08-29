<?php
/**
 * The Footer for the theme.
 *
 * @package bootstart
 */
?>

        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info">
                <?php do_action('site_info'); ?>
            </div><!-- .site-info -->
            <?php do_action('footer_after'); ?>

        </footer><!-- #colophon -->

        <?php wp_footer(); ?>

    </div><!-- #page -->
</body>
</html>
