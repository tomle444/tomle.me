<?php
global $query_string;
$query_string .= "&posts_per_page=1"; // append the post count limit
query_posts($query_string); // perform the query
?>

<?php while (have_posts()) : the_post(); ?>

    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <span class="postmetadata"><?php the_category(' / ') ?> &mdash; <?php edit_post_link('Edit', '', ' &mdash; '); ?>  <?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span><br/>
        <small><span class="date"><?php the_time('d') ?></span><br /><?php the_time('M y') ?> <!-- by <?php the_author() ?> --></small>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <div class="entry">
            <?php the_content('<em>Continue reading &rarr;</em>'); ?>
        </div>
        <div class="clearfix"></div>

    </div>

<?php endwhile; ?>