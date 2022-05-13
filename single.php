<?php

get_header(); ?>



<?php

while (have_posts()) : the_post();


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