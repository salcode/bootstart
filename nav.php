<?php
/**
 * The nav
 *
 * @package bootstart
 */
?>
<?php bstart_comment('BEGIN nav.php'); ?>
    <nav id="site-navigation" class="<?php bstart_class('site-navigation', '!navbar navbar-default'); ?>" role="navigation">
        <div class="container">
                <?php bstart_comment('Brand and toggle get grouped for better mobile display'); ?>
                <div class="navbar-header">

                <div class="sr-only skip-link">
                    <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'bstart' ); ?>"><?php _e( 'Skip to content', 'bstart' ); ?></a>
                </div><?php bstart_comment('.sr-only'); ?>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="<?php bstart_class('site-brand', 'navbar-brand'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div><?php bstart_comment('.navbar-header'); ?>
            <?php bstart_comment('BEGIN wp_nav_menu()'); ?>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'depth'      => 2,
                        'container'  => false,
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_page_menu',
                        'walker' => new Bootstrap_Walker_Nav_Menu()
                    )
                );
                ?>

            <?php bstart_comment('END wp_nav_menu()'); ?>

      </div><?php bstart_comment('.container'); ?>
    </nav><?php bstart_comment('#site-navigation'); ?>
<?php bstart_comment('END nav.php'); ?>
