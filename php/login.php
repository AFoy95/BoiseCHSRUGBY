<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>


<html>
  <head>
    <link href="/css/admin.css" type="text/css" rel="stylesheet" />
  </head>
  <div id="header">
                                <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a href="/php/Tables.php">Tables</a>
								<a class="active" href="/php/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/logout.php> LOGOUT</a> 
									";}?>
							</div>
                                </div>		
  <body>

   <div class ="sidenav">
		<div class = "dropdown">
		<button class="dropbtn">Admin info</button>
		<div class = "dropdown-content">
		<a href="#">Who is the Admin?</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">US Copyright Laws</button>
		<div class = "dropdown-content">
		<a href="#">US laws</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">General Guidelines</button>
		<div class = "dropdown-content">
		<a href="#">Dont be That Guy/Gal</a>
		</div>
		</div>
		<div class = "dropdown">
			<form action="login_handler.php" method="post">
			username:<br>
			<input type="text" name="username" id="username"/><br>
			password:<br>
			<input type="password" name="password" id="password"/><br/>
			<div>
				<input type="submit" name="submit" id="login" value="Login"/>
			</div>
		</div>
		</div>
  
  
  
  <div class="message"></div>
<form action="login_handler.php" method="post">
			username:<br>
			<input type="text" name="username" id="username"/><br>
			password:<br>
			<input type="password" name="password" id="password"/><br/>
	<div>
      <input type="submit" name="submit" id="login" value="Login"/>
	</div>
</form>
</body>
</html
