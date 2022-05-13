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
            // $previewText =  the_content();
            $previewTravel = get_the_content();
            $previewTravel = strip_tags($previewTravel);


        ?>
            <div class="card shadow-lg align-self-center mb-5" style="width: 27%;">
                <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NHx8fGVufDB8fHx8&w=1000&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <?php
                    the_title('<h5 class="card-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h5>'); ?>

                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php echo get_permalink(); ?>" class=" btn btn-primary">Klicka här</a>

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