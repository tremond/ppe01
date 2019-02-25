<?php
session_start();
require_once("./functions.php");

if(!empty($_GET['deconnexion'])) {
    unset($_SESSION);
    session_destroy();
    header('Location: connexion.php');exit;
}

if(!empty($_SESSION['user'])) {
    if($_SESSION['user']['isAdmin'] == "1") {
        header('Location: acceuilAdmin.php');
    }
    elseif ($_SESSION['user']['isAdmin'] == "0") {
        header('Location: acceuilUser.php');exit;
    } 
    }
    else {
        header('Location: connexion.php');exit;
    }

?>