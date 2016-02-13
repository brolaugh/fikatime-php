<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 6:20 PM
 */

namespace com\brolaugh\database;
use com\brolaugh\database\tables\Consumable;
use com\brolaugh\database\tables\FikaTime;
use com\brolaugh\database\tables\Partaking;
use com\brolaugh\database\tables\Person;
use com\brolaugh\database\tables\Receipt;

/**
 * Class Select
 * @package com\brolaugh\database
 */
class Select extends DBSetup
{
    public $partaking;
    public $consumable;
    public $fikatime;
    public $person;
    public $receipt;

    public function __construct()
    {
        parent::__construct();
        $this->partaking = new Partaking($this->getDb());
        $this->consumable = new Consumable($this->getDb());
        $this->fikatime = new FikaTime($this->getDb());
        $this->person = new Person($this->getDb());
        $this->receipt = new Receipt($this->getDb());
    }
}