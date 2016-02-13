<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 11:05 PM
 */

namespace com\brolaugh\database\tables;


class Table
{
  private $db;
  public function __construct($mysqli){
    $this->db = $mysqli;
  }

  /**
   * @return mysqli
   */
  protected final function getDb(){
    return $this->db;
  }
}