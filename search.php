<?php

get_header();

get_template_part('/components/banner', 'banner', [
    'title' => 'Search results',
    'subtitle' => "&quot;" . get_search_query() . "&quot;",
    'breadcrumbs' => false
])

?>

<div class="container my-5">
    <?php
        if ( have_posts() ) {
            echo "<ul class='row list-unstyled'>";

            while ( have_posts() ) {
                the_post();
                echo "<li class='col-12 col-sm-6 col-md-4 col-lg-3'>";
                get_template_part( "/content/" . get_post_type(), get_post_type() );
                echo "</li>";
            }

            echo "</ul>";
        } else {
            echo "<div class='d-flex flex-column justify-content-center align-items-center py-5'>";
            echo "<strong class='fs-5 d-block mb-4'>Er zijn geen resultaten voor je zoekopdracht.</strong>";
            echo get_search_form();
            echo "</div>";
        }
    ?>
</div>

<?php
get_footer();