<?php
session_start();
if (isset($_POST['submit'])) 
{ 
	if (!empty($_SESSION['email']==$_POST['email'] && $_SESSION['pass']==$_POST['password'])) 
	{
	header('location:account.php');
    }
    
}

?>
<!DOCTYPE html>
<html lang="us-en">
<head>
<meta charset="utf-8">
</head>
<body>
<h2>Welcome to My Login Page</h2>
<form method="POST" action=" ">
		<p><b>Email:</b><input type="email" name="email"></p>
		<p><b>Password:</b><input type="Password" name="password"></p>
		<p><input type="submit" name="submit" value="Submit"></p>
	</form>
</body>