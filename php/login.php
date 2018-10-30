<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>


<html>
  <head>
    <link href="/css/admin.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
<h1>Login page</h1>
<div class="message"></div>
<form action="login_handler.php" method="post">
			username:<br>
			<input type="text" name="username" id="username" value=""/><br>
			password:<br>
			<input type="password" name="password" id="password" value="" /></br>
	<div>
      <input type="submit" name="submit" id="login" value="Login"/>
	</div>
</form>
</body>
</html
