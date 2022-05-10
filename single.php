<?php

/**
 * The template for displaying all single posts and attachments
 *

 */

get_header(); ?>



<?php
    // Start the loop.
     while (have_posts()) : the_post();

    /*
    * Include the post format-specific template for the content. If you want to
    * use this in a child theme, then include a file called called content-___.php
    * (where ___ is the post format) and that will be used instead.
    */
?>
<div class="bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.webp'); height: 50vh;">
    <h1 class="text-white"> <?php the_title() ?> </h1>
</div>
<div>
    <div>
        <p> <?php the_content() ?> </p>
    </div>
    <div>

    </div>
</div>
<?php







            get_template_part('content', get_post_format());

                                            // If comments are open or we have at least one comment, load up the comment template.
                                            if (comments_open() || get_comments_number()) :
                                                comments_template();
                                            endif;

                                        // Previous/next post navigation.


                                        // End the loop.
                                        endwhile;
                                            ?>


<?php get_footer(); ?>