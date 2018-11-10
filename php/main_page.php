<?php
session_start();
?>




<html>
				<body>
         <div id="header">
                                <header><title>main-page</title></header>
                <head>
                        <link href="/css/main.css" type="text/css" rel="stylesheet" />
                        <head><link rel="shortcut icon" href="/photos/logo.PNG" type="image/png" sizes="16x16" /></head>
                </head> 
								
								
								<h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
							
							<div class="topnav">
								<a class="active" href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a href="/php/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/logout.php> LOGOUT</a> 
									";}?>
							</div>
                                </div>		
		<div id="background">
              <div class ="sidenav">
		<div class = "dropdown">
		<button class="dropbtn">What is Rugby</button>
		<div class = "dropdown-content">
		<a href="#">Rugby Basics</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Rugby Laws</button>
		<div class = "dropdown-content">
		<a href="#">Rugby Law Book</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Users Sign-up/Sign-in</button>
		<div class = "dropdown-content">
		<a>User Sign-in</a>
		<form action="login_handler.php" method="post">
			email:<br>
			<input type="text" name="email" id="email"/><br>
			password:<br>
			<input type="password" name="password" id="password"/><br/>
			<div>
				<input type="submit" name="submit" id="login" value="Login"/>
			</div>
			</form>
		<a href="#">User Sign-up</a>
		</div>
		</div>
		</div>

<div class="footer">
  <p> &copy; boisechsrugby.com</p>
  <p>&emsp;Admin: Austin Foy</p>
  <p>&emsp;Contact information: <a href="mailto:afoy95@live.com">
  afoy95@live.com</a>.</p>
</div>
</body>
</html>

