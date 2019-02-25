<?php

function tryConnection ($login, $password) {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe_01_v2;charset=utf8', 'root', '');
    $sqlSelect = 
        "   SELECT * 
            FROM Users 
            WHERE login = '$login' 
            AND password = SHA1('$password')";
    
    $reponse = $bdd->query($sqlSelect);
    //remplace du while
    $donnees = $reponse->fetchAll();
    $reponse->closeCursor();
    if(!empty($donnees)) {
        return $donnees[0];
    }
    return $donnees;
}

function printEnonce() {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe_01_v2;charset=utf8', 'root', '');
    $sqlSelect =
        "   SELECT Enonce
            FROM Exercice";
    $reponse = $bdd->query($sqlSelect);
    while($donnees=$reponse->fetch()){
        $reponse2 = $bdd->query($sqlSelect);
        $data = $reponse2->fetch();
        echo $data['Enonce'];
    }
}

function laListeTP () {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe_01_v2;charset=utf8', 'root', '');
    $sqlSelect =
        "   SELECT nomTP 
            FROM tp";
    $reponse = $bdd->query($sqlSelect);
    while($donnees = $reponse->fetch()) {
        for ($i = 0 ; $i < count($donnees) /2 ; $i++) {
            echo '<span>' . $donnees[$i] . '</span>';
            echo '<span><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></span>';
            echo '<span><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"></span></button></span>'; 
            echo "<br />";
        }
    }
}
?>