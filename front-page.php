<?php
get_header();
?>


<div class="bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://wallpaperforu.com/wp-content/uploads/2021/04/Wallpaper-Soccer-Stadium-Football-Manchester-United-Old15-scaled.jpg'); height: 100vh;">
    <h1 class="text-white">Välkommen till Cool Travels</h1>
    <p class="text-white">Hitta din nästa sportresa här</p>
    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">CTA</button>
</div>

<div class="coolcolor pt-3 pb-3 mt-3 mb-3">
    <ul class="nav d-flex justify-content-around">
        <li class="nav-item">
            <a class="nav-link btn btn-primary p-2" href="http://cool_travels.test/matches/">Matcher</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-primary p-2" href="http://cool_travels.test/cuper/">Cuper</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-primary p-2" href="http://cool_travels.test/lager/">Läger</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-primary p-2" href="http://cool_travels.test/fotboll/">Fotbollsresor</a>
        </li>
    </ul>
</div>

<div class="d-flex justify-content-center coolcolor pt-3 pb-3 mt-3 mb-3">
    <form class="d-flex" style="width: 20rem;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
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

<div class="d-flex flex-column align-items-center coolcolor pt-3 pb-3 mt-3 mb-3">
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
            <button class="btn btn-primary" type="submit">Sök</button>
        </div>
    </form>
</div>

<div class="coolcolor pt-3 pb-5 mt-3 mb-3 shadow-lg">
    <h2 class="d-flex justify-content-center mb-3">Resekategorier</h2>
    <div class="d-flex flex-row justify-content-evenly">
        <div class="card shadow-lg" style="width: 27%;">
            <h2 class="d-flex justify-content-center mb-3 mt-3">Träningsläger</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgKmnyRdA8tDsGtzE5CpDc__BCpMXJl3W-ew&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Träningsläger</h5>
                <p class="card-text">Peppad att boka ett roligt med laget? </p>
                <a href="http://cool_travels.test/lager/" class="btn btn-primary">Läs mer</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 27%;">
            <h2 class="d-flex justify-content-center mb-3 mt-3">Cuper</h2>
            <img src="https://www.yourtrainingcamp.com/uploads/sport/1200px/sidestar-sport-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cuper</h5>
                <p class="card-text">Sugen på att se lite matcher?</p>
                <a href="http://cool_travels.test/cuper/" class="btn btn-primary">Läs mer</a>
            </div>
        </div>
        <div class="card shadow-lg" style="width: 27%;">
            <h2 class="d-flex justify-content-center mb-3 mt-3">Fotbollssresor</h2>
            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fotbollsresor</h5>
                <p class="card-text">Lämna allt och åk iväg och njut! Fotboll är livet.</p>
                <a href="http://cool_travels.test/fotboll/" class="btn btn-primary">Läs mer</a>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
