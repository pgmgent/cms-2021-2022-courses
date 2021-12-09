<div class="bg-secondary py-4 pb-5 position-relative">
    <div class="container text-center text-white flex-column d-flex justify-content-center align-items-center py-5">
        <?php echo_args($args, 'title', 'h1', 'fs-4 mb-2 lh-1') ?>
        <?php echo_args($args, 'subtitle', 'span', 'd-block fs-5 fst-italic') ?>

        <?php
            if ((isset($args['breadcrumbs']) && $args['breadcrumbs']) || !isset($args['breadcrumbs']) ) {
                the_breadcrumbs();
            }
        ?>
    </div>

    <!-- <img  class="position-absolute top-0 left-0 object-fit-cover opacity-50" src="<?php echo get_theme_file_uri('assets/images/banner-bg.svg') ?>" /> -->
</div>