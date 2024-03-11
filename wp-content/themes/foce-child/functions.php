<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}


// Connection au fichier JS
function my_custom_scripts()
{
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/effet_Fade_In.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('parallax', get_stylesheet_directory_uri() . '/js/parallax.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('swipper', get_stylesheet_directory_uri() . '/js/swipper.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('rotation', get_stylesheet_directory_uri() . '/js/rotationfleur.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('animation_titre', get_stylesheet_directory_uri() . '/js/animation_titre.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('burger', get_stylesheet_directory_uri() . '/js/burger.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');


// coverflow
//function enqueue_swiper_assets()
{
    // Enregistrez et chargez le fichier CSS de SwiperJS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    // Enregistrez et chargez le fichier JavaScript de SwiperJS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
}
