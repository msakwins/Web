<?php
	session_start();
	Include("./auth.php");
	$login = $_POST['uname'];
	$passwd = $_POST['passwd'];
	if (auth($login, $passwd) == true)
	{
		$_SESSION['logged_on_user'] = $login;
		$info = info($_SESSION['logged_on_user']);
		$_SESSION['fname'] = $info['fname'];
		$_SESSION['mail'] = $info['mail'];
		$_SESSION['lname'] = $info['lname'];
	}
	else
	{
		echo("<script>alert(' ERROR ')</script>");
		$_SESSION['logged_on_user'] = "NULL";
	}
	header("Location: index.php");
?>
