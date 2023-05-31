<?php

namespace library\ORM;


class RdORM extends \Connection{
    protected static  $cnx;
    protected static $table;

    function __construct()
    {
        self::getConnection();//execute each time the class is invoked by means of an object
    }
    public  static function getConnection(){
        self::$cnx= \Connection::connect();
    }


}