<?php
// Theme setup function
if (! function_exists('myfirsttheme_setup')) :
    function myfirsttheme_setup()
    {
        // Register menus
        register_nav_menus(
            array(
                'header' => __('Display this menu in the header', 'project2'),
                'footer' => __('Display this menu in the footer', 'project2'),
            )
        );

        // Enable support for the title tag
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
    }
endif;
add_action('after_setup_theme', 'myfirsttheme_setup');

// Enqueue styles
function myfirsttheme_enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myfirsttheme_enqueue_styles');

// Register the Project custom post type
function register_project_cpt()
{
    $args = array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No projects found',
            'not_found_in_trash' => 'No projects found in Trash',
            'parent_item_colon' => '',
            'all_items' => 'All Projects',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,  // Enable the block editor (optional)
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('category'),  // Optional: Add categories or tags
        'rewrite' => array('slug' => 'projects'),
    );
    register_post_type('project', $args);
}
add_action('init', 'register_project_cpt');
