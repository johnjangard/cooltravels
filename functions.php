<?php

function cooltheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cooltheme-style', get_template_directory_uri() . "/style.css", array('cooltheme-bootstrap'), $version, 'all');
    wp_enqueue_style('cooltheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
}

add_action('wp_enqueue', 'cooltheme_register_styles');

///////
add_action('init', 'create_sports_taxonomy');

function create_sports_taxonomy()
{
    register_taxonomy(
        'Cupper',
        'post',
        array(
            'label' => 'Cupper',
            'description' => 'En cool beskrivning',
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'Matcher',
        'post',
        array(
            'label' => 'Matcher',
            'hierarchical' => true,
        )
    );
}

/*
* Creating a function to create our CPT
*/

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Movies', 'Post Type General Name', 'cooltheme'),
        'singular_name'       => _x('Movie', 'Post Type Singular Name', 'cooltheme'),
        'menu_name'           => __('Movies', 'cooltheme'),
        'parent_item_colon'   => __('Parent Movie', 'cooltheme'),
        'all_items'           => __('All Movies', 'cooltheme'),
        'view_item'           => __('View Movie', 'cooltheme'),
        'add_new_item'        => __('Add New Movie', 'cooltheme'),
        'add_new'             => __('Add New', 'cooltheme'),
        'edit_item'           => __('Edit Movie', 'cooltheme'),
        'update_item'         => __('Update Movie', 'cooltheme'),
        'search_items'        => __('Search Movie', 'cooltheme'),
        'not_found'           => __('Not Found', 'cooltheme'),
        'not_found_in_trash'  => __('Not found in Trash', 'cooltheme'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('movies', 'cooltheme'),
        'description'         => __('Movie news and reviews', 'cooltheme'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('Cupper'),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('movies', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */

add_action('init', 'custom_post_type', 0);
