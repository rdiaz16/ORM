<?php
include "../config/config.php";
class Connection {
    public static function connect(){
        try {
            $cn = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASSWORD);
            return $cn;
        }catch (PDOException $ex){
            //echo $ex->getMessage();
        }
        //echo "successfully connected";
    }
}
//Connection::connect();