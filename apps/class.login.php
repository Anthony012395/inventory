<?php

    require_once    __DIR__ . '/database.php';

    class   Login   extends DbConnect   {

        function    checkUsername($username){

            $this->connection->where('username',$username);
            $result =   $this->connection->getOne('users','count(*) as rows');

            return  $result['rows'];

        }

        function    getPassword($username){

            $this->connection->where('username',$username);
            $result =   $this->connection->getOne('users');

            return  $result['password'];

        }

        function    getUserId($username){

            $this->connection->where('username',$username);
            $result =   $this->connection->getOne('users');

            return  $result['id'];

        }

        function    checkLogin($username, $password){

            if($this->checkUsername($username) > 0){

                $hash   =   $this->getPassword($username);

                if(password_verify($password, $hash)){

                    return  1;

                }else{

                    return  2;

                }

            }else{

                return  3;

            }

        }

        function    setSessionUser($username){

            $user_id    =   $this->getUserId($username);

            session_start();

            $_SESSION['username']   =   $username;
            $_SESSION['user_id']    =   $user_id;

        }

    }

?>