<?php
/**
 * Created by PhpStorm.
 * User: database
 * Date: 2/13/16
 * Time: 5:03 PM
 */
include_once("Helper.php");

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap-material-design.min.css" charset="utf-8">
  <link rel="stylesheet" href="css/ripples.min.css" charset="utf-8">
  <meta charset="utf-8">
  <title>FikaTime</title>
</head>
<body>

<main class="container-fluid">
  <header>

    <div class="jumbotron"><h1 class="text-lg-center text-md-center">FikaTime</h1></div>
  </header>
  <?php

  if(isset($_REQUEST['page'])){
  $regex = '/[^A-Za-z0-9\-_\/]/';
  $_REQUEST['page'] = preg_replace($regex, '', $_GET['page']);

  if (file_exists('App/pages/' . $_GET['page'] . '.php'))
    include 'App/pages/' . $_GET['page'] . '.php';
  else
    include 'App/pages/404.php';
  }else{
    if(isLoggedIn()){
      header("Location:".ROOT."/dashboard");
    }else{
      header("Location:".ROOT."/splash");
    }

  }
  ?>
</main>
<footer>
  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="js/material.min.js" charset="utf-8"></script>
  <script src="js/ripples.min.js" charset="utf-8"></script>
</footer>
</body>
</html>
