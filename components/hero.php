<section class="bg-secondary text-white position-relative pt-5">
    <div class="container pt-0 pt-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12">
                <?php echo_args($args, 'tagline', "strong", "d-block mb-3"); ?>
                <?php echo_args($args, 'title', "h1"); ?>
                <?php echo_args($args, 'content', "p"); ?>
            </div>
            
            <div class="col-lg-7 col-12">
                <div class="d-flex justify-content-center">
                    <?php the_post_thumbnail('large', [
                        'class' => 'img-fluid mt-4 mt-lg-0'
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Kan je geen bootstrap styling toevoegen: <?php require get_theme_file_path('/assets/images/hero-shape.svg'); ?> -->

    <img
        class="img-fluid mt-lg-n4"
        src="<?php echo get_theme_file_uri('/assets/images/hero-shape.svg'); ?>"
        alt=" "
    >
</section>