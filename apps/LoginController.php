<?php

    if(isset($_POST['submit'])  &&  isset($_POST['username'])   &&  isset($_POST['password'])){

        $username   =   $_POST['username'];
        $password   =   $_POST['password'];

        require_once    __DIR__ . '/class.login.php';

        $login  =   new Login;

        $result =   $login->checkLogin($username, $password);

        switch($result){

            case    1:
                $login->setSessionUser($username);
            break;

            case    2:
            break;

            case    3:
            break;

        }

    }

?>