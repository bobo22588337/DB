<?php
    $news_id = $_POST['news_id'];
    $user_email = $_POST['user_email'];
    $news_title = $_POST['news_title'];
    $news_content = $_POST['news_content'];
    //connect mysql
    $li = mysql_connect('localhost', 'root', 'my880609');
    if(!$li) {
        echo 'not connect mysql';
    }
    mysql_query('set names utf8');
    mysql_select_db('dessert', $li);
    if($news_title != '' && $news_content != '')
    {
        $sss = "update news set news_date = NOW(), user_email = '$user_email', news_title = '$news_title', news_content = '$news_content' where news_id = '$news_id'";
        
        mysql_query($sss, $li);
        mysql_close($li);
        
        header("location: news.php");
    }
?>