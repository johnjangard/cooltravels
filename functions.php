<?php

function cooltheme_theme_support()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cooltheme_theme_support');

function cooltheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cooltheme-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('cooltheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
}

add_action('wp_enqueue_scripts', 'cooltheme_register_styles');

function cooltheme_register_scripts()
{
    wp_enqueue_style('cooltheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
}

add_action('wp_enqueue_scripts', 'cooltheme_register_scripts');
/////////////Custom post and taxonomies //////////////

function cooltheme_menus()
{

    $locations = array(
        'primary' => "Desktop Primary Menu",
        'footer' => "Footer Menu",
        'footer_2' => "Second Footer Menu"
    );
    register_nav_menus(($locations));
}

add_action('init', 'cooltheme_menus');
///POST TYPES
// wcm_travel
// travel_matches
// travel_cup
// travel_camp
// travel_soccer
// netr_team
add_action('init', function () {
    $label = 'WCM Travels';
    $type = 'wcm_travel';
    register_post_type($type, ['public' => true, 'label'  => $label, 'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']]);
});
add_action('init', function () {
    $label = 'Matcher';
    $type = 'travel_matches';
    register_post_type($type, ['public' => true, 'label'  => $label, 'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']]);
});
add_action('init', function () {
    $label = 'Kupper';
    $type = 'travel_cup';
    register_post_type($type, ['public' => true, 'label'  => $label, 'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']]);
});
add_action('init', function () {
    $label = 'Läger';
    $type = 'travel_camp';
    register_post_type($type, ['public' => true, 'label'  => $label, 'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']]);
});
add_action('init', function () {
    $label = 'Fotboll';
    $type = 'travel_soccer';
    register_post_type($type, ['public' => true, 'label'  => $label, 'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']]);
});
add_action('init', function () {
    $label = 'Lag';
    $type = 'netr_team';
    register_post_type($type, ['public' => true, 'label'  => $label, 'supports' => ['title', 'editor', 'thumbnail', 'custom-fields']]);
});



///CUSTOM TAXONOMIES
// Travel_age - wcm_travel, travel_camp, travel_cup, page
// Travel_country - wcm_travel, travel_camp, travel_cup, travel_soccer, page
// Travel_sport_league - wcm_travel, travel_soccer,travel_matches, page
// Travel_sport_type - wcm_travel, travel_camp, travel_cup, travel_soccer, page
// Travel_type - wcm_travel, travel_camp, travel_cup, travel_matches, page
add_action('init', 'create_sport_tax');

function create_sport_tax()
{
    register_taxonomy(
        'travel_age',
        array('wcm_travel', 'travel_camp', 'travel_cup', 'page'),
        array(
            'label' => 'Tid',
            'description' => 'En cool beskrivning',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_country',
        array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'),
        array(
            'label' => 'Land',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_sport_league',
        array('wcm_travel', 'travel_soccer', 'travel_matches', 'page'),
        array(
            'label' => 'Liga',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_sport_type',
        array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'),
        array(
            'label' => 'Sporttyp',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_type',
        array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_matches', 'page'),
        array(
            'label' => 'Resetyp',
            'hierarchical' => true,
        )
    );
}
// add_action( 'init', 'wpshout_add_taxonomies_to_courses' );
// function wpshout_add_taxonomies_to_courses() {
// 	register_taxonomy_for_object_type( 'category', 'course' );
// 	register_taxonomy_for_object_type( 'difficulty', 'course' );
// 	register_taxonomy_for_object_type( 'post_tag', 'course' );
// }
