<?php
session_start();
if ( empty($_SESSION['mail']) && empty($_SESSION['pass'])) {
	
		header("location:login.php");
	}
	

if (isset($_GET['submit']))
	{
	
	header("location:index.php");
	
    }
 session_unset();
session_destroy();

	
?>
<!DOCTYPE html>
<html lang="us-en">
<head>
<meta charset="utf-8">
</head>
<body>
<center><h2>You are Success Sign up and Login Our Page</h2></center>
<p>When you work with an application, you open it, 
do some changes, and then you close it. This is much
 like a Session. The computer knows who you are. 
 It knows when you start the application and when you end. 
 But on the internet there is one problem: 
 the web server does not know who you are or what you do,
 because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user 
information to be used across multiple pages 
(e.g. username, favorite color, etc).
 By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user,
 and are available to all pages in one application.</p>
 <form method="GET" action=" ">
 <p><input type="Submit" value="Back" name="submit"></p>
 </form>
 
 
</body>
</html>
