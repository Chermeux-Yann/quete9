
<?php
require 'controllers/controller.php';

if (isset($_GET['action'])){
  if ($_GET['action'] == 'listChampion'){
      listChampion();
  }
  if ($_GET['action'] == 'listPokemon'){
    listPokemon();
  }
  if ($_GET['action'] == 'addChampion'){
      addChampion();
  }
  if ($_GET['action'] == 'addPokemon'){
      addPokemon();
  }
  if ($_GET['action'] == 'readChampion'){

      readChampion2();
    
  }
  if ($_GET['action'] == 'readPokemon'){
      readPokemon2();
  }
  if ($_GET['action'] == 'updateChampion'){
    updateChampion2();
  }
  if ($_GET['action'] == 'updatePokemon'){
    updatePokemon2();
  }
}
else{
  home();
}


if (isset($_POST['subchampion'])){
            
  if ( $_FILES['img'] && $_FILES['img']['error'] == 0 && $_FILES['img']['size'] <= 1000000){
      $file = pathinfo($_FILES['img']['name']);
      $extension = $file['extension'];
      $extensionAccept = ['jpg','jpeg','png'];

      if (in_array($extension,$extensionAccept)){
          createChampion();
          echo 'Champion créé';
      }
      else{
          echo 'jpg,jpeg,png Uniquement';
      }
  }

  else{
      echo 'Image trop lourde et/ou non envoyée </br> Et/ou insére un nom de champion';
  }

}

elseif (isset($_POST['subpokemon'])){

  if ($_FILES['imagepokemon'] && $_FILES['imagepokemon']['error'] == 0 && $_FILES['imagepokemon']['size'] <= 1000000){
    $file = pathinfo($_FILES['imagepokemon']['name']);
    $extension = $file['extension'];
    $extensionAccept = ['jpg','jpeg','png'];
    if ( $_FILES['imagepokemonnew'] && $_FILES['imagepokemonnew']['error'] == 0 && $_FILES['imagepokemonnew']['size'] <= 1000000)
      $file = pathinfo($_FILES['imagepokemonnew']['name']);
      $extension = $file['extension'];
      $extensionAccept = ['jpg','jpeg','png'];

    if (in_array($extension,$extensionAccept)){
        createPokemon();
        echo 'Pokemon créé';
    }
    else{
        echo 'jpg,jpeg,png Uniquement';
    }
}

else{
  echo 'Image trop lourde et/ou non envoyée </br> Et/ou insére un nom de Pokemon';
}

}

elseif (isset($_POST['updatechamp'])){
            
  if ($_FILES['imgchamp'] && $_FILES['imgchamp']['error'] == 0 && $_FILES['imgchamp']['size'] <= 1000000){
      $file = pathinfo($_FILES['imgchamp']['name']);
      $extension = $file['extension'];
      $extensionAccept = ['jpg','jpeg','png'];

      if (in_array($extension,$extensionAccept)){
          updateChampion();
          echo 'Champion modifié';
      }
      else{
          echo 'jpg,jpeg,png Uniquement';
      }
  }

  else{
      echo 'Image trop lourde et/ou non envoyée </br> Et/ou modifie un nom de champion';
  }
}

elseif (isset($_POST['updatepoke'])){
            
  if ($_FILES['imagepokemon'] && $_FILES['imagepokemon']['error'] == 0 && $_FILES['imagepokemon']['size'] <= 1000000){
      $file = pathinfo($_FILES['imagepokemon']['name']);
      $extension = $file['extension'];
      $extensionAccept = ['jpg','jpeg','png'];
      if ($_FILES['imagepokemonnew'] && $_FILES['imagepokemonnew']['error'] == 0 && $_FILES['imagepokemonnew']['size'] <= 1000000){
        $file = pathinfo($_FILES['imagepokemonnew']['name']);
        $extension = $file['extension'];
        $extensionAccept = ['jpg','jpeg','png'];
  

      if (in_array($extension,$extensionAccept)){
          updatePokemon();
          echo 'Pokemon modifié';
      }
      else{
          echo 'jpg,jpeg,png Uniquement';
      }
  }

  else{
      echo 'Image trop lourde et/ou non envoyée </br> Et/ou modifie un nom de champion';
  }
}
}

if(isset($_POST['supprimerchamp'])){
  $db = dbConnect();
  $sql =' DELETE FROM `champion` WHERE `id` = :id';
  $prepare = $db->prepare($sql);
  $prepare ->execute([
      'id' => $_POST['id']
  ]);
}

if(isset($_POST['supprimerpoke'])){
  $db = dbConnect();
  $sql =' DELETE FROM `pokemon` WHERE `id` = :id';
  $prepare = $db->prepare($sql);
  $prepare ->execute([
      'id' => $_POST['id']
  ]);
}

?>