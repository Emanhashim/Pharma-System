<?php

    session_start();
//    unset($_SESSION['role']);
//    unset($_SESSION['accountId']);
//    unset($_SESSION['username']);
    
    
    session_destroy();
    header("Location: home.php");
//    exit;
?>

