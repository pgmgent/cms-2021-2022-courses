<?php

/*
    Template Name: Content without sidebar
    Template Post Type: feature, post
*/

get_header();
?>

<div class="container my-5">
    <article class="col-12 col-md-6 col-lg-8 mx-auto">
        <?php the_post_thumbnail('medium'); ?>
        <?php the_content(); ?>
    </article>
</div>

<?php
get_footer();