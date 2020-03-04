<?php

    session_start();

    if(!isset($_SESSION['username'])    &&  !isset($_SESSION['user_id'])){

        header('Location: /inventory/loginform.php');
        exit;

    }else{

        header('Location: /inventory/dashboard.php');
        exit;

    }
 
?>