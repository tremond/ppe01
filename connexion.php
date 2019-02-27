<?php 
include("./components/header.php");
?>
<div id="backgroundConnexion"> <br>
    <div class = "formConnexion">
        <form method="post" action="connexion.php">
            <h2 class=h2>Page de Connexion</h2>
            
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="identifiant" type="text" class="validate">
                    <label for="icon_prefix">Identifiant</label>
                </div>  
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon_prefix1" name="password" type="password" class="validate">
                    <label for="icon_prefix1">Mot de passe</label>
                </div>
            </div>

            <button style="background-color:cornflowerblue" class="btn waves-effect waves-light" type="submit" name="action">Se connecter
                <i class="material-icons right">send</i>
            </button>
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
include("./components/footer.php");
?>