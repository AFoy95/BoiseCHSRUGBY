<?php
require_once 'login_handler.php';
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
if(isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]){
	header("html/admin.html");
}
$username="";
$password="";
if(isset($_SESSION["user_preset"])&& isset($_SESSION["pass_preset"]){
	$username=$_SESSION["user_preset"];
	$password=$_SESSION["pass_preset"];
}
?>

<html>
  <head>
    <link href="/css/admin.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
<h1>Login page</h1>
<div class="message"></div>
<form action="login_handler.php" method="POST">
			username:<br>
			<input type="text" name="username" id="username" value=""/><br>
			password:<br>
			<input type="password" name="password" value=""/>
	<div>
      <input type="submit" name="submit" id="login" value="Login"/>
	</div>
</form>
</body>
</html
