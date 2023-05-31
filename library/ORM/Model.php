<?php


namespace library\ORM;


class Model {
    //property that will contain all properties dynamically
    private $data=array();

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