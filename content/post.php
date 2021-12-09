<a class="card text-black-50 shadow-lg text-decoration-none p-2 p-sm-4 text-center h-100" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('post-thumbnail', [
        'class' => 'img-fluid p-4 pb-3 mx-auto'
    ]) ?>

    <div>
        <strong class="fs-5 text-primary d-block mb-2">
            <?php the_title() ?>
        </strong>

        <?php
            if (has_excerpt()) {
                the_excerpt();
            } else {
                echo wp_trim_words( get_the_content(), 100 );
            }
        ?>
    </div>
</a>