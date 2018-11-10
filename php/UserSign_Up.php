<?php
session_start();

?>

<html>
<body>
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