<?php
    include("./components/header.php");
    if(empty($_SESSION['user'])) {
        header('Location: index.php');exit;
    }
?>

<div class = "userHeader">
        <h2 class="userTitle">MySqlCorrector</h2>
            <div id="clock"></div>
                <div id ="userLogOut">  
                    <a href="./index.php?deconnexion=true" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-log-out"></span> Log out</a>
</div>

<div class ="userContainer">
    
    

        
    </div>

    <div class ="userContent">

        <div class ="userNav">
            
            <button class="tablink" onclick="openPage('userTp', this, '#0A4B8A')"id="defaultOpen">TP</button>
            <button class="tablink" onclick="openPage('userCorrection', this, '#3B9D31')">Correction</button>
            <button class="tablink" onclick="openPage('Contact', this, 'blue')">Another</button>
            <button class="tablink" onclick="openPage('About', this, 'orange')">AnotherOne</button>

            <div id="userTp" class="tabcontent">
                <h3>Titre TP</h3>
                    <?php
                    
                    printEnonce();
                    
                    ?>
                
            

            <div id="userCorrection" class="tabcontent">
                <h3>Correction</h3>
                <p>correction Blablablalbalba</p> 
            </div>

            <div id="Contact" class="tabcontent">
                <h3>Contact</h3>
                <p>no ideaaa</p>
            </div>

            <div id="About" class="tabcontent">
                <h3>About</h3>
                <p>still not</p>
            </div>

        </div>

        <div class ="userMain">
            <?php
                
            ?>
        </div>
        
        <div class ="userFooter">
        </div>
        
    </div>
</div>

<?php
    include("./components/footer.php");
?>

<script src="./scriptTime.js"></script>
<script src="./scriptNav.js"></script>
