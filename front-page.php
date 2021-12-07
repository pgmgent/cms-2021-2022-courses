<?php

get_header();

get_template_part('components/hero', 'hero', [
    "tagline" => get_field('tagline'),
    "title" => get_the_title(),
    "content" => get_the_content(),
    "id" => get_the_ID(),
]);

get_footer();