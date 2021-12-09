<?php

function customize_blocks() {
    wp_enqueue_script('block-script', get_theme_file_uri('/dist/blocks.js'), array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'), '0.3');
    wp_enqueue_style( 'block-style', get_theme_file_uri('/dist/blocks.css'), [], '0.3');
}

add_action('enqueue_block_editor_assets', 'customize_blocks');
