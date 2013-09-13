<?php
/**
 * Pagination
 *
 * @package bootstart
 */
?>

<?php bstart_comment('BEGIN pagination.php'); ?>
<?php
    global $wp_query, $post;
    $older = get_next_posts_link('&larr; Older');
    $newer = get_previous_posts_link('Newer &rarr;');
?>
<ul class="pager">
    <li class="previous"><?php echo $older; ?></li>
    <li class="next"><?php echo $newer; ?></li>
</ul>

<?php bstart_comment('END pagination.php'); ?>
