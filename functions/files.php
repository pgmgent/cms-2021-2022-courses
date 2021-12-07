<?php

function load_styles_and_script() {
    wp_enqueue_style( 'main-style', get_theme_file_uri('/dist/main.css'), [], '0.2');
    wp_enqueue_script( 'main-script', get_theme_file_uri('/dist/main.js'), [], '0.1', true);
}

add_action('wp_enqueue_scripts', 'load_styles_and_script');