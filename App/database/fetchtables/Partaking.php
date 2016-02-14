<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 10:43 PM
 */

namespace App\database\fetchtables;

use App\database\Table;

class Partaking extends Table
{
  /**
   * @param $id
   * @return Partaking
   */
  public function getPartakingById($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM partaking WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $p = $res->fetch_object();
    $stmt->close();
    return new \com\brolaugh\entities\Partaking($p);
  }

  /**
   * @param $id
   * @return Partaking array
   */
  public function getPartakingByPerson($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM partaking WHERE person_id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \com\brolaugh\entities\Partaking($row));
    }
    $stmt->close();
    return $a;
  }

  /**
   * @param $id
   * @return Partaking array
   */
  public function getPartakingByFika($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM partaking WHERE fika_time_id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \com\brolaugh\entities\Partaking($row));
    }
    $stmt->close();
    return $a;
  }
}