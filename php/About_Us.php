
<?php
	session_start();
?>

<html>
  <header><title>About Us</title></header>
  <head>
  <link href="/css/About_Us.css" type="text/css" rel="stylesheet" />
  </head>
						<div id="header">
                                <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a class="active" href="/php/About_Us.php">About-Us</a>
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
 
	<body id="background">
		<div class ="sidenav">
		<div class = "dropdown">
		<button class="dropbtn">About-Us</button>
		<div class = "dropdown-content">
		<a href="#">Teams</a>
		<a href="#">Championships</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Timeline</button>
		<div class = "dropdown-content">
		<a href="#">Founding</a>
		<a href="#">Boys Timeline</a>
		<a href="#">Girls Timeline</a>
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
