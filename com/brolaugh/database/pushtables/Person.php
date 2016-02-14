<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/14/16
 * Time: 1:13 AM
 */

namespace com\brolaugh\database\pushtables;


class Person extends \com\brolaugh\database\Table
{
  public function register($sname, $fname, $email, $username, $password){
    $stmt = $this->getDB()->prepare("INSERT INTO person(fname, sname, email, login, password) values(?,?,?,?,?)");
    $stmt->bind_param('sssss', $sname, $fname, $email, $username, $password);
    if($stmt->execute()){
      $stmt->close();
      return true;
    }else{
      $stmt->close();
      return false;
    }

  }
}