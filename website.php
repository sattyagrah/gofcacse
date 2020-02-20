<?php
  session_start();

  if(isset($_SESSION['username'])){
    $_SESSION['msg'] = "Please log in to see this page!";
    header("location: login.html");
  }

  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.html");
  }
 ?>
