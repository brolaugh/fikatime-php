<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 10:46 PM
 */

namespace App\database\fetchtables;


use App\database\Table;

class Receipt extends Table
{
  /**
   * @return Receipt array
   */
  public function getAllReceipt(){
    $stmt = $this->getDB()->prepare("SELECT * FROM receipt");
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \App\entities\Receipt($row));
    }
    $stmt->close();
    return $a;
  }


  /**
   * @param fikatime_id
   * @return Receipt array
   */
  public function getAllReceiptByFika($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM receipt WHERE fikatime_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \App\entities\Receipt($row));
    }
    $stmt->close();
    return $a;
  }

  /**
   * @param $id
   * @return Receipt array
   */
  public function getAllReceiptByPerson($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM receipt WHERE person_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \App\entities\Receipt($row));
    }
    $stmt->close();
    return $a;
  }

  /**
   * @param $id
   * @return Receipt
   */
  public function getReceiptById($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM receipt WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_object();
    $stmt->close();
    return new \App\entities\Receipt($row);
  }




}