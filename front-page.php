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
    <section class="hero-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Vienna-May-Sauvage-Header-Image.png');">
        <div class="hero-content">
            <h1>Welcome to Setting Sun Creative</h1>
            <h4>Vienna May Sauvage – Graphic Designer & Illustrator</h4>
            <p>Playful, whimsical, and colourful—my design style blends retro graphics with a modern twist, many inspired by beautiful Vancouver Island. With a background in digital marketing, photography, and illustration, I create bold, joyful designs that connect emotionally and visually. Let’s create, together!</p>
        </div>
    </section>

   <section class="featured-projects-title"><h2>FEATURED PROJECTS</h2>

   </section> 
    <hr class="custom-hr" />


    <!-- Featured Projects Section -->
    <section class="featured-projects">
        <?php
        // Query to get the latest posts or custom post type if needed
        $args = array(
            'post_type'      => 'post', // Default post type (change if using a custom one)
            'posts_per_page' => 6,      // Number of posts to display
            'order'          => 'DESC', // Show newest posts first
        );

        $query = new WP_Query($args);

        // Check if there are any posts
        if ($query->have_posts()) :

            while ($query->have_posts()) : $query->the_post();

                // Get ACF custom fields
                $project_title       = get_field('project_title');
                $project_description = get_field('project_description');
                $project_image       = get_field('project_image');
                $project_button      = get_field('project_button');
        ?>
                <article class="project-item">
                    <!-- Display custom project image if available -->
                    <?php if ($project_image) : ?>
                        <a href="<?php echo esc_url($project_button); ?>" target="_blank">
                            <img src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_image['alt']); ?>" />
                        </a>
                    <?php endif; ?>

                    <!-- Display project title -->
                    <h3>
                        <?php if ($project_button) : ?>
                            <a href="<?php echo esc_url($project_button); ?>" target="_blank">
                                <?php echo esc_html($project_title); ?>
                            </a>
                        <?php else : ?>
                            <?php echo esc_html($project_title); ?>
                        <?php endif; ?>
                    </h3>

                    <!-- Display project description -->
                    <p><?php echo esc_html($project_description); ?></p>

                    <!-- Display project button if available -->
                    <?php if ($project_button) : ?>
                        <a href="<?php echo esc_url($project_button); ?>" class="project-btn" target="_blank">View Project</a>
                    <?php endif; ?>
                </article>
            <?php
            endwhile;
            wp_reset_postdata(); // Reset post data to avoid conflicts
        else :
            ?>
            <p>No projects found. Check back soon!</p>
        <?php endif; ?>
    </section>



    <!-- Contact Section -->
    <hr class="custom-hr" />

    <section class="contact-section">
        <h3>Let’s Create Something Amazing!</h3>
        <p>Ready to bring your bold ideas to life? Whether it’s branding, illustrations, or digital magic, I’d love to hear from you. Drop me a message, and let’s make something playful, colourful, and unforgettable together!</p>
        <!-- Contact Form 7 Shortcode -->
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="96a2334" title="Setting Sun Creative"]'); ?>
        </div>
    </section>

    <hr class="custom-hr" />
    <?php get_template_part('template-parts/content', 'cta'); ?>


    <hr class="custom-hr" />

    <!-- Added wp_footer() before closing </body> tag -->
    <?php get_footer(); ?>
</body>

</html>