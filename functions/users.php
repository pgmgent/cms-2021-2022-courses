<?php

function redirect_users() {
    $currentUser = wp_get_current_user();

    if (count($currentUser->roles) == 1 && $currentUser->roles[0] == 'subscribed') {
       wp_redirect(home_url());
    }
}

add_action( 'admin_init', 'redirect_users');