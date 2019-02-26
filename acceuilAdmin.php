<?php
    include("./components/header.php");
    if(empty($_SESSION['user'])) {
        header('Location: index.php');exit;
    }  

    include("./components/headAdmin.php");
?>




<?php include("./components/footer.php"); ?>
<script src="./scriptTime.js"></script>


