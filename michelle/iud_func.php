<?php
    //connect to mysql
    $con = mysql_connect('localhost', 'root', 'my880609');
    if(!$con) {
        echo 'not connect mysql';
    }
    mysql_query('set names utf8');
    mysql_select_db('dessert', $con);  
    
    /************* insert news ************/
    if (isset($_POST['insert_news'])) {
        $user_email = $_POST['user_email'];
        $news_title = $_POST['news_title'];
        $news_content = $_POST['news_content'];
        if($user_email != '' && $news_title != '' && $news_content != '')
        {
            $sql = "INSERT INTO news (user_email, news_title, news_content) VALUES ('$user_email', '$news_title', '$news_content')";
            mysql_query($sql, $con);

            header('location: news.php');
        }
    }
    /************* update news ************/
    if (isset($_POST['update_news'])) {
        $news_id = $_POST['news_id'];
        $user_email = $_POST['user_email'];
        $news_title = $_POST['news_title'];
        $news_content = $_POST['news_content'];
        
        if($news_title != '' && $news_content != '')
        {
            $sql = "update news set news_date = NOW(), user_email = '$user_email', news_title = '$news_title', news_content = '$news_content' where news_id = '$news_id'";

            mysql_query($sql, $con);

            header("location: news.php");
        }

    }
    /************* delete news ************/
    if (isset($_GET['del_news'])) {
        $news_id = $_GET['news_id'];
        
        $sql = "DELETE FROM news WHERE news_id = $news_id";
        mysql_query($sql, $con);
        
        header('location: news.php');
    }
    
    mysql_close($con);
?>