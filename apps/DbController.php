<?php

    require_once __DIR__.'/database.php';

    class DbController extends DbConnect{

        //manages add,update,delete of data
        function dataManagement($data){

            $method = array_pop($data);
            $table  = array_pop($data);
            $uid    = array_pop($data);

            switch($method){

                case "add":
                    $this->connection->insert($table, $data);
                break;

                case "edit":
                    $this->connection->where("uid", $uid);
                    $this->connection->update($table, $data);
                break;

                case "delete":
                    $this->connection->where("uid", $uid);
                    $this->connection->delete($table);
                break;

                default:
                    throw new Exception("No Such Method!");
                break;

            }
            

        }

        //search for data
        function dataSearch($data){

            $row       = array_pop($data);
            $table     = array_pop($data);
            $condition = array_pop($data);

            switch($row){

                case "multiple":
                    $this->connection->where($condition);
                    return $this->connection->get($table);
                break;

                case "one":
                    $this->connection->where($condition);
                    return $this->connection->getOne($table);
                break;

                case "all":
                    return $this->connection->get($table);
                break;

                default:
                    throw new Exception("No Such Method!");
                break;

            }

        }

        //executes query that require functions max,count, or sum.
        function dataFunctions($data){

            $function  = array_pop($data);
            $table     = array_pop($data);
            $field     = array_pop($data);

            if(count($data) == 1){
                $condition = array_pop($data);
                $this->connection->where($condition);
            }
            
            switch($function){

                case "max":
                    $todo = "max(".$field.")";
                    return $this->connection->getValue($table, $todo);                    
                break;

                case "count":
                    $todo = "count(".$field.")";
                    return $this->connection->getValue($table, $todo);
                break;

                case "sum":
                    $todo = "sum(".$field.")";
                    return $this->connection->getValue($table, $todo);
                break;

                default:
                    throw new Exception("No Such Method!");
                break;
                
            }

        }

    }

?>