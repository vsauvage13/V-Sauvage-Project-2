<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Display the post title inside an <h1> element -->
        <h1><?php the_title(); ?></h1>

        <!-- Display the post content dynamically -->
        <?php the_content(); ?>
        
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
    
    <!-- Added wp_footer() before closing </body> tag -->
    <?php wp_footer(); ?>
</body>
</html>
