<?php

    require_once    __DIR__ . '/MysqliDb.php';

    class   DbConnect   {

        public  $connection, $db;

        function    __construct(){

            //$this->db  =   new mysqli("localhost","root","","inventory");
            $this->db = new mysqli("localhost","root","admin","inventory");

            $this->connection   =   new MysqliDb($this->db);

        }

    }

?>