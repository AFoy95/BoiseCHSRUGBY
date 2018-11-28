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
<div id="error">
</div>
<form action="/php/User_Pages/user_handler.php" method="post" style="border:1px solid black">
	<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" value="password-repeat" required>

    <div class="clearfix">
      <button type="submit" class="cancelbtn" id="cancel">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>	
  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</form>
</div>
</body>
<script src="/../../js/userPattern.js"></script>
</html>