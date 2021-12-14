<section class="container d-flex flex-column justify-content-center my-4 mb-5">
    <?php echo_args($args, 'top-title', 'h2', 'text-center fs-5 text-primary mb-0'); ?>
    <?php echo_args($args, 'main-title', 'strong', 'd-block text-center fs-1 text-lg text-secondary mb-4'); ?>
    <?php echo_args($args, 'description', "p", 'mx-auto text-center text-faded'); ?>

    <?php if (isset($args['cards']) && $args['cards']->have_posts()) : ?>
        <ul class="row unstyled-list m-0 p-0 my-4">
            <?php while($args['cards']->have_posts()) : $args['cards']->the_post() ?>
                <li class="list-unstyled col-12 col-md-6 col-lg-4 pb-4">
                    <div class="card text-black-50 shadow-lg text-decoration-none p-2 p-sm-4 text-center h-100">
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

                            <a class="btn btn-outline-secondary mt-4" href="<?php the_permalink(); ?>">
                               <!-- <?php echo __('Meer lezen', 'cryptoland') ?> -->
                               <?php _e('Meer lezen', 'cryptoland') ?>
                            </a>
                        </div>
                    </div>
                </li>
            <?php endwhile ?>
        </ul>
    <?php endif; ?>
</section>