<?php ob_start(); ?>
<?php
$list = readChamp();

    ?>
<div class=" card container "  >
    <div class="row no-gutters">
    <div class="col-md-4">
        <img class="ml-2 my-5 " src="<?php   echo $list['image']; ?> "  style="width: 15rem;  height:15rem;" alt="pokemon">
    </div>
    <div class="col-md-8">
        <div class="card-body ">
        
        <p class=" card-text"><strong>Ville:  </strong> <?php echo  htmlspecialchars( $list['ville']) ;?></p>
        <p class="card-text"><strong>Champion:  </strong> <?php  echo  htmlspecialchars( $list['champion']) ;?></p>
        <p class="card-text"><strong>Type: </strong> <?php  echo  htmlspecialchars( $list['type']) ;?></p>
        <p class="card-text"> <strong>Badge: </strong> <?php echo  htmlspecialchars( $list['badge']); ?>  </p>
        <p class="card-text"><strong>Id:  </strong> <?php  echo  htmlspecialchars( $list['id']) ;?></p>
        </div>
    
    
        <a href="index.php?action=updateChampion&update=<?php echo $list['id']?>"><button type="button" name="modifchampion" class="btn btn-dark ml-5"> Modifier</button></a> 



<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal">
    supprimer
</button>


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
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
        <input type="hidden" name="id" value="<?= $_GET['read'] ?>">
        <button type="submit" class="btn btn-danger" name="supprimerchamp">Supprimer</button>
        </div>
        </form>
        </div>
        </div>
</div>
        </div>
        </div>

</div>


<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>