<?php

get_header();

?>

<div class="container my-5">
    <h2>Latest blog posts</h2>

    <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
        ];

        $loop = new WP_Query($args);
    ?>

<!-- 'meta_query' => [
                'relation' => 'AND',
                [
                    'key' => 'author',
                    'value' => 'pgm_gebruiker'
                ],
                [
                    'key' => 'date',
                    'value' => ''
                ]
            ] -->

    <div class="row">
        <?php while($loop->have_posts()) : $loop->the_post() ?>
            <div class="col-4">
                <a class="card p-4">
                    <?php the_title(); ?>
                </a>
            </div>
        <?php endwhile ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <?php
        $arrayLoop = get_posts($args);

        var_dump($loop);
        var_dump($arrayLoop);
    ?>
</div>

<?php

get_footer();