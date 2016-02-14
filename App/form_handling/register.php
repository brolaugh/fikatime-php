<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/14/16
 * Time: 8:31 PM
 */

namespace App\form_handling;

  chdir('../..');
  include 'Helper.php';
  use App\database\Register;

  if(isset($_POST['username']) && isset($_POST['password'])){
    if(preg_match("/[a-zA-Z0-9]*/" ,$_POST['username'])) {
      $register = new Register();
      $register->setUsername($_POST['username']);
      $register->setPassword($_POST['password']);
      $register->setPassword2($_POST['passwordconfirm']);
      $register->setEmail($_POST['email']);
      $register->setFname($_POST['fname']);
      $register->setSname($_POST['sname']);
      if($register->check()){
        $register->finalize();
        header("Location:".ROOT."/dashboard");
      }else{
        header("Location:".ROOT."/register?error=1");
        exit();
      }

    }else{
      header("Location:".ROOT."/login?error=1");
      exit();
    }
  }
