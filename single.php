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
    <div class="bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://static.vecteezy.com/system/resources/previews/001/420/980/non_2x/light-blue-gradient-blur-background-vector.jpg'); height: 50vh;">
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








endwhile;



get_footer(); ?>