<?php
    
     session_start();

    if($_SESSION['user'] == null || $_SESSION['user'] == ""){
    
        include('logout.php');
        die();
    }
    else{
        include('./includes/header.php');
        include('./includes/banner.html');
        include('./includes/body.php');
        include('./includes/footer.php');
    }
?>
