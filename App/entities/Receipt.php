<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 6:36 PM
 */

namespace App\entities;


class Receipt
{
    /**
     * Receipt constructor.
     * @param $receiptRow
     */
    private $id;
    private $consumable;
    private $fikatime;
    private $person;
    private $price;


    public function __construct($receiptRow)
    {
        $this->id = $receiptRow->id;
        $this->consumable = $receiptRow->consumable;
        $this->fikatime = $receiptRow->fikatime_id;
        $this->person = $receiptRow->person;
        $this->price = $receiptRow->price;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getFikatime()
    {
        return $this->fikatime;
    }

    /**
     * @param mixed $fikatime
     */
    public function setFikatime($fikatime)
    {
        $this->fikatime = $fikatime;
    }

    /**
     * @return mixed
     */
    public function getConsumable()
    {
        return $this->consumable;
    }

    /**
     * @param mixed $consumable
     */
    public function setConsumable($consumable)
    {
        $this->consumable = $consumable;
    }




}