<?php

function cooltheme_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cooltheme-style', get_template_directory_uri() . "/style.css", array('cooltheme-bootstrap'), $version, 'all');
    wp_enqueue_style('cooltheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
}

add_action('wp_enqueue', 'cooltheme_register_styles');



?>