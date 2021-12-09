<?php

/*
    Template Name: Content without sidebar
    Template Post Type: feature, post
*/

get_header();

get_template_part('/components/banner', 'banner', [
    'title' => get_the_title(),
])

?>



<div class="container my-5">
    <div class="row">
        <article class="col-12 col-md-6 col-lg-8 mx-auto">
            <?php the_post_thumbnail('large', [
                'class' => 'img-fluid'
            ]); ?>
            <?php the_content(); ?>
        </article>
    </div>
</div>

<?php
get_footer();