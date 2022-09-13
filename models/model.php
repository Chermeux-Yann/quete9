<?php

function dbConnect(){
    try{
        $db = new PDO(
            'mysql:host=localhost;dbname=pokemonjohto;charset=UTF8',
            'root',
            ''
        );
        return $db;
    }
    catch(Exception $e){
        die ("Error: " . $e->getMessage());   
    }
}

// <!-- afficher un pokemon sur la page pokemon avec la responsive -->
function getPokemon(){

    $db = dbConnect();
    $sql= 'SELECT * FROM pokemon';
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $list= $prepare -> fetchall();
    return $list;
}
// afficher un champion dans la page champion 
function getChampions(){

    $db = dbConnect();
    $sql= 'SELECT * FROM champion';
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $list= $prepare -> fetchall();
    return $list;
}


function createPokemon(){

    $db = dbConnect();
    $sql = "INSERT INTO pokemon (`numero`,`first_name`,`type1`,`type2`,`image`,`newimg`) VALUES (:numero,:first_name,:type1,:type2,:image,:newimg)";
    $prepare = $db->prepare($sql);
    $prepare->execute(
        [
        'numero' => $_POST['num'],
        'first_name' => $_POST['nom'],
        'type1' => $_POST['type1'],
        'type2' => $_POST['type2'],
        'image' => 'public/imgpoke/' . $_FILES['imagepokemon']['name'],
        'newimg' => 'public/newpoke/' . $_FILES['imagepokemonnew']['name']
        ]
    );
        $fileName = 'public/imgpoke/' . basename($_FILES['imagepokemon']['name']);
        move_uploaded_file($_FILES['imagepokemon']['tmp_name'], $fileName);
        $fileName = 'public/newpoke/' . basename($_FILES['imagepokemonnew']['name']);
        move_uploaded_file($_FILES['imagepokemonnew']['tmp_name'], $fileName);
}


function createChampion(){

    $db = dbConnect();
    $sql = "INSERT INTO champion (`ville`,`champion`,`type`,`badge`,`image`) VALUES (:ville, :champion, :type, :badge,:image1)";
    $prepare = $db->prepare($sql);
    $test = $prepare->execute(
    [
        'ville' => $_POST['numc'],
        'champion' => $_POST['nomc'],
        'type' => $_POST['typec'],
        'badge' => $_POST['badgechamp'],
        'image1' => 'public/imgchamp/' . $_FILES['img']['name']
    ]
    );
        $fileName = 'public/imgchamp/' . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $fileName);

}

function readChamp() {

    $db = dbconnect();
    $sql= 'SELECT * FROM champion where id=:id';
    $prepare = $db->prepare($sql);
    $prepare->execute(
        [
        'id' => $_GET['read']
        ] 
    );
    $champion= $prepare -> fetch();
    return $champion ;
}

function readPoke() {

    $db = dbconnect();
    $sql= 'SELECT * FROM pokemon where id=:id';
    $prepare = $db->prepare($sql);
    $prepare->execute(
        [
        'id' => $_GET['read']
        ] 
    );
    $pokemon= $prepare -> fetch();
    return $pokemon ;
}



function updatePokemon(){

    $db = dbConnect();
    $fileName = 'public/imgpoke/' . basename($_FILES['imagepokemon']['name']);
    move_uploaded_file($_FILES['imagepokemon']['tmp_name'], $fileName);
    $fileName = 'public/newpoke/' . basename($_FILES['imagepokemonnew']['name']);
    move_uploaded_file($_FILES['imagepokemonnew']['tmp_name'], $fileName);
    $sql= "UPDATE pokemon SET `numero`=:numero, `first_name`= :first_name, `type1`= :type1 , `type2`= :type2 , `image`= :image , `newimg`= :newimg WHERE id= :id";
    $prepare = $db->prepare($sql);
    $prepare->execute(
        [
            'numero' => $_POST['nummodif'],
            'first_name' => $_POST['nommodif'],
            'type1' => $_POST['type1modif'],
            'type2' => $_POST['type2modif'],
            'image' => 'public/imgpoke/' . $_FILES['imagepokemon']['name'],
            'newimg' => 'public/newpoke/' . $_FILES['imagepokemonnew']['name'],
            'id' => $_POST['id']
        ]
    );
}

function updateChampion(){

    $db = dbConnect();
    $fileName = 'public/imgchamp/' . basename($_FILES['imgchamp']['name']);
    move_uploaded_file($_FILES['imgchamp']['tmp_name'], $fileName);
    $sql= ('UPDATE champion SET `ville`=:ville, `champion`= :champion, `type`= :type , `badge`= :badge , `image`= :image WHERE id= :id');
    $prepare = $db->prepare($sql);
    $prepare->execute(
        [
            'ville' => $_POST['villemodif'],
            'champion' => $_POST['champmodif'],
            'type' => $_POST['typemodifchamp'],
            'badge' => $_POST['badgemodif'],
            'image' => 'public/imgchamp/' . $_FILES['imgchamp']['name'],
            'id' => $_POST['id']
        ]
    );
}


