<?php
	include'Dao.php';
	session_start();
?>

<html>
  <header><title>Schedules</title></header>
  <head>
  <link href="/css/Schedules.css" type="text/css" rel="stylesheet" />
  </head>
  		<div id="header">
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
  <body>
	  <table><th>Dates</th><th>Events</th>
		  <tr><td>sept 26</td><td>hw4</td></tr>
		  <tr><td>sept 30</td><td>World Domination</td></tr>
	</table>

  </body>
  <footer>
  <p>Posted by: Austin Foy</p>
  <p>Contact information: <a href="mailto:afoy95@live.com">
  afoy95@live.com</a>.</p>
</html>
