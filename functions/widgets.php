<?php

// deactivate new block editor
function phi_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}

add_action( 'after_setup_theme', 'phi_theme_support' );

function add_widgets() {
    register_sidebar( array(
        'name' => 'Post Widget Area',
        'id' => 'post_widgets',
        'before_widget' => '<div class="card shadow p-2 p-sm-4 mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="d-block fs-4 mb-4 fw-light">',
        'after_title' => '</strong>',
    ) );

    register_sidebar( array(
        'name' => 'Footer Widget Area',
        'id' => 'footer_widgets',
        'description' => 'Footer area, possible to enter forms etc.',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="d-block fs-4 mb-4">',
        'after_title' => '</strong>',
    ) );
}

add_action( 'widgets_init', 'add_widgets' );