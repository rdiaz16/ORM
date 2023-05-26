<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/5/2023
 * Time: 11:37 PM
 */

class Sale {
private $id;
private $customer;
private $date;

    function __construct($id, $customer, $date)
    {
        $this->id = $id;
        $this->customer = $customer;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

}

