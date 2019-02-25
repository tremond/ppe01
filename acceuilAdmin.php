<?php
    include("header.php");
    if(empty($_SESSION['user'])) {
        header('Location: index.php');exit;
    }  
?>

<div class ="admincontainer">
    
    <div class = "adminHeader">
        
        <h2 class ="adminTitle">MySqlCorrector</h2>
        
        <div id="clock"></div>

        <div class="adminLogOut">    
            <a href="./index.php?deconnexion=true" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-log-out"></span> Log out</a>
        </div>
    </div>

    <div class ="admincontent">
        <div class ="adminnav">
            <button class="tablink" onclick="openPage('userTp', this, '#0A4B8A')"id="defaultOpen">TP</button>
            <button class="tablink" onclick="openPage('userCorrection', this, '#3B9D31')">Correction</button>
            
            <div id="userTp" class="tabcontent">
                <button style="color:black"onclick="onClickTp()">Créer un nouvel énoncé</button><br>
                <span style="text-decoration: underline">TP en ligne :</span><br>
                <div><?php echo laListeTP(); ?></div>
            </div>

            <div id="userCorrection" class="tabcontent">
                <h3>Correction</h3>
                <button style="color:black"onclick="onCorrection()">La Correction</button> 
            </div>
        </div>
    </div>
</div>

<?php
    include("footer.php");
    
?>

<script src="./scriptNav.js"></script>
<script src="./scriptTime.js"></script>


