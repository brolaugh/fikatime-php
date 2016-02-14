<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/14/16
 * Time: 12:25 AM
 */

namespace com\brolaugh\database;


class Login
{
  private $select;
  private $username;
  private $password;
  public $registerUser;
  public function __construct(){
    $this->select = new Select();
    $this->registerUser = new \com\brolaugh\entities\Person();
  }

  /**
   * @param $username
   * @param $password
   * @return bool
   */
  public function doLogin($username, $password){
    $username = trim($username);
    $password = trim($password);
    $personObject = $this->select->person->getPersonByUsername($username);
    if(password_verify($personObject->getPassword(), $password)){
      $_SESSION['user'] = $personObject;
      return true;
    }
    else{
      return false;
    }

  }
}