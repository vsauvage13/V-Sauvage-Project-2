<?php
/**
 * Template for displaying a single Project post.
 */

get_header(); // Include the header.php file
?>

<main id="content" class="project-content">
    <div class="project-post">
        <?php
        // Start the loop to display the project post content
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
        ?>
                <article class="project-article">
                    <header class="project-header">
                        <h1 class="project-title"><?php the_title(); ?></h1>
                        
                        <?php
                        // Display custom fields (date and subject)
                        $date = get_field('date'); // Custom field 'date'
                        $subject = get_field('subject'); // Custom field 'subject'
                        ?>

                        <p class="project-meta">
                            <?php if ($date): ?>
                                <span>Project Date: <?php echo esc_html($date); ?></span><br>
                            <?php endif; ?>
                            <?php if ($subject): ?>
                                <span>Subject: <?php echo esc_html($subject); ?></span>
                            <?php endif; ?>
                        </p>
                    </header>

                    <section class="project-content">
                        <?php the_content(); // Display the content of the project post ?>
                    </section>

                    <footer class="project-footer">
                        <p class="project-categories">
                            Categories: <?php the_category( ', ' ); ?>
                        </p>
                    </footer>
                </article>
        <?php
            endwhile;
        else :
            echo '<p>No project posts found.</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer(); // Include the footer.php file
?>
