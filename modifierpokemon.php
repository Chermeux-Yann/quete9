<?php 
    if(isset($_GET['modifier'])){
        $sql= 'SELECT * FROM `pokemon` where id= :id';
        $prepare = $db->prepare($sql);
        $prepare->execute(
            [
                'id' => $_GET['modifier']
            ]
            );
        $list= $prepare->fetchAll();
        foreach($list as $value){

  
?>

<form action="index.php"  method="POST" enctype="multipart/form-data" class="form col-6" >


<div class="form-group  ">
    <input type="hidden" name="id" value="<?php   echo $_GET['modifier']; ?>">
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
<input type="file" id="image" name="imagepokemon" required >
<input type="file" id="image2" name="imagepokemonnew" required >

  <input type="submit" name="submitpoke" class="btn btn-dark">envoyer
</form>
<?php
};
    }
    ?>