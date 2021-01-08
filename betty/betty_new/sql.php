<?php 

  function db(){
    $link = mysqli_connect("localhost","root","fish_870330", "dessert");
    return $link;
   
  }
  
  function user(){
      session_start();
      $user_email = $_SESSION['user_email'];
      $user_email = $_SESSION['user_email'];
      //$user_email = "sierra";
      return $user_email;
  }
  ?>
