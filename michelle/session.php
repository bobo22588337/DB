<?php
    session_start();

    //connect to mysql
    $con = mysql_connect('localhost', 'root', 'my880609');
    if(!$con) {
        echo 'not connect mysql';
    }
    mysql_query('set names utf8');
    mysql_select_db('dessert', $con); 
    
    /************* register ************/
    if (isset($_POST['register'])) {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_psw = $_POST['user_psw'];
        $user_psw2 = $_POST['user_psw2'];
        
        $sql = "SELECT * FROM user WHERE user_email = '$user_email' LIMIT 1";
        $rs = mysql_query($sql, $con);
        if ($user_psw != $user_psw2) {
            echo "<script language='javascript'>alert('密碼輸入不一致!請重新輸入!', location.href='register.php?user_email=$user_email&user_name=$user_name');</script>"; //位置待改
        }
        else if (empty(mysql_fetch_row($rs))) {
            $sql = "INSERT INTO user (user_email, user_psw, user_name, identity, status) VALUES ('$user_email', '$user_psw', '$user_name', 'user', 1)";
            mysql_query($sql, $con);

            echo "<script language='javascript'>alert('註冊成功!', location.href='../index.html');</script>"; //位置待改

            $_SESSION['user_email'] = $user_email;
        }
        else
        {
            echo "<script language='javascript'>alert('帳號已被註冊！請重新註冊！', location.href='register.php');</script>"; //位置待改
        }
    }
    /************* login ************/
    
    if (isset($_POST['login'])) {
        $user_email = $_POST['user_email'];   
        $user_psw = $_POST['user_psw'];
        
        /************* user ************/
        $sql = "SELECT * FROM user WHERE user_email = '$user_email' AND user_psw = '$user_psw' AND identity = 'user'";
        $rs = mysql_query($sql, $con);
        $record = mysql_fetch_row($rs);
        if(empty($record)) {
            echo "<script language='javascript'>alert('帳號密碼錯誤，請重新輸入！', location.href='login.php');</script>";
        }
        else {
            switch ($record[4]) {
            case 1:
                $_SESSION['user_email'] = $user_email;
                header('location: ../index.html'); //位置待改
                break;
            case 0:
                echo "<script language='javascript'>alert('帳號已被停權', location.href='../index.html');</script>"; //位置待改
                break;
            }    
        }
        /************* administrator ************/
        $sql = "SELECT * FROM user WHERE user_email = '$user_email' AND user_psw = '$user_psw' AND identity = 'admin' AND status = 1";
        $rs = mysql_query($sql, $con);
        if (!empty(mysql_fetch_row($rs))) {
            $_SESSION['user_email'] = $user_email;
            header('location: ../index.html'); //位置待改
        }
        else {
            echo "<script language='javascript'>alert('帳號密碼錯誤，請重新輸入！', location.href='login.php');</script>";
        }
    }
    mysql_close($con);
?>