<?php

function cooltheme_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cooltheme-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('cooltheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
}

add_action('wp_enqueue_scripts', 'cooltheme_register_styles');

function cooltheme_register_scripts(){
    wp_enqueue_style('cooltheme-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',array(),'5.1.3',true);
}

add_action( 'wp_enqueue_scripts', 'cooltheme_register_scripts');



?>