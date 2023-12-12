<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

/* Fonction pour charger le fichier CSS */

function enqueue_custom_fonts() {
    wp_enqueue_style('custom-fonts', get_stylesheet_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

/* Fonction pour décharger les styles d'écriture du thème parent dans le thème enfant */

function dequeue_parent_theme_google_fonts() {
    wp_dequeue_style( 'ashe-playfair-font');
    wp_dequeue_style( 'ashe-opensans-font');
    wp_dequeue_style( 'ashe-kalam-font');

    // wp_dequeue_style('parent-theme-google-fonts-playfair_display-open_sans-kalam');
    // wp_deregister_style('parent-theme-google-fonts-playfair_display-open_sans-kalam');
}
add_action('wp_enqueue_scripts', 'dequeue_parent_theme_google_fonts', 100);







 