<article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="post-info">
    <?php the_time('j.n.Y - g:i a') ?> | by

    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author() ?>
    </a> | Posted in

    <?php
    $categories = get_the_category();
    $separator = ", ";
    $output ='';

    if($categories){
        foreach($categories as $cat){
            $output .= $cat->cat_name . $separator;
        }

        echo trim($output, $separator);

    }
    ?>
</p>

<?php the_post_thumbnail('small-thumbnail'); ?>
<?php the_content()?>
</article>