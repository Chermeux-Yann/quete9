<?php ob_start(); ?>

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
        <input type="hidden" name="id" value="<?= $_GET['delete'] ?>">
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