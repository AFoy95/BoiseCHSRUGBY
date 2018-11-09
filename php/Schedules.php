<?php
	include'Dao.php';
	session_start();
?>

<html>
   <body>
  		<div id="header">
                           <header><title>Schedules</title></header>
						<head>
							<link href="/css/Schedules.css" type="text/css" rel="stylesheet" />
						</head>
						   <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
									
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a class="active "href="/php/Schedules.php">Schedule</a>	
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
		<button class="dropbtn">Dates and Events</button>
		<div class = "dropdown-content">
		<a href="#">Dates</a>
		<a href="#">Events</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Practice Times</button>
		<div class = "dropdown-content">
		<a href="#">Practice</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">California Links</button>
		<div class = "dropdown-content">
		<a href="#">General info</a>
		<a href="#">California Schedule</a>
		</div>
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
