<?php 
include("header.php");
?>
<div id="backgroundConnexion"> <br>
    <div class = "formConnexion">
        <form method="post" action="connexion.php">
            <h2 class=h2>Page de Connexion</h2>
                <p> <input type="text" name="identifiant" placeholder="Identifiant" required/> </p>   
                <p> <input type="password" name="password" placeholder="Mot de passe" required/> </p> 
                <p class = boutonSeConnecter> <input type="submit" value="Se connecter"/> </p>
        </form>
    </div>
</div>

<?php

if(!empty($_POST['identifiant']) && !empty($_POST['password'])) {
    $user = tryConnection($_POST['identifiant'], $_POST['password']);
    if(empty($user)) {
        session_destroy();
        echo "<p id=failConnection>Vous n'êtes pas enregistre dans la bdd</p>";
    }
    else {
        $_SESSION['user'] = $user;
    }

    if(!empty($_SESSION['user'])) {
        header('Location: index.php');
    }
}
include("footer.php");
?>