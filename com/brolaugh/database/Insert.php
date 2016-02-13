<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 6:20 PM
 */

namespace com\brolaugh\database;


class Insert extends DBSetup
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