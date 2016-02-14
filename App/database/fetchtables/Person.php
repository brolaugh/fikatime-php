<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 10:45 PM
 */

namespace App\database\fetchtables;


use App\database\Table;

class Person extends Table
{

  /**
   * @return Person array
   */
  public function getAllPerson(){
    $stmt = $this->getDB()->prepare("SELECT * FROM person");
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \App\entities\Person($row));
    }
    $stmt->close();
    return $a;
  }

  /**
   * @param $id
   * @return Person
   */
  public function getPersonById($id){
    $stmt = $this->getDB()->prepare("SELECT * FROM person WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_object();
    $stmt->close();
    return new \App\entities\Person($row);
  }

  /**
   * @param $fname
   * @return Person array
   */
  public function getAllPersonByFName($fname){
    $stmt = $this->getDB()->prepare("SELECT * FROM person WHERE fname LIKE ?");
    $stmt->bind_param('s', $fname);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \App\entities\Person($row));
    }
    $stmt->close();
    return $a;
  }

  /**
   * @param $sname
   * @return Person array
   */
  public function getAllPersonBySName($sname){
    $stmt = $this->getDB()->prepare("SELECT * FROM person WHERE sname LIKE ?");
    $stmt->bind_param('s', $sname);
    $stmt->execute();
    $res = $stmt->get_result();
    $a  = array();
    while($row = $res->fetch_object()){
      array_push($a, new \App\entities\Person($row));
    }
    $stmt->close();
    return $a;
  }

  /**
   * @param $username
   * @return Person
   */
  public function getPersonByUsername($username){
    $stmt = $this->getDB()->prepare("SELECT * FROM person WHERE login = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $res = $stmt->get_result();
    $p = new \App\entities\Person($res->fetch_object());
    $stmt->close();
    return $p;
  }

  /**
   * @param $email
   * @return Person
   */
  public function getPersonByEmail($email){
    $stmt = $this->getDB()->prepare("SELECT * FROM person WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $p = new \App\entities\Person($res->fetch_object());
    $stmt->close();
    return $p;
  }

  /**
   * @param $telephone
   * @return Person
   */
  public function getPersonByTelephone($telephone){
    $stmt = $this->getDB()->prepare("SELECT * FROM person WHERE telephone = ?");
    $stmt->bind_param('s', $telephone);
    $stmt->execute();
    $res = $stmt->get_result();
    $p = new \App\entities\Person($res->fetch_object());
    $stmt->close();
    return $p;
  }
  public function doesPersonUsernameExist($username){
    $stmt = $this->getDB()->prepare("SELECT id FROM person WHERE login = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $res = $stmt->get_result();
    if($res->num_rows > 0){
      return true;
    }
    else{
      false;
    }
  }

}