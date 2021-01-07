<?php
    function db()
    {
        global $con;
        //connect to mysql
        $con = mysqli_connect('localhost', 'root', 'my880609', 'dessert');
        return $con;   
    }
?>