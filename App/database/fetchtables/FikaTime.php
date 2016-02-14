<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 10:45 PM
 */

namespace App\database\fetchtables;

use App\database\Table;

class FikaTime extends Table
{
  public function getFikaTimeById($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM fika_time WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_object();
    $stmt->close();
    return new \com\brolaugh\entities\FikaTime($row);
  }


  public function getFikaTimeByResponsable($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM fika_time WHERE person_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \com\brolaugh\entities\FikaTime($row));
    }
    $stmt->close();
    return $a;
  }
}