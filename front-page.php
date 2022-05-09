<?php
wp_head();
echo "Display this text";
// the_terms($post->ID, 'movies', 'Movies: ', ', ', ' ');
// echo "pls";
// echo esc_html($post->ID);
// var_dump($post);
$posts = get_posts([
    'post_type' => 'movies',
    'post_status' => 'publish',
    'numberposts' => -1
    // 'order'    => 'ASC'
]);
var_dump($posts);
