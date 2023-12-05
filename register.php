<?php
  $currentPage = 'index';
  include_once(__DIR__ . '/components/header.php');
?>

<main class="container pt-5">
    <div class="jumbotron">
        <h1 class="display-4">
            Crie sua conta
        </h1>
        <p class="lead">
            Junte-se a mais nova comunidade de culinária do mundo!
        </p>
    </div>
    <form action="register_post.php" method="post">
      <div class="form-group">
        <label for="name">Digite seu nome completo</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="form-text text-muted">
        <small id="emailHelp" class="form-text text-muted">
          Nós nunca iremos compartilhar seu e-mail com mais ninguém.
        </small>
      </div>
      <div class="form-group">
        
</main>

<?php
  include_once(__DIR__ . '/components/footer.php');
?>