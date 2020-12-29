<?php
    $user_email = $_POST['user_email'];
    $news_title = $_POST['news_title'];
    $news_content = $_POST['news_content'];
    //connect mysql
    $con = mysql_connect('localhost', 'root', 'my880609');
    if(!$con) {
        echo 'not connect mysql';
    }
    mysql_query('set names utf8');
    mysql_select_db('dessert', $con);
    
    if($user_email != '' && $news_title != '' && $news_content != '')
    {
        $sql = "INSERT INTO news (user_email, news_title, news_content) VALUES ('$user_email', '$news_title', '$news_content')";
        mysql_query($sql, $con);
        mysql_close($con);
        
        header('location: news.php');
    }
?>