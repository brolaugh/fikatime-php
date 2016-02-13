<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 6:47 PM
 */

namespace com\brolaugh\entities;


class FikaTime
{
    private $id;
    private $time;
    private $responsable;

    public function __construct($fikaTimeRow)
    {
        $this->id = $fikaTimeRow->id;
        $this->time = $fikaTimeRow->time;
        $this->responsable = $fikaTimeRow->responsable;
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


}