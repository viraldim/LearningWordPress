<?php
/*
Template Name: Common Layout
*/

get_header();

if(have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="post page">
            <h2><?php the_title(); ?></h2>

            <!-- info-box -->
            <div class="info-box">
                <h4>DIsclamer Title</h4>
                <p>Pellentesque vehicula lectus velit, tincidunt tempus libero cursus at</p>
            </div><!-- /info-box -->
            <?php the_content()?>
        </article>
    <?php endwhile;

else :
    echo '<p> No content found</p>';

endif;

get_footer();
?>
