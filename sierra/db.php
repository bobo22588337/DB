<?php 
function db(){
    $db = mysqli_connect("localhost", "root", "fish_870330", "dessert");
    return $db;
}

function user(){
    $user_email = "sierra";
    return $user_email;
}
?>