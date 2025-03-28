<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
    <?php the_title(); ?>
</head>
<body <?php body_class(); ?>>
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>

    <?php get_header(); ?>
    <!-- Template Name: front-page -->

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Display the post title inside an <h1> element -->
        <h1><?php the_title(); ?></h1>
        <!-- <h1>< ?php the_title(); ?></h1> -->

        <!-- Display the post content dynamically -->
        <?php the_content(); ?>
        <!-- < ?php the_content(); ?> -->
         <!-- TAke spaces out before? for above php if I want them back! -->

<!-- Hero Section -->
<section class="hero-banner">
        <div class="hero-content">
            <h1>Welcome to Setting Sun Creative</h1>
            <h4>Vienna May Sauvage – Graphic Designer & Illustrator</h4>
            <p>Playful, whimsical, and colourful—my design style blends retro graphics with a modern twist, many inspired by beautiful Vancouver Island. With a background in digital marketing, photography, and illustration, I create bold, joyful designs that connect emotionally and visually. Let’s create, together!</p>
        </div>
    </section>

        
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>

    <?php endwhile; ?>

        <?php
        if (get_next_posts_link()) {
            next_posts_link();
        }
        ?>
        <?php
        if (get_previous_posts_link()) {
            previous_posts_link();
        }
        ?>

    <?php else : ?>

        <p>No posts found. :(</p>

    <?php endif; ?>
    
    <?php get_template_part( 'template-parts/content', 'cta' ); ?>



    <!-- Added wp_footer() before closing </body> tag -->
    <?php wp_footer(); ?>
    <?php get_footer(); ?>
</body>
</html>
