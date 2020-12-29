<?php
    $news_id = $_GET['news_id'];
    //connect mysql
    $con = mysql_connect('localhost', 'root', 'my880609');
    if(!$con) {
        echo 'not connect mysql';
    }
    mysql_query('set names utf8');
    mysql_select_db('dessert', $con);
    
    $sql = "DELETE FROM news WHERE news_id = $news_id";
    mysql_query($sql, $con);
    
    mysql_close($con);
    
    header('location: news.php');
?>