<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 11:05 PM
 */

namespace App\database;


class Table
{
  private $db;
  public function __construct($mysqli){
    $this->db = $mysqli;
  }

  /**
   * @return mysqli
   */
  protected final function getDB(){
    return $this->db;
  }
}