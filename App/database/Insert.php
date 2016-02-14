<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 6:20 PM
 */

namespace App\database;


use App\database\pushtables\Consumable;
use App\database\pushtables\FikaTime;
use App\database\pushtables\Partaking;
use App\database\pushtables\Person;
use App\database\pushtables\Receipt;

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