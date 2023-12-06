<?php
$currentPage = 'index';
include_once(__DIR__ . '/components/header.php');
?>

<main class="container bg-info">
  <h1>Página Inicial</h1>

 


  <!-- carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/comidas/12.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/comidas/13.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/comidas/14.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>

  <h4>Chef Em Casa - Inspire-se na Culinária em Comunidade</h4>

  <p>Bem-vindo ao Chef Em Casa, o seu destino online para explorar, criar e compartilhar experiências culinárias únicas. Descubra receitas deliciosas, compartilhe suas próprias criações e conecte-se com uma comunidade apaixonada por culinária. Seja você um chef experiente ou alguém apenas começando sua jornada na cozinha, aqui você encontrará inspiração para cada paladar.</p>

  <!-- cards -->

  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Últimas receitas:</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pratos prontos:</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>








  <div class="alert alert-secondary" role="alert">
    Monte aqui seu prato<a href="#" class="alert-link">
      <> CLIQUE AQUI <>
    </a>Sejam bem-vindos, Bom almoço!
  </div>
  <div class="alert alert-success" role="alert">
    Pratos prontos<a href="#" class="alert-link">
      <> CLIQUE AQUI <>
    </a>Sejam bem-vindos, Bom almoço!
  </div>
  <div class="alert alert-danger" role="alert">
    Cardápio da Casa<a href=" " class="alert-link">
      <> CLIQUE AQUI <>
    </a>Sejam bem-vindos, Bom almoço!
  </div>






</main>

<?php
include_once(__DIR__ . '/components/footer.php');
?>