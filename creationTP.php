<?php
    include("./components/header.php");
    if(empty($_SESSION['user'])) {
        header('Location: index.php');exit;
    }  
    include("./components/headAdmin.php");
?>
<br>
<br>
<h3 class="h3">Création d'un nouvel exercice</h3>
<div class="row">
    <form method="post" action="?" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <textarea id="enonceX" class="materialize-textarea"></textarea>
                <label for="enonceX">Énoncé X</label>
            </div>
            <div class="input-field col s12">
                <textarea id="corrigeX" class="materialize-textarea"></textarea>
                <label for="corrigeX">Corrigé X</label>
            </div>
            <div class="input-field col s12">
                <textarea id="script" class="materialize-textarea" name="script" required></textarea>
                <label for="script">Script de création de la BDD :</label>
            </div>
        </div>

        <button style="background-color:#64b5f6" class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>

<?php
    include("./components/footer.php");

    if(!empty($_POST['identifiant'])) {
        
    }
?>

<script src="./scriptTime.js"></script>