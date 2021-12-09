<?php

get_header();

get_template_part('components/hero', 'hero', [
    "tagline" => get_field('tagline'),
    "title" => get_the_title(),
    "content" => get_the_content(),
    "id" => get_the_ID(),
]);

get_template_part('components/cards', 'cards', [
    "top-title" => "Why choose us",
    "main-title" => "Our features",
    "description" => "Occaecat nisi amet laboris cupidatat. Ullamco id est tempor adipisicing ullamco occaecat laboris fugiat. Esse mollit magna excepteur voluptate anim nisi aliquip.",
    "cards" => new WP_Query([
        'post_type' => 'feature',
        'posts_per_page' => 3
    ])
]);

get_footer();