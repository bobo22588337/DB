<?
	$_SESSION['user_email']="";
	session_destroy();
	header('location:../index.php');
?>