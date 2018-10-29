<?php
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
