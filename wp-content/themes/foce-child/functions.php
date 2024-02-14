<?php

// chargement scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
    // chargement css
    wp_enqueue_style( 'child-style-test', get_stylesheet_directory_uri() . '/assets/css/style.css' );
    // wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // chargement js
    wp_enqueue_script('jquery');
    
    wp_register_script('swiper-bundle.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', null, null, true );
    wp_enqueue_script('swiper-bundle.js');

    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', ["jquery", "swiper-bundle.js"]);
    // wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/custom.js', ["jquery", "swiper"]);

    //swiper effect js



}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

?>