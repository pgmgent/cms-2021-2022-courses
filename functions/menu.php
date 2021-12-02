<?php

function register_custom_menus() {
    register_nav_menus([
        'primary_menu' => 'Hoofdmenu',
        'social_menu' => 'Social Media Menu'
    ]);
}

add_action( 'init', 'register_custom_menus');