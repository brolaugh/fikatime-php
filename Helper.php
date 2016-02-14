<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 7:49 PM
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);
define("ROOT", "/fikatime-php");
session_start();

//Define autoloader
function __autoload($className) {
    $className = str_replace("\\", "/", $className);
    if (file_exists($className . '.php')) {
        require_once $className . '.php';
        return true;
    }
    return false;
}

function canClassBeAutloaded($className) {
    return class_exists($className);
}
function isLoggedIn(){
  if(isset($_SESSION['user'])){
    if(is_int($_SESSION['user']->getId())){
      return true;
    }
    else{
      session_unset();
      session_destroy();
      return false;
    }
  }

}
if(isset($_POST['submit_type'])&& $_POST['submit_type' == "login"]){
  if(isset($_POST['username']) && isset($_POST['password'])){
    if(preg_match("a-zA-Z0-9" ,$_POST['username'])) {
      $login = new Login();
      $login->doLogin($_POST['username'], $_POST['password']);
    }else{
      header("Location:".ROOT."/login?error=1");
      exit();
    }
  }
}
if(isset($_POST['submit_type']) && $_POST['submit_type' == "register"]){
  if(isset($_POST['username']) && isset($_POST['password'])){
    if(preg_match("a-zA-Z0-9" ,$_POST['username'])) {
      $register = new \com\brolaugh\database\Register();
      $register->setUsername($_POST['username']);
      $register->setPassword($_POST['password']);
      $register->setPassword2($_POST['passwordconfirm']);
      $register->setEmail($_POST['email']);
      $register->setFname($_POST['fname']);
      $register->setSname($_POST['sname']);
      if($register->check()){
        $register->finalize();
      }else{
        header("Location:".ROOT."/register?error=1");
        exit();
      }

    }else{
      header("Location:".ROOT."/login?error=1");
      exit();
    }
  }
}
