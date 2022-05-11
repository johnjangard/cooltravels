<?php
/*
Template Name: Camps
*/
get_header();

$loop = new WP_Query(array('post_type' => 'travel_camp'));

while ($loop->have_posts()) : $loop->the_post();

?>
    <div class="card shadow-lg" style="width: 27%;">
        <img src="/wp-content/themes/cooltheme/assets/images/Scaredchicken.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <!-- <h5 class="card-title">Card title</h5> -->
            <?php
            the_title('<h5 class="card-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>
            <a href="<?php echo get_permalink($post->ID); ?>" class=" btn btn-primary">Klicka här</a>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        </div>
    </div>
<?php

endwhile;

get_footer();
?>