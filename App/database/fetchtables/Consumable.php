<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 10:44 PM
 */

namespace App\database\fetchtables;

use App\database\Table;

class Consumable extends Table
{
  public function getAllConsumable(){
    $stmt = $this->getDB()->prepare("SELECT * FROM consumable");
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \com\brolaugh\entities\Consumable($row));
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
    $c = new \com\brolaugh\entities\Consumable($res->fetch_object());
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
      array_push($a, new \com\brolaugh\entities\Consumable($row));
    }
    $stmt->close();
    return $a;
  }

}