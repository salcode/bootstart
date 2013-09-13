<?php
/**
 * The Footer for the theme.
 *
 * @package bootstart
 */
?>

<?php bstart_comment('BEGIN footer.php'); ?>
        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info">
                <?php do_action('site_info'); ?>
            </div><?php bstart_comment('.site-info'); ?>
            <?php do_action('footer_after'); ?>

        </footer><?php bstart_comment('#colophon'); ?>

        <?php wp_footer(); ?>

    </div> <?php bstart_comment('#page'); ?>
</body>
</html>
<?php bstart_comment('END footer.php'); ?>
