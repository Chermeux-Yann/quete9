<?php ob_start(); ?>

<form action="index.php"  method="POST"  class="form col-9"  enctype="multipart/form-data">
   
    <div class="form-group  ">
        <label for="numéro">Ville</label>
        <input type="text" class="form-control" name="numc" required>
    </div>
    <div class="form-group">
        <label for="firstnamme">Champion</label>
        <input type="text" class="form-control" name="nomc" required>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="typec" required>
    </div>
    <div class="form-group">
        <label for="type">Badge</label>
        <input type="text" class="form-control" name="badgechamp"  required>
    </div>
        <input type="file" name="img"  >

    <p>image du champion</p><input type="submit" name="subchampion" class="btn btn-dark">envoyer
</div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>

