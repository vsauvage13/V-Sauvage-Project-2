<?php
/**
 * Template Name: Contact Page
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />

</head>

<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <main class="contact-page">
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
