<!DOCTYPE html>
<!--[if lt IE 8]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <?php get_template_part('partials/open-graph-tags'); ?>
    <?php do_action('campaigns_before_body_gds_analytics') ?>
    <?php do_action('campaigns_before_body') ?>
</head>
<body <?php body_class(); ?>>
    <?php do_action('campaigns_after_body') ?>

    <?php get_template_part('partials/global-header'); ?>

    <main class="main" role="main" id="content">
        <?php h()->w_requested_template(); ?>
    </main>

    <?php get_template_part('partials/global-footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>
