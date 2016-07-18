<section class="archive row">
    <div class="grid-row">

        <div class="archive-posts">
            <header>
                <h1><?php single_cat_title(); ?></h1>
                <?php if (category_description()) :?>
                    <h2><?php echo category_description(); ?></h2>
                <?php endif; ?>
            </header>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('partials/article-list-item'); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="pager">
                <?php get_template_part('partials/pager') ?>
            </div>
        </div>

    <?php get_template_part('partials/sidebar') ?>

    </div>
</section>
