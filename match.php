<?php
/*
Template Name: Matches
*/
get_header();
?>
<div class="d-flex">
    <div class="coolcolor pt-3 pb-5 mt-3 mb-3 shadow-lg d-flex flex-row align-items-center justify-content-around flex-wrap">

        <?php

        $loop = new WP_Query(array('post_type' => 'travel_matches'));
        while ($loop->have_posts()) : $loop->the_post();

        ?>
            <div class="card shadow-lg align-self-center mb-5" style="width: 27%;">
                <img src="/wp-content/themes/cooltheme/assets/images/Scaredchicken.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <?php
                    the_title('<h5 class="card-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>
                    <a href="<?php echo get_permalink(); ?>" class=" btn btn-primary">Klicka här</a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
            </div>
        <?php

        endwhile;

        ?>

    </div>
</div>


<?php
get_footer();
?>