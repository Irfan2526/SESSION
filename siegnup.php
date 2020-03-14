<?php
session_start();
if (isset($_POST['submit'])){
$_SESSION['name']=$_POST['name1'];
$_SESSION['email']=$_POST['mail'];
$_SESSION['pass']=$_POST['passwod'];
	if (!empty($_POST['name1'] && $_POST['mail'] && $_POST['passwod'] ))
	{
		header('location:login.php');
    }
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
<h2>Welcome to My Sign up Page</h2>
	<form method="post" action=" ">
		<p><b>Name:</b><input type="text" name="name1"></p>
	<p><b>Email:</b><input type="email" name="mail"></p>
	<p><b>Password:</b><input type="password" name="passwod"></p>
	<p><input type="submit" value="submit" name="submit"></p>
</form>

</body>
</html>