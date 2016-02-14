<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 6:20 PM
 */

namespace com\brolaugh\database;


use com\brolaugh\database\pushtables\Consumable;
use com\brolaugh\database\pushtables\FikaTime;
use com\brolaugh\database\pushtables\Partaking;
use com\brolaugh\database\pushtables\Person;
use com\brolaugh\database\pushtables\Receipt;

class Insert extends DBSetup
{
  public $partaking;
  public $consumable;
  public $fikatime;
  public $person;
  public $receipt;

  /**
   * Insert constructor.
   */
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