<?php

// deactivate new block editor
function phi_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}

add_action( 'after_setup_theme', 'phi_theme_support' );

function add_widgets() {
    register_sidebar( array(
        'name' => 'Footer Sidebar',
        'id' => 'footer_sidebar',
        'description' => 'Footer area, possible to enter forms etc.',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="d-block fs-4 mb-4">',
        'after_title' => '</strong>',
    ) );
}

add_action( 'widgets_init', 'add_widgets' );