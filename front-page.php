<?php

get_header();

get_template_part('components/hero', 'hero', [
    "tagline" => get_field('tagline'),
    "title" => get_the_title(),
    "content" => get_the_content(),
    "id" => get_the_ID(),
]);

?>

<div class="card">
    <?php the_title() ?>

    <a href="<?php the_permalink() ?>">
        <?php echo __('PGM Rules', 'cryptoland'); ?>
        <?php _e('Read more', 'cryptoland'); ?>
        <?php echo esc_html__('Read more', 'cryptoland'); ?>
        <?php esc_html_e('Read more', 'cryptoland'); ?>
    </a>
</div>

<?php

get_template_part('components/cards', 'cards', [
    "top-title" => "Why choose us",
    "main-title" => "Our features",
    "description" => "Occaecat nisi amet laboris cupidatat. Ullamco id est tempor adipisicing ullamco occaecat laboris fugiat. Esse mollit magna excepteur voluptate anim nisi aliquip.",
    "cards" => new WP_Query([
        'post_type' => 'feature',
        'posts_per_page' => 3
    ])
]);

if (!is_user_logged_in()) {
    wp_login_form();
}

get_footer();