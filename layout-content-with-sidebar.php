<?php

/*
    Template Name: Content with sidebar
    Template Post Type: feature, post
*/

get_header();

get_template_part('/components/banner', 'banner', [
    'title' => get_the_title(),
    'breadcrumbs' => 'Todo'
])

?>



<div class="container my-5">
    <div class="row">
        <article class="col-12 col-md-6 col-lg-8">
            <?php the_post_thumbnail('large', [
                'class' => 'img-fluid'
            ]); ?>
            <?php the_content(); ?>
        </article>
    
        <aside class="col-12 col-md-6 col-lg-4">
            <?php
                if (is_active_sidebar('post_widgets')) {
                    dynamic_sidebar('post_widgets');
                }
            ?>
        </aside>
    </div>
</div>

<?php
get_footer();