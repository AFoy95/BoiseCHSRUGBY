<?php
	session_start();
?>

<html>
	<header><title>Personal-Bio's</title></header>
	<head>
		<link href="/css/Personal_Bios.css" type="text/css" rel="stylesheet" />
	</head>
		<div id="header">
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
		<div class = "sidenav">
		<href class="dropdown-btn">Head Coaches<i class = "fa-caret-down"></i>
		<div class = "dropdown-container">
		<a href="#">Matt Jacobsen</a>
		<a href="#">Jeff Turpen</a>
		<a href="#">Greg Turpen</a>
		</div>
		<href class="dropdown-btn">Asst Coaches<i class = "fa-caret-down"></i>
		<div class = "dropdown-container">
		<a href="#">Alex Wray</a>
		<a href="#">Austin Foy</a>
		<a href="#">Laura Brown</a>
		</div>
		<href class="dropdown-btn">Grad Assistant<i class = "fa-caret-down"></i>
		<div class = "dropdown-container">
		<a href="#">Jacob Hardy</a>
		</div>
	</body>

</html>
