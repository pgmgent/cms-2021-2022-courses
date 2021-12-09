<?php global $post; setup_postdata( $post ); ?>

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

            wp_reset_postdata();
            echo "</ul>";
        }
    ?>
</div>