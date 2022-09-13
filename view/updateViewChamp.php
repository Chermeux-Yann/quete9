<?php ob_start(); ?>
<?php


    ?>
    <form action="index.php"  method="POST" enctype="multipart/form-data" class="form col-6" >


<div class="form-group  ">
    <input type="hidden" name="id" value="">
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
<input type="hidden" name="id" value="<?= $_GET['update']; ?>">

<p>image du champion</p><button type="updatechamp" name="updatechamp" class="btn btn-dark">envoyer</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>