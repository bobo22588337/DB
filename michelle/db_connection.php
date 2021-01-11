<?php
    function db()
    {
        global $con;
        //connect to mysql
        $con = mysqli_connect('localhost', 'root', '12345678', 'dessert');
        mysqli_query($con,"SET NAMES 'utf8'");
        return $con;   
    }
?>