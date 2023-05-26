<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/5/2023
 * Time: 11:35 PM
 */

class Saledetail {
private $id;
private $product_id;
private $sale_id;
private $amount;
private $discount;

    function __construct($id, $product_id, $sale_id, $amount, $discount)
    {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->sale_id = $sale_id;
        $this->amount = $amount;
        $this->discount = $discount;
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
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getSaleId()
    {
        return $this->sale_id;
    }

    /**
     * @param mixed $sale_id
     */
    public function setSaleId($sale_id)
    {
        $this->sale_id = $sale_id;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

}