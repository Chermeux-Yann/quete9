<?php  ob_start(); ?>

<div class="container-fluid row ">


<?php 
$list = getPokemon();
foreach ($list as $read){
?>
<div class=" col-12 col-sm-6 col-md-4  col-xl-3 my-2 ">
      
    <div class="card ">
        <img src="<?php   echo $read['image'] ?>" class="card-img-top  "  style="width: 6rem; margin: auto; height:6rem;"alt="pokémon">
        <div class="card-body text-center d-flex flex-column ">
            <h5 class="card-title">Numéro: <?php echo htmlspecialchars( $read['numero']) ;?></h5>
            <p class="card-text">Nom: <?php echo htmlspecialchars( $read['first_name']); ?></p>
            <p class="card-text">Type: <?php echo htmlspecialchars( $read['type1'] . ' ' . $read['type2'])  ;?></p>
            <a href="index.php?action=readPokemon&read=<?php echo htmlspecialchars( $read['id']);?>"class="btn btn-outline-dark mt-auto" > Fiche pokémon</a>
        </div>
    </div>
</div>

<?php
}


$content = ob_get_clean();
require 'view/template.php';

?>