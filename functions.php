<?php

function tryConnection ($login, $password) {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe01v3;charset=utf8', 'root', '');
    $sqlSelect = 
        "   SELECT * 
            FROM Utilisateur 
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

function getLesExercices() {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe01v3;charset=utf8', 'root', '');
    $sqlSelect = "SELECT * FROM Exercice";
    $reponse = $bdd->query($sqlSelect);
    $donnees = $reponse->fetchAll();
    $reponse->closeCursor();
    return $donnees;
}

function addExercice($exercice) {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe01v3;charset=utf8', 'root', '');
    $sqlSelect = "INSERT INTO exercice (script, date) VALUES ('$script', '$date');";
    $reponse = $bdd->query($sqlSelect);
    $donnees = $reponse->fetchAll();
    $reponse->closeCursor();
}

function getLesExercicesQuestions($idExercice) {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe01v3;charset=utf8', 'root', '');
    $sqlSelect = 
    "   SELECT * 
        FROM exercice 
        INNER JOIN question 
        ON question.idExercice = exercice.id
        ORDER BY exercice.id";

        
    $reponse = $bdd->query($sqlSelect);
    $donnees = $reponse->fetchAll();
    $reponse->closeCursor();
    return $donnees;
}
?>