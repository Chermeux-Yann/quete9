<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="site pokemon avec les pokemon de la deuxieme generation et leur champions plus deux image et formulaire pour ajouter des pokemmon">
    <title>quete9</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/styles/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  
<ul class="navbar-nav ml-3">
      <li class="nav-item active">
        <a class="nav-link btn dark btn border text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  ml-3">
        <a class="nav-link btn btn-light"  href="index.php?action=listChampion">Champion</a>
      </li>
      <li class="nav-item  ml-3">
        <a class="nav-link btn btn-light" href="index.php?action=listPokemon">Pokémon </a>
      </li>
      <li class="nav-item  ml-3">
        <a class="nav-link btn btn-warning" href="index.php?action=addChampion">Ajoute un Champion  </a>
      </li>
      <li class="nav-item  ml-3">
        <a class="nav-link btn btn-warning" href="index.php?action=addPokemon">Ajoute un Pokémon</a>
      </li>
    </ul>
  </div>
</nav>


<div class="jumbotron ">
  <div class="container">
    <img src="public/imgchamp/starter.png" >
  
  </div>
</div>
</header>

<?php echo $content ?>
<footer class="container-fluid mt-5 ">
<div class="justify-content-center text-center  py-4">
  <div class=" col-12 footer-copyright ">© 2022 chermeux yann</div>
  
</footer>
<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>