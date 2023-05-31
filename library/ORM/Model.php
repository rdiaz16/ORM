<?php


namespace library\ORM;


class Model extends RdORM {
    //property that will contain all properties dynamically
    private $data=array();
    protected static $table;

    function __construct($data = null)
    {
        $this->data = $data;
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->data[$name];
    }

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name]=$value;
    }




}