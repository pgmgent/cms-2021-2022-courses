<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body class="d-flex flex-column h-100 <?php body_class(); ?>">
    <!-- Start Header Area -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary z-10">
        <div class="container">
            <?php the_custom_logo(); ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll">
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'container' => 'false',
                            'li_class' => 'nav-item link-light mx-lg-3',
                            'link_class' => 'fw-medium nav-link',
                            'items_wrap'    => '%3$s',
                        ]) 
                    ?>
                </ul>

                <ul class="list-unstyled my-0 d-flex align-items-center">
                    <?php get_template_part( 'components/autocomplete', 'autocomplete'); ?>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'primary_buttons_menu',
                            'container' => false,
                            'li_class' => 'nav-item link-light ms-lg-3',
                            'link_class' => 'btn btn-light text-secondary',
                            'items_wrap'    => '%3$s',
                        ]) 
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header Area -->

