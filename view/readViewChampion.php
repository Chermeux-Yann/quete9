
    <?php  ob_start(); ?>

    <div class="container-fluid row ">
   
    
<?php 
$list = getChampions();
foreach ($list as $read){
?>

<div class=" col-12 col-sm-6 col-md-4 col-xl-3 my-2">
    <div class="card ">
            <img src="<?php   echo $read['image'] ?>" class="card-img-top  "  style="width: 8rem; margin: auto;  height:8rem;"alt="...">
        <div class="card-body text-center d-flex flex-column">
            <h5 class="card-title">ville: <?php   echo htmlspecialchars( $read['ville']) ;?></h5>
            <p class="card-text">Champion: <?php   echo  htmlspecialchars( $read['champion']); ?></p>
            <p class="card-text">Type: <?php   echo  htmlspecialchars( $read['type']) ;?></p>
            <p class="card-text">Badge: <?php   echo  htmlspecialchars( $read['badge']) ;?></p>
            <a href="index.php?action=readChampion&read=<?php echo  htmlspecialchars( $read['id'])?>" class="btn btn-outline-dark mt-auto">Champion</a>
        </div>
    </div>
</div>

<?php
}


    $content = ob_get_clean();
    require 'view/template.php';

?>