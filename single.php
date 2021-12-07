<?php get_header() ?>

<div class="container mb-5">
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

<?php $related_posts = get_field('related_posts'); ?>

<?php if ($related_posts) : ?>
    <div class="container mb-5">
        <div class="row">
            <?php foreach($related_posts as $post) : ?>
                <?php setup_postdata($post); ?>
                
                <a href="<?php the_permalink(); ?>" class="card">
                    <strong><?php the_title(); ?></strong>
                    <p>
                        <?php
                            if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                the_content();
                            }
                        ?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>

<?php get_footer() ?>




