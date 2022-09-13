<?php
// $db = new PDO(
//         'mysql:host=localhost;dbname=pokemonjohto;charset=UTF8',
//         'root',
//         ''
//     );

$sqlSelect = "SELECT image, id FROM champion";
$prepare = $db->prepare($sqlSelect);
$prepare->execute();
$list = $prepare->fetchALL();

foreach ($list as $value){
    $nomImage = $value['image'];
    $sqlUpdate = "UPDATE champion SET image = :image WHERE id = :id ";
    $modifypokemon = $db->prepare($sqlUpdate);
    $modifypokemon->execute([
        "image" => ('public/' . $nomImage),
        "id" => $value['id']
    ]);

}
?>