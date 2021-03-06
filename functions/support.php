<?php

function add_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height' => 35,
        'width' => 200
    ]);

    // Customize sizes
    add_image_size( 'hero-image', 1980, 300, ['left', 'top'] );
}

add_action( 'after_setup_theme', 'add_support');