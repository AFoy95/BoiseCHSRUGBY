<?php
session_start();

?>

<html>
<body>
<head>
<link href="/css/usersign_in.css" type="text/css" rel="stylesheet" />
</head>
<form action="user_handler.php" method="post">
			email:<br>
			<input type="text" name="email" id="email"/><br>
			password:<br>
			<input type="password" name="password" id="password"/><br/>
			<div>
				<input type="submit" name="submit" id="create" value="Create"/>
			</div>

</form>

</body>
</html>