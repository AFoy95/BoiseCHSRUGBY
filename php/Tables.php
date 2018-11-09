<?php
	include'Dao.php';
	session_start();
	$dao=new Dao();
	$conn=$dao->getConnection();
?>
<html>
  <body>
  <div id="header">
                                
							<header><title>Scores</title></header>
  <head>
  <link href="/css/tables.css" type="text/css" rel="stylesheet" />
  </head>	
  <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
									
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a class="active" href="/php/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/logout.php> LOGOUT</a> 
									";}?>
							</div>
                                </div>	
	   <div class ="sidenav">
		<div class = "dropdown">
		<button class="dropbtn">Boys Games</button>
		<div class = "dropdown-content">
		<a href="/php/Varsity_Boys_regular.php">Regular Season</a>
		<a href="/php/Varsity_Boys_playoffs.php">Playoffs</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Girls Games</button>
		<div class = "dropdown-content">
		<a href="/php/Varsity_Girls_regular.php">Regular Season</a>
		<a href="/php/Varsity_Girls_playoffs.php">Playoffs</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Jv Boys Games</button>
		<div class = "dropdown-content">
		<a href="/php/JVarsity_Boys_regular.php">Regular Season</a>
		<a href="/php/JVarsity_Boys_playoffs.php">Playoffs</a>
		</div>
		</div>
		</div>
  <div id="background">
  
  </div>
 <div class="footer">
  <p> &copy; boisechsrugby.com</p>
  <p>&emsp;Admin: Austin Foy</p>
  <p>&emsp;Contact information: <a href="mailto:afoy95@live.com">
  afoy95@live.com</a>.</p>
</div>
</body>
</html>
