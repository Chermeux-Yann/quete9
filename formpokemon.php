
<form action="index.php"  method="POST" enctype="multipart/form-data" class="form col-6" >

  <div class="form-group  ">
  <label for="numéro">numéro</label>
    <input type="number" class="form-control" id="num" aria-describedby="emailHelp" name="num" placeholder="Nom" required>
  </div>
  <div class="form-group">
    <label for="firstnamme">Nom</label>
    <input type="text" class="form-control" name="nom" placeholder="prénom" required>
  </div>
  <div class="form-group">
    <label for="type">Type1</label>
    <input type="text" class="form-control" name="type1" placeholder="Type du pokémon" required>
  </div>
  <div class="form-group">
    <label for="type">Type2</label>
    <input type="text" class="form-control" name="type2" placeholder="Type du pokémon" >
  </div>
  <p>première image</p><input type="file" id="image" name="imagepokemon"  required>
  <p>deuxieme image</p><input type="file" id="image2" name="imagepokemonnew"  required>

    <input type="submit" name="sub" class="btn btn-dark">envoyer
</form>