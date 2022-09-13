<?php  ob_start(); ?>

<div class="container-fluid row ">

<form action="index.php"  method="POST" enctype="multipart/form-data" class="form col-6" >


<div class="form-group  ">
    <input type="hidden" name="id" value="">
<label for="numéro">numéro</label>
  <input type="number" class="form-control" id="num" aria-describedby="emailHelp" name="nummodif" placeholder="Nom" required>
</div>
<div class="form-group">
  <label for="firstnamme">Nom</label>
  <input type="text" class="form-control" name="nommodif" placeholder="prénom" required>
</div>
<div class="form-group">
  <label for="type">Type1</label>
  <input type="text" class="form-control" name="type1modif" placeholder="Type du pokémon" required>
</div>
<div class="form-group">
  <label for="type">Type2</label>
  <input type="text" class="form-control" name="type2modif" placeholder="Type du pokémon"  >
</div>
<p>première image</p><input type="file" id="image" name="imagepokemon" required >
<p>deuxieme image</p><input type="file" id="image2" name="imagepokemonnew" required  >
<input type="hidden" name="id" value="<?= $_GET['update']; ?>">

  <input type="submit" name="updatepoke" class="btn btn-dark" value="Envoyer">


<?php
$content = ob_get_clean();
require 'view/template.php';
?>