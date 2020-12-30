<?php
session_start();

// initializing variables
/*$user_name = "";
$user_email = "";*/
$errors = array(); 

// connect to the database
$db = mysql_connect('localhost', 'root', 'my880609', 'dessert');
mysql_select_db("dessert",$db);


/************* register ************/
if (isset($_POST['register'])) {
    // receive all input values from the form
    /*$user_name = mysql_real_escape_string($_POST['user_name']);
    $user_email = mysql_real_escape_string($_POST['user_email']);
    $password_1 = mysql_real_escape_string($_POST['password1']);
    $password_2 = mysql_real_escape_string($_POST['password2']);*/
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $password_1 = $_POST['password1'];
    $password_2 = $_POST['password2'];
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($user_name)) {
    array_push($errors, "請輸入姓名／暱稱"); 
     }
    if (empty($user_email)) {
    array_push($errors, "請輸入帳號"); 
    }
    if (empty($password_1)) { 
    array_push($errors, "請輸入密碼");
    }

    if ($password_1 != $password_2) {
    array_push($errors, "密碼不一致");
    }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $user_check_query = "SELECT * FROM user WHERE user_email='$user_email' LIMIT 1";
  $result = mysql_query($user_check_query,$db);
  $user = mysql_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_email'] == $user_email) {
      array_push($errors, "此帳號已註冊");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1;
    mysql_query("SET NAMES 'utf8'");
    $query1 = "insert into user (user_name, user_email, user_psw, identity, status) values('$user_name', $user_email', '$password', 'user', 1)";
    mysql_query($query1,$db);

    echo "<script language='JavaScript'>alert('註冊成功',location.href='../index.html')</script>";
    //這一行重新導向的位置待改

    $_SESSION['user_email'] = $user_email;
  }
}

/**************** login *******************/

if (isset($_POST['login'])) {
  $username = mysql_real_escape_string($_POST['user_email']);
  $password = mysql_real_escape_string($_POST['password']);

  if (empty($user_email)) {
  	array_push($errors, "請輸入帳號");
  }
  if (empty($password)) {
  	array_push($errors, "請輸入密碼");
  }
  if (count($errors) == 0) {
	mysql_query( 'set names utf8' );

  	$query = "SELECT * FROM user WHERE user_email = '$user_email' AND user_psw='$password' AND identity = 'user' AND status = 1";
  	$results = mysql_query($query,$db);

  	if (mysql_num_rows($results) == 1) {
		$_SESSION['user_email'] = $user_email;
        header('location: ../index.html'); //此處導向待改
	}
  	else{
		echo "<script language='JavaScript'>alert('你已被停權',location.href='../index.html')</script>"; //此處導向待改
	}
  	
	
/*** manager  ***/
	$sql = "SELECT * FROM user WHERE user_email='$user_email' AND user_psw='$password' AND identity = 'admin' AND status = 1";
	$re = mysql_query($sql,$db);
	if(mysql_num_rows($re) == 1){
		$_SESSION['user_email'] = $user_email;
		header('location: ../index.html'); //此處導向待改
	}

	else {
		
  		array_push($errors, "帳號密碼錯誤");
		
  	}
  }
}
mysql_close($db);

?>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
  <br>
<?php  endif?>
