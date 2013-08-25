<?php
/**
 * The Default Content
 *
 * @package bootstart
 */
?>
<!-- start content.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ): ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail( 'bstart-featured', array(
                    'class' => 'img-responsive',
                )); ?>
            </a>
        <?php endif; ?>
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
            <?php // add entry-meta here ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
        <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Read More...', 'bootstart' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'bootstart' ), '<span class="edit-link">', '</span>' ); ?>
            <?php
                wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'bootstart' ),
                'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php // Hide category and tag text for pages on Search - do we want to add this? ?>
            <?php
                $categories_list = get_the_category_list( __( ', ', 'bootstart' ) );
                if ( $categories_list ) :
            ?>
                    <span class="cat-links">
                        <?php //printf( __( 'Posted in %1$s', 'bootstart' ), $categories_list ); ?>
                    </span>
            <?php endif; // End if categories ?>

            <?php
                $tags_list = get_the_tag_list( '', __( ', ', 'bootstart' ) );
                if ( $tags_list ) :
            ?>
                    <span class="tags-links">
                        <?php printf( __( 'Tagged %1$s', 'bootstart' ), $tags_list ); ?>
                    </span>
            <?php endif; // End if $tags_list ?>

    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
<!-- end content.php -->
