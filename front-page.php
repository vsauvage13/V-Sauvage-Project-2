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
        <!-- <h1>< ?php the_title(); ?></h1> -->

        <!-- Display the post content dynamically -->
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

    <h2>FEATURED PROJECTS</h2>
    <hr />

     <!-- Digital Marketing Block -->
     <section class="project-block">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Digital-Marketing-CCC.png" alt="Digital Marketing">
        <div class="project-content">
            <h3>DIGITAL MARKETING</h3>
            <p>Vibrant visuals meet smart strategy. From social media to campaigns, I blend funky designs with modern marketing to engage and connect.</p>
            <a href="#" class="btn">See More</a>
        </div>
    </section>
    <hr />

<!-- Branding and Identity Block -->
<section class="project-block reverse">
        <div class="project-content">
            <h3>BRANDING AND IDENTITY</h3>
            <p>Playful, bold, and retro-inspired branding that tells your story. From logos to full identities, I create designs that connect and leave a lasting impression.</p>
            <a href="#" class="btn">See More</a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>images/Branding-CCC-Business-Cards.png" alt="Branding and Identity">
    </section>
    <hr />

<!-- Illustrations Block -->
<section class="project-block">
        <img src="<?php echo get_template_directory_uri(); ?>images/Illustrations-Pomponio-State-Beach.png" alt="Illustrations">
        <div class="project-content">
            <h3>ILLUSTRATIONS</h3>
            <p>Whimsical, colourful illustrations, inspired by Vancouver Island and the Pacific Northwest. Each piece is crafted to excite, inspire, and bring your ideas to life.</p>
            <a href="#" class="btn">See More</a>
        </div>
    </section>
    <hr />

     <!-- Contact Section -->
     <section class="contact-section">
        <h3>Let’s Create Something Amazing!</h3>
        <p>Ready to bring your bold ideas to life? Whether it’s branding, illustrations, or digital magic, I’d love to hear from you. Drop me a message, and let’s make something playful, colourful, and unforgettable together!</p>
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
            <label for="full-name">Full Name (required)</label>
            <input type="text" id="full-name" name="full-name" required>

            <label for="email">Your Email (required)</label>
            <input type="email" id="email" name="email" required>

            <label for="service">What Can I Help You With?</label>
            <select id="service" name="service">
                <option value="illustrations">Illustrations</option>
                <option value="branding">Branding</option>
                <option value="digital-marketing">Digital Marketing</option>
                <option value="other">Other</option>
            </select>

            <label for="message">Your Message (required)</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
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
