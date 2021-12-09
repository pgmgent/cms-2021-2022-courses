<?php

function load_styles_and_script() {
    wp_enqueue_style( 'main-style', get_theme_file_uri('/dist/main.css'), [], '0.2');
    wp_enqueue_style( 'blocks-style', get_theme_file_uri('/dist/blocks.css'), [], '0.1');
    wp_enqueue_script( 'main-script', get_theme_file_uri('/dist/main.js'), [], '0.1', true);

    $inlineData = [
        'search_url' => home_url( '/wp-json/cryptoland/search?q=' ),
        'nonce' => wp_create_nonce('wp_rest')
    ];

    wp_add_inline_script( 'main-script', 'const data=' . json_encode($inlineData));
}

add_action('wp_enqueue_scripts', 'load_styles_and_script');