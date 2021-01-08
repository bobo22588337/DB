<?php 

  function db(){
    $link = mysql_connect("localhost","root","12345678");
    mysql_select_db("dessert",$link);
    mysql_query("SET NAMES UTF8");
    return $link;
   
  }
  
  function user(){
      session_start();
      $user_email = $_SESSION['user_email'];
      //$user_email = "sierra";
      return $user_email;
  }
  ?>
