<?php
get_header();
?>


<div class="bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://wallpaperforu.com/wp-content/uploads/2021/04/Wallpaper-Soccer-Stadium-Football-Manchester-United-Old15-scaled.jpg'); height: 100vh;">
    <h1 class="text-white">Välkommen till Cool Travels</h1>
    <p class="text-white">Hitta din nästa sportresa här</p>
    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">CTA</button>
</div>

<div class="bg-success pt-3 pb-3 mt-3 mb-3">
    <ul class="nav d-flex justify-content-around">
        <li class="nav-item">
            <a class="nav-link btn btn-warning p-2" href="http://cool_travels.test/travel_camp/uppsala-4/">Uppsala</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-warning p-2" href="#">Cuper</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-warning p-2" href="#">Fotbollsresor</a>
        </li>
    </ul>
</div>

<div class="d-flex justify-content-center bg-success pt-3 pb-3 mt-3 mb-3">
    <form class="d-flex" style="width: 20rem;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
    </form>
</div>

<div class="coolcolor pt-3 pb-5 mt-3 mb-3 shadow-lg">
    <h2 class="d-flex justify-content-center mb-3">Träningsläger</h2>
    <div class="d-flex flex-row justify-content-evenly">
        <?php

        $loop = new WP_Query(array('post_type' => 'travel_camp', 'posts_per_page' => 3));
        while ($loop->have_posts()) : $loop->the_post();
        ?>
            <div class="card shadow-lg" style="width: 27%;">
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

<div class="coolcolor pt-3 pb-5 mt-3 mb-3 shadow-lg">
    <h2 class="d-flex justify-content-center mb-3">Cuper</h2>
    <div class="d-flex flex-row justify-content-evenly">
        <?php

        $loop = new WP_Query(array('post_type' => 'travel_cup', 'posts_per_page' => 3));
        while ($loop->have_posts()) : $loop->the_post();
        ?>
            <div class="card shadow-lg" style="width: 27%;">
                <img src="https://www.yourtrainingcamp.com/uploads/sport/1200px/sidestar-sport-1.jpg" class="card-img-top" alt="...">
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

<div class="coolcolor pt-3 pb-5 mt-3 mb-3 shadow-lg">
    <h2 class="d-flex justify-content-center mb-3">Fotbollsresor</h2>
    <div class="d-flex flex-row justify-content-evenly">
        <?php

        $loop = new WP_Query(array('post_type' => 'travel_soccer', 'posts_per_page' => 3));
        while ($loop->have_posts()) : $loop->the_post();
        ?>
            <div class="card shadow-lg" style="width: 27%;">
                <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NHx8fGVufDB8fHx8&w=1000&q=80" class="card-img-top" alt="...">
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

</div>
<div class="bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.webp'); height: 100vh;">
    <h1 class="text-white">Placeholder för resekampanj</h1>
    <p class="text-white">Hutta in dig själv i fotbollens magiska värld genom vårt erbjudande!</p>
    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Läs mer här</button>
</div>

<div class="d-flex flex-column align-items-center bg-success pt-3 pb-3 mt-3 mb-3">
    <h2>Nyhetsbrev?</h2>
    <form class="d-flex flex-column" style="width: 20rem;">
        <div class="d-flex flex-row">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Träningsläger</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Cuper</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Fotbollsresor</label>
            </div>
        </div>
        <div class="d-flex flex-row">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Search</button>
        </div>
    </form>
</div>

<div class="bg-success pt-3 pb-5 mt-3 mb-3 shadow-lg">
    <h2 class="d-flex justify-content-center mb-3">Resekategorier</h2>
    <div class="d-flex flex-row justify-content-evenly">
        <div class="card shadow-lg" style="width: 27%;">
            <h2 class="d-flex justify-content-center mb-3 mt-3">Träningsläger</h2>
            <img src="/wp-content/themes/cooltheme/assets/images/Scaredchicken.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Träningsläger</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Läs mer</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 27%;">
            <h2 class="d-flex justify-content-center mb-3 mt-3">Cuper</h2>
            <img src="/wp-content/themes/cooltheme/assets/images/Scaredchicken.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cuper</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Läs mer</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 27%;">
            <h2 class="d-flex justify-content-center mb-3 mt-3">Fotbollssresor</h2>
            <img src="/wp-content/themes/cooltheme/assets/images/Scaredchicken.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fotbollsresor</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Läs mer</a>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
