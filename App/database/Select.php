<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 6:20 PM
 */

namespace App\database;
use App\database\fetchtables\Consumable;
use App\database\fetchtables\FikaTime;
use App\database\fetchtables\Partaking;
use App\database\fetchtables\Person;
use App\database\fetchtables\Receipt;

/**
 * Class Select
 * @package com\database\database
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