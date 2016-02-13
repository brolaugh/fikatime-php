<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 10:44 PM
 */

namespace com\brolaugh\database\tables;


use com\brolaugh\database\DBSetup;

class Consumable extends Table
{
  public function getAllConsumable(){
    $stmt = $this->getDB()->prepare("SELECT * FROM consumable");
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new Consumable($row));
    }
    $stmt->close();
    return $a;
  }

  /**
   * @param $id
   * @return Consumable
   */
  public function getConsumableById($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM consumable WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $c = new Consumable($res->fetch_object());
    $stmt->close();
    return $c;
  }

  /**
   * @param $name
   * @return Consumable array
   */
  public function getAllConsumableByName($name){
    $stmt = $this->getDB()->prepare("SELECT * FROM consumable WHERE name LIKE ?");
    $stmt->bind_param('s', $name);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new Consumable($row));
    }
    $stmt->close();
    return $a;
  }

}