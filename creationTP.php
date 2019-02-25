<?php
    include("header.php");
    if(empty($_SESSION['user'])) {
        header('Location: index.php');exit;
    }  
?>

<div id="creationTPHeader">

    <div id="creationTPTitle">
        <h3 id="creationTpTitle">MySqlCorrector</h3>
        <div id="clock"></div>
    </div>  
    
    <div id="creationTPHeaderContent">
        <a href="./index.php?deconnexion=true" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-log-out" id="logOutCreationTP"></span>Log out</a>
    </div> 
</div>

<div id="utilitary_buttons">
    <input type="button" value="Clonage !" id="button_clone">
    <form method="post"><input type="button" value="Envoyer" id="button_envoieTP"></form>
</div>

<div id="creationTPMain">
</div>


<?php

/*
if(isset($_POST['zoneCreationTP'])) {
    if($_POST['zoneCreationTP']!="") {
        echo $_POST['zoneCreationTP'];
        echo $_POST['numeroEnonce'];
    }
    else {
        echo "<p style=color:red>Aucune valeure !!!</p>";
    }
}
    */    
?>


<?php
    include("footer.php");
?>

<script src="./scriptTime.js"></script>