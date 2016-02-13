<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 6:44 PM
 */

namespace com\brolaugh\entities;


class Consumable
{
    private $id;
    private $name;
    private $pieces;

    public function __construct($consumableRow)
    {
        $this->id = $consumableRow->id;
        $this->name = $consumableRow->name;
        $this->pieces = $consumableRow->pieces;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * @param mixed $pieces
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
    }


}