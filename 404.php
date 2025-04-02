<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
    <!-- < ?php the_title(); ?> -->
</head>

<body <?php body_class(); ?>>
    <!-- <h1>< ?php bloginfo('name'); ?></h1> -->
    <h2><?php bloginfo('description'); ?></h2>

    <?php get_header(); ?>
    <!-- Template Name: front-page -->

    <!-- Hero Section -->
    <section class="hero-banner">
        <div class="hero-content">
            <h1>This is the 404 page</h1> <br>
            <h2>Looks like this link has gone dark…</h2>
        </div>
    </section>

    <!-- Added wp_footer() before closing </body> tag -->
    <?php get_footer(); ?>
</body>

</html>