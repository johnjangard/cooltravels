<?php
get_header();
?>


<div class="bg-image d-flex flex-column justify-content-center align-items-center" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.webp'); height: 100vh;">
  <h1 class="text-white">Cool bild</h1>
  <p class="text-white">Lite cool text</p>
  <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
</div>
<div class="d-flex justify-content-center">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Träningsläger</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Cuper</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Fotbollsresor</a>
  </li>
</ul>
</div>
<div class="d-flex justify-content-center">
    <form class="d-flex" style="width: 20rem;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
<div class="d-flex flex-row justify-content-around">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<?php
get_footer();
?>