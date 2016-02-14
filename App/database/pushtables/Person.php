<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/14/16
 * Time: 1:13 AM
 */

namespace App\database\pushtables;


use App\database\Table;

class Person extends Table
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