<?php


namespace App\form_handling;

chdir('../..');
use App\database\Login;

include "Helper.php";

  if(isset($_POST['username']) && isset($_POST['password'])){
    if(preg_match("/[a-zA-Z0-9]*/" ,$_POST['username'])) {
      $login = new Login();

      if($login->doLogin($_POST['username'], $_POST['password']))
        header("Location:".ROOT);
      else
        header("Location:".ROOT."/login?error=1");
        exit();
    }else{
      header("Location:".ROOT."/login?error=1");
      exit();
    }
  }else{
    header('Location:'.ROOT);
  }