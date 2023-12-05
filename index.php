<?php
$currentPage = 'index';
include_once(__DIR__ . '/components/header.php');
?>

<main class="container bg-info">
  <h1>Pagina Inicial</h1>

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

  <!-- login -->
  <form class="form-inline my-2 my-lg-0">
    <a class="btn btn-outline-success my-2 my-sm-0 p-1" href="register.php">
      Cadastre-se
      <a class="btn btn-outline-success my-2 my-sm-0 p-1 ml-4" href="login.php">
        Logar
      </a>
  </form>





</main>

<?php
include_once(__DIR__ . '/components/footer.php');
?>