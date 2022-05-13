

<div class="d-flex flex-column footer-color justify-content-evenly">

    <div class="d-flex flex-column align-items-center">
        <div>
            <h2>Cooltravels</h2>
        </div>
        <div>
            <p>Välkommen att navigera runt bland våra resekategorier och hitta resan som passar er!</p>
        </div>
    </div>
        <nav class="footer navbar-expand-lg sticky-top navbar-light d-flex justify-content-center mb-3">
            <?php
                wp_nav_menu(
                    array(
                    'menu' => 'footer',
                    'container' => '',
                    'theme_location' => 'footer'
                    )
          );
      ?>
        </nav>





</div>




<?php wp_footer(); ?>

</div>
</div>
</body>
</html>