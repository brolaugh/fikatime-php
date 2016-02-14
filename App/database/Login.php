<?php


namespace App\database;

class Login
{
  private $select;

  /**
   * Login constructor.
   */
  public function __construct(){
    $this->select = new Select();
  }

  /**
   * @param $username
   * @param $password
   * @return bool
   */
  public function doLogin($username, $password){
    $trimmedUsername = trim($username);
    $trimmedPassword = trim($password);
    echo "<pre>";

    if($personObject = $this->select->person->getPersonByUsername($trimmedUsername)){

      if(password_verify($personObject->getPassword(), $trimmedPassword)){

        $_SESSION['user'] = $personObject;
        return true;
      }
      else{
        return false;
      }
    }
  }
}