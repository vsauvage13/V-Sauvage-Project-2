<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
    <!-- < ?php the_title(); ?> displays word home -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<header>
    <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/SSC-Logo-Colour-Wordmark-and-Half-Sun.png" alt="colour logo and wordmark">
    <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
</header>

</html>