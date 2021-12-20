<?php

function set_login_page_styling() { ?>
    <style>
        #login h1 a {
            background-image: url("<?php echo get_theme_file_uri('/assets/images/logo.svg'); ?>");
            margin: 0 auto;
            width: 75%;
            background-size: contain;
        }
    </style>
    <?php 

    wp_enqueue_style( 'main-style', get_theme_file_uri('/dist/main.css'), [], '0.2');
}

add_action( 'login_enqueue_scripts', 'set_login_page_styling');

function set_login_logo_url() {
    return home_url();
}

add_filter('login_headerurl', 'set_login_logo_url');

function set_login_logo_text() {
    return __('Cryptoland', 'cryptoland');
}

add_filter('login_headertext', 'set_login_logo_text');