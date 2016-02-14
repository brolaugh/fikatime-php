<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 9:49 PM
 */

namespace App\entities;


class Partaking
{
    private $id;
    private $person;
    private $fikatime;
    /**
     * Partaking constructor.
     * @param $parTakingRow
     */
    public function __construct($parTakingRow)
    {
        $this->id = $parTakingRow->id;
        $this->person = $parTakingRow->person_id;
        $this->fikatime = $parTakingRow->fika_time_id;

    }

    /**
     * @return int
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
     * @return int
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param int $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return int
     */
    public function getFikatime()
    {
        return $this->fikatime;
    }

    /**
     * @param int $fikatime
     */
    public function setFikatime($fikatime)
    {
        $this->fikatime = $fikatime;
    }


}