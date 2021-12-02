<?php get_header() ?>

<div>
    <?php get_template_part('components/hero', 'hero', [
        'description' => get_the_excerpt()
    ]) ?>

    <?php get_template_part('components/thumbnail', 'thumbnail', [
        'size' => 'hero-image'
    ]) ?>

    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php the_excerpt(); ?>
    <?php the_permalink();?>
    <?php the_category();?>
    <?php the_tags();?>

    <?php if( have_posts() ) the_post(); // Dan werkt the_author wel, aangezien the_post variables beschikbaar maakt. ?>
    <?php the_author(); // Enkel zichtbaar in The Loop ?>
    <?php the_ID();?>
</div>

<?php get_footer() ?>




