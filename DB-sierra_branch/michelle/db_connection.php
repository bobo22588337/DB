<?php
    function db()
    {
        global $con;
        //connect to mysql
        $con = mysqli_connect('localhost', 'root', 'fish_870330', 'dessert');
        return $con;   
    }
?>