<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/14/16
 * Time: 12:57 AM
 */

namespace App\database;


use App\database\Insert;

class Register
{
  private $username;
  private $password;
  private $password2;
  private $fname;
  private $sname;
  private $email;


  /**
   * @return bool
   */
  public function check(){
    $select = new Select();
    if($select->person->doesPersonUsernameExist($this->username)){
      return false;
    }
    else if($this->password != $this->password2){
      return false;
    }
    else if(!preg_match("/[a-zåäöA-ZÅÄÖ]*/", $this->fname)){
      return false;
    }
    else return !preg_match("/[a-zåäöA-ZÅÄÖ]*/", $this->sname) ? false : true;
  }

  /**
   *
   */
  public function finalize(){
    $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    $insert = new Insert();
    return $insert->person->register($this->sname, $this->fname, $this->email, $this->username, $this->password);
  }

  /**
   * @param string $password
   */
  public function setPassword($password)
  {
    $this->password = $password;
  }
  public function setPassword2($password)
  {
    $this->password2 = $password;
  }

  /**
   * @param string $sname
   */
  public function setSname($sname)
  {
    $this->sname = $sname;
  }
  public function setFname($fname)
  {
    $this->fname = $fname;
  }


  /**
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }


  /**
   * @param string $username
   */
  public function setUsername($username){
    $this->username = $username;
  }
}