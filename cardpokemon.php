

<div class="fichep card container "  >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img class="ml-5 my-5 " src="<?php   echo $pokemon['newimg']; ?> "  style="width: 15rem;  height:15rem;" alt="pokemon">
    </div>
    <div class="col-md-8">
      <div class="card-body ">
        
        <p class="card-text"><strong>Nom:  </strong> <?php  echo $pokemon['numero'] ;?></p>
        <p class="card-text"><strong>Numéro:  </strong> <?php  echo $pokemon['first_name'] ;?></p>
        <p class="card-text"><strong>Type: </strong> <?php  echo $pokemon['type1'] ;?></p>
        <p class="card-text"> <strong>Type:</strong> <?php echo $pokemon['type2']; ?>  </p>
        <p class="card-text"><strong>Id:  </strong> <?php  echo $pokemon['id'] ;?></p>
      </div>
     <a href="index.php?modifier=<?php echo $pokemon['id']?>"><button type="button" name="modifpokemon" class="btn btn-dark  ml-5"> Modifier</button></a> 
     <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  supprimer
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Es tu sur de vouloir supprimer?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form action="" method="POST">
      <div class="modal-footer ">
        <button type="button" class="btn btn-outline-secondary " data-dismiss="modal">Fermer</button>
        <input type="hidden" name="id" value="<?= $_GET['fichepokeid'] ?>">
        <button type="submit" class="btn btn-danger" name="supprimerpoke">Supprimer</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
  </div>
 
</div>

  </div>
 
</div>

