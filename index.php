<?php  session_start()   ?>
<?php   include 'db.php' ;?>
<!DOCTYPE html>
<html lang="fr">
<?php  include 'includes/head.php' ?>
<body>
<header>
    <?php  include 'includes/header.php' ?>
</header>


<?php  
// formulaire pour ajouter un pokemon 
 if(isset($_GET['formpokemon'])){
    include 'formpokemon.php';
 }
 
 if(isset($_POST['sub'])){
  $sql = "INSERT INTO pokemon (`numero`,`first_name`,`type1`,`type2`,`image`,`newimg`) VALUES (:numero,:first_name,:type1,:type2,:image,:newimg)";
$prepare = $db->prepare($sql);
$prepare->execute(
  [
      'numero' => $_POST['num'],
      'first_name' => $_POST['nom'],
      'type1' => $_POST['type1'],
      'type2' => $_POST['type2'],
      'image' => 'imgpoke/' . $_FILES['imagepokemon']['name'],
      'newimg' => 'newpoke/' . $_FILES['imagepokemonnew']['name']


  ]
  );
  $fileName = 'imgpoke/' . basename($_FILES['imagepokemon']['name']);
  move_uploaded_file($_FILES['imagepokemon']['tmp_name'], $fileName);
  $fileName = 'newpoke/' . basename($_FILES['imagepokemonnew']['name']);
  move_uploaded_file($_FILES['imagepokemonnew']['tmp_name'], $fileName);


} 
  // card pokemon 
if(isset($_GET['fichepokeid'])){
 
  $id= strip_tags($_GET['fichepokeid']);
  $sql= "SELECT * FROM pokemon where id=$id";
  $prepare = $db->prepare($sql);
  $prepare->execute();
  $pokemon= $prepare -> fetch();
 
  include 'cardpokemon.php';



  // supprimer un pokemon 
}if(isset($_POST['supprimerpoke'])){
  $sql= "DELETE FROM pokemon WHERE id=:id";
  $prepare = $db->prepare($sql);
  $champion = $prepare->execute(
    [
      'id' => $_GET['fichepokeid']
  ]
  );
}
?>
<section class="container">
  <!-- afficher un pokemon sur la page pokemon avec la responsive -->
 <div class="champ row ">
<?php
 if(isset($_GET['poke'])){
  $sql= 'SELECT * FROM pokemon';
  $prepare = $db->prepare($sql);
  $prepare->execute();
  $list= $prepare -> fetchall();
  foreach($list as $value){
      ?>
       
      <div class=" col-12 col-sm-6 col-md-4  col-xl-3 my-2 ">
      
<div class="card ">
<!-- la carte pokemon  -->
<img src="<?php   echo $value['image'] ?>" class="card-img-top  "  style="width: 6rem; margin: auto; height:6rem;"alt="pokémon">
<div class="card-body text-center d-flex flex-column ">
  <h5 class="card-title">Numéro: <?php echo htmlspecialchars( $value['numero']) ;?></h5>
  <p class="card-text">Nom: <?php echo htmlspecialchars( $value['first_name']); ?></p>
  <p class="card-text">Type: <?php echo htmlspecialchars( $value['type1'] . ' ' . $value['type2'])  ;?></p>

  <a href="index.php?fichepokeid=<?php echo htmlspecialchars( $value['id']);?>"class="btn btn-outline-dark mt-auto" > Fiche pokémon</a>
</div>
</div>
</div>
<?php
  }
}
?>
<!-- modifier le pokemon dans la fiche pokemon -->

<?php if(isset($_GET['modifier'])){
  include'modifierpokemon.php';
  
}if(isset($_POST['submitpoke'])){
    $sql= "UPDATE pokemon SET `numero`=:numero, `first_name`= :first_name, `type1`= :type1 , `type2`= :type2 , `image`= :image , `newimg`= :newimg WHERE id= :id";
    $prepare = $db->prepare($sql);
    $prepare->execute(
        [
            'numero' => $_POST['nummodif'],
            'first_name' => $_POST['nommodif'],
            'type1' => $_POST['type1modif'],
            'type2' => $_POST['type2modif'],
            'image' => 'imgpoke/' . $_FILES['imagepokemon']['name'],
            'newimg' => 'newpoke/' . $_FILES['imagepokemonnew']['name'],
            'id' => $_POST['id']
        ]
    );
    $fileName = 'imgpoke/' . basename($_FILES['imagepokemon']['name']);
    move_uploaded_file($_FILES['imagepokemon']['tmp_name'], $fileName);
    $fileName = 'newpoke/' . basename($_FILES['imagepokemonnew']['name']);
    move_uploaded_file($_FILES['imagepokemonnew']['tmp_name'], $fileName);

}
?>
</div>
</div>
</section>




<section class="container">
<div class="champ row justify-content-center">
<?php

// formulaire pour ajouter un champion 
if(isset($_GET['formchampion'])){
    include 'formchampion.php';

 }
 if(isset($_POST['subchampion'])){
  $sql = "INSERT INTO champion (`ville`,`champion`,`type`,`badge`,`image`) VALUES (:ville, :champion, :type, :badge,:image1)";
$prepare = $db->prepare($sql);
$test = $prepare->execute(
  [
      'ville' => $_POST['numc'],
      'champion' => $_POST['nomc'],
      'type' => $_POST['typec'],
      'badge' => $_POST['badgechamp'],
      'image1' => 'img/' . $_FILES['img']['name']
      
  ]
  );
      $fileName = 'img/' . basename($_FILES['img']['name']);
      move_uploaded_file($_FILES['img']['tmp_name'], $fileName);
 

} 
// afficher un champion dans la page champion 
 if(isset($_GET['champ'])){
    $sql= 'SELECT * FROM champion ';
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $list= $prepare -> fetchall();
    foreach($list as $value){
        ?>
         
        <div class=" col-12 col-sm-6 col-md-4 col-xl-3 my-2">
<div class="card ">
  <img src="<?php   echo $value['image'] ?>" class="card-img-top  "  style="width: 8rem; margin: auto;  height:8rem;"alt="...">
  <div class="card-body text-center d-flex flex-column">
    <h5 class="card-title">ville: <?php   echo htmlspecialchars( $value['ville']) ;?></h5>
    <p class="card-text">Champion: <?php   echo  htmlspecialchars( $value['champion']); ?></p>
    <p class="card-text">Type: <?php   echo  htmlspecialchars( $value['type']) ;?></p>
    <p class="card-text">Badge: <?php   echo  htmlspecialchars( $value['badge']) ;?></p>
    <a href="index.php?fichechampion=<?php echo  htmlspecialchars( $value['id'])?>" class="btn btn-outline-dark mt-auto">Champion</a>
  </div>
</div>
</div>
<?php
    }
 
 }



  // modifier le champion dans la page du champion 
if(isset($_GET['modifierchamp'])){
  include 'modifierchampion.php';

}if(isset($_POST['submitchamp'])){
  $sql= "UPDATE champion SET `ville`=:ville, `champion`= :champion, `type`= :type , `badge`= :badge , `image`= :image WHERE id= :id";
  $prepare = $db->prepare($sql);
  $prepare->execute(
      [
          'ville' => $_POST['villemodif'],
          'champion' => $_POST['champmodif'],
          'type' => $_POST['typemodifchamp'],
          'badge' => $_POST['badgemodif'],
          'image' => 'img/' . $_FILES['imgchamp']['name'],
          'id' => $_POST['id']
         
          
      ]
  );
  $fileName = 'img/' . basename($_FILES['imgchamp']['name']);
  move_uploaded_file($_FILES['imgchamp']['tmp_name'], $fileName);

}




?>

</div>
</section>
<?php


// afficher la carte pokemon sur le bouton fiche pokemon
if(isset($_GET['fichechampion'])){
  $id= strip_tags($_GET['fichechampion']);
  $sql= "SELECT * FROM champion where id=$id";
  $prepare = $db->prepare($sql);
  $prepare->execute();
  $champion= $prepare -> fetch();
 
  include 'cardchamp.php';

  // supprimer le champion 
}if(isset($_POST['supprimerchamp'])){
  $sql= "DELETE FROM champion WHERE id=:id";
  $prepare = $db->prepare($sql);
  $champion = $prepare->execute(
    [
      'id' => $_GET['fichechampion']
  ]
  );
}

?>






<?php  include 'includes/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>