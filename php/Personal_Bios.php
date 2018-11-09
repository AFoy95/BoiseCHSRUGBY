<?php
	session_start();
?>

<html>
	
		<div id="header">
<header><title>Personal-Bio's</title></header>
	<head>
		<link href="/css/Personal_Bios.css" type="text/css" rel="stylesheet" />
	</head>
							   <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
									
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a class="active" href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a href="/php/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/logout.php> LOGOUT</a> 
									";}?>
							</div>
                                </div>		
								
	<body>
		<div class ="sidenav">
		<div class = "dropdown">
		<button class="dropbtn">Head Coaches</button>
		<div class = "dropdown-content">
		<a href="#">Matt Jacobsen</a>
		<a href="#">Jeff Turpen</a>
		<a href="#">Greg Turpen</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Asst Coaches</button>
		<div class = "dropdown-content">
		<a href="#">Alex Wray</a>
		<a href="#">Austin Foy</a>
		<a href="#">Laura Brown</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Grad Assistant</button>
		<div class = "dropdown-content">
		<a href="#">Jacob Hardy</a>
		</div>
		</div>
		</div>
	</body>
<div class="footer">
   <p> &copy; boisechsrugby.com</p>
  <p>&emsp;Admin: Austin Foy</p>
  <p>&emsp;Contact information: <a href="mailto:afoy95@live.com">
  afoy95@live.com</a>.</p>
</div>
</html>
