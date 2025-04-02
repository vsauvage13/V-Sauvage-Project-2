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
        <section class="contact-section">
            <h1><?php the_title(); ?></h1>
            <h3>Let’s Create Something Amazing!</h3>
            <p>Ready to bring your bold ideas to life? Whether it’s branding, illustrations, or digital magic, I’d love to hear from you. Drop me a message, and let’s make something playful, colourful, and unforgettable together!</p>

            <!-- Contact Form 7 Shortcode -->
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="96a2334" title="Setting Sun Creative"]'); ?>
            </div>
        </section>
    </main>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
