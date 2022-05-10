<?php
/*
Template Name: Soccer
*/
get_header();

$loop = new WP_Query(array('post_type' => 'travel_soccer', 'posts_per_page' => 10));

while ($loop->have_posts()) : $loop->the_post();

    the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>');

endwhile;
get_footer();