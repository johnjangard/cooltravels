<?php

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

///POST TYPES
// wcm_travel
// travel_matches
// travel_cup
// travel_camp
// travel_soccer
// netr_team

add_action('init', 'create_sport_taxonomy');

function create_sport_taxonomy()
{
    register_taxonomy(
        'wcm_travel',
        'post',
        array(
            'label' => 'WCM Resor',
            'description' => 'En cool beskrivning',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_matches',
        'post',
        array(
            'label' => 'Matcher',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_cup',
        'post',
        array(
            'label' => 'Kupper',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_camp',
        'post',
        array(
            'label' => 'Läger',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'travel_soccer',
        'post',
        array(
            'label' => 'Fotboll',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'netr_team',
        'post',
        array(
            'label' => 'Lag',
            'hierarchical' => true,
        )
    );
}

///CUSTOM TAXONOMIES
// Travel_age - wcm_travel, travel_camp, travel_cup, page
// Travel_country - wcm_travel, travel_camp, travel_cup, travel_soccer, page
// Travel_sport_league - wcm_travel, travel_soccer,travel_matches, page
// Travel_sport_type - wcm_travel, travel_camp, travel_cup, travel_soccer, page
// Travel_type - wcm_travel, travel_camp, travel_cup, travel_matches, page