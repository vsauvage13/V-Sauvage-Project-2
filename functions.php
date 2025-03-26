<?php
// Theme setup function
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    function myfirsttheme_setup() {
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
    }
endif;
add_action('after_setup_theme', 'myfirsttheme_setup');

// Enqueue styles
function myfirsttheme_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'myfirsttheme_enqueue_styles' );
