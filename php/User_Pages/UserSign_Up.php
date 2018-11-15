<?php
session_start();
if(isset($_SESSION['err'])){
			
			echo($_SESSION['err']);
}
?>

<html>
<body>
<head>
<link href="/css/usersign_in.css" type="text/css" rel="stylesheet" />
</head>
<div>
<form action="user_handler.php" method="post" style="border:1px solid black">
	<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" value="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" value="password-repeat" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>	

</form>
</div>
</body>
</html>