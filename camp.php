<?php
/*
Template Name: Camps
*/
get_header();
?>
<div class="d-flex">
    <div class="coolcolor pt-3 pb-5 mt-3 mb-3 shadow-lg d-flex flex-row align-items-center justify-content-around flex-wrap">

        <?php

        $loop = new WP_Query(array('post_type' => 'travel_camp'));

        while ($loop->have_posts()) : $loop->the_post();



        ?>
            <div class="card shadow-lg align-self-center mb-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgKmnyRdA8tDsGtzE5CpDc__BCpMXJl3W-ew&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">

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