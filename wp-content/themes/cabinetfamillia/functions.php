<?php
/**
 * cabinetfamillia Theme Functions
 * Child theme of Twenty Twenty-Four
 */

function cabinetfamillia_enqueue_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'cabinetfamillia-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap',
        array(),
        null
    );

    // Enqueue parent theme stylesheet
    wp_enqueue_style( 'twentytwentyfour-style', get_template_directory_uri() . '/style.css' );

    // Enqueue child theme stylesheet
    wp_enqueue_style( 'cabinetfamillia-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'twentytwentyfour-style', 'cabinetfamillia-google-fonts' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'cabinetfamillia_enqueue_styles' );

/**
 * Add theme support for various WordPress features
 */
function cabinetfamillia_theme_setup() {
    // Add support for custom patterns
    add_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'cabinetfamillia_theme_setup' );
