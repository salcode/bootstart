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
                <?php do_action( '_s_credits' ); ?>
                    <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>
                    <?php printf( __( 'Theme: %1$s by %2$s.', 'bootstart' ), 'bootstart', '<a href="http://salferrarello.com/">Sal Ferrarello</a>' ); ?>
            </div><!-- .site-info -->
            <?php do_action('footer_after'); ?>

        </footer><!-- #colophon -->

        <?php wp_footer(); ?>

    </div><!-- #page -->
</body>
</html>
