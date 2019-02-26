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
            <div id="questionZone" class="col s12">



                <div id="question1" class="col s12 blue lighten-5" style="margin-bottom:2%">
                    <!-- <div class="col s12 right-align">
                        <button class="btn waves-effect waves-light blue lighten-2" onclick="removeQuestionZone('1')">
                            <i class="material-icons right">close</i>
                        </button>
                    </div> -->
                    <div class="input-field col s12">
                        <textarea id="enonce1" class="materialize-textarea" name="enonce1"></textarea>
                        <label for="enonce1">Énoncé 1</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="corrige1" class="materialize-textarea" name="corrige1"></textarea>
                        <label for="corrige1">Corrigé 1</label>
                    </div>
                </div>


            </div>

            <button class="btn waves-effect waves-light blue lighten-2" onclick="addQuestionZone()">Ajouter question
                <i class="material-icons right">add</i>
            </button>
            
            <div class="input-field col s12">
                <textarea id="script" class="materialize-textarea" name="script" required></textarea>
                <label for="script">Script de création de la BDD :</label>
            </div>
        </div>

        <button style="background-color:#64b5f6" class="btn waves-effect waves-light" type="submit">Enregistrer
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>

<?php
    include("./components/footer.php");

    if(!empty($_POST['script'])) {
        var_dump($_POST);
    }
?>

<script src="./scriptTime.js"></script>
<script type="text/javascript" src="./script.js"></script>