<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cool Travels</title>
  <?php wp_head(); ?>

</head>

<body>

  <div class="">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light d-flex justify-content-center mb-3">


      <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary'
        )
      );
      ?>
    </nav>
  </div>