<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 6:20 PM
 */

namespace com\brolaugh\database;


use com\brolaugh\entities\FikaTime;
use com\brolaugh\entities\Person;
use com\brolaugh\entities\Receipt;

class Select extends DBSetup
{
    /**
     * @return array
     */
    public function getAllReceiptRows(){
        $stmt = $this->getDB()->prepare("SELECT * FROM receipt");
        $stmt->execute();
        $res = $stmt->get_result();
        $a  = array();
        while($row = $res->fetch_object()){
            array_push($a, new Receipt($row));
        }
        $stmt->close();
        return $a;
    }


    /**
     * @param fikatime_id
     * @return array
     */
    public function getAllReceiptByFika($id){
        $stmt = $this->getDB()->prepare("SELECT * FROM receipt WHERE fikatime_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $a  = array();
        while($row = $res->fetch_object()){
            array_push($a, new Receipt($row));
        }
        $stmt->close();
        return $a;
    }

    public function getAllReceiptByPerson($id){
        $stmt = $this->getDB()->prepare("SELECT * FROM receipt WHERE person_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $a  = array();
        while($row = $res->fetch_object()){
            array_push($a, new Receipt($row));
        }
        $stmt->close();
        return $a;
    }
    public function getReceiptById($id){
        $stmt = $this->getDB()->prepare("SELECT * FROM receipt WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_object();
        $stmt->close();
        return new FikaTime($row);
    }
    public function getFikaTimeById($id){
        $stmt = $this->getDB()->prepare("SELECT * FROM fika_time WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_object();
        $stmt->close();
        return new FikaTime($row);
    }


    public function getFikaTimeByResponsable($id){
        $stmt = $this->getDB()->prepare("SELECT * FROM fika_time WHERE person_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $a  = array();
        while($row = $res->fetch_object()){
            array_push($a, new FikaTime($row));
        }
        $stmt->close();
        return $a;
    }
    public function getPersonById($id){
        $stmt = $this->getDB()->prepare("SELECT * FROM person WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_object();
        $stmt->close();
        return new Person($row);
    }
    public function getAllPerson(){
        $stmt = $this->getDB()->prepare("SELECT * FROM person");
        $stmt->execute();
        $res = $stmt->get_result();
        $a  = array();
        while($row = $res->fetch_object()){
            array_push($a, new Person($row));
        }
        $stmt->close();
        return $a;
    }

}