<?php 
    if(isset($_GET['modifierchamp'])){
        $sql= 'SELECT * FROM `champion` where id= :id';
        $prepare = $db->prepare($sql);
        $prepare->execute(
            [
                'id' => $_GET['modifierchamp']
            ]
            );
        $list= $prepare->fetchAll();
        foreach($list as $value){

  
?>

<form action="index.php"  method="POST" enctype="multipart/form-data" class="form col-6" >


<div class="form-group  ">
    <input type="hidden" name="id" value="<?php   echo $_GET['modifierchamp']; ?>">
<label for="numéro">Ville</label>
  <input type="text" class="form-control" id="villemodif"  name="villemodif"  required>
</div>
<div class="form-group">
  <label for="firstnamme">Champion</label>
  <input type="text" class="form-control" name="champmodif"  required>
</div>
<div class="form-group">
  <label for="type">Type</label>
  <input type="text" class="form-control" name="typemodifchamp"  required>
</div>
<div class="form-group">
  <label for="type">Badge</label>
  <input type="text" class="form-control" name="badgemodif" required  >
</div>
<input type="file" id="imgchamp"  name="imgchamp" required >

<p>image du champion</p><input type="submit" name="submitchamp" class="btn btn-dark">envoyer
</form>
<?php
};
    }
    ?>