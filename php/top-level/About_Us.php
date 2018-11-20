
<<?php
	session_start();
?>

<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <body>
						<div id="header">
						 <header><title>About Us</title></header>
  <head>
  <link href="/css/About_Us.css" type="text/css" rel="stylesheet" />
  </head>
                                <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
							
							<div class="topnav">
								<a href="/php/top-level/main_page.php">Main-page</a>
								<a class="active" href="/php/top-level/About_Us.php">About-Us</a>
								<a href="/php/top-level/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/top-level/Schedules.php">Schedule</a>	
								<a href="/php/top-level/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/login_handles/logout.php> LOGOUT</a> 
									";}?>
							</div>
                              </div>
		<div id="background">
		<div class ="sidenav">
		<div>
		<button class="dropbtn">About Us</button>
		<div class = "dropdown-content">
		<a href="/php/About_Us/Teams.php">Teams</a>
		<a href="/php/About_Us/Championships.php">Championships</a>
		</div>
		</div>
		<div>
		<button class="dropbtn">Teams Timeline</button>
		<div class = "dropdown-content">
		<a href="/php/About_Us/Founding.php">Founding</a>
		<a href="/php/About_Us/Btimeline.php">Boys Timeline</a>
		<a href="/php/About_Us/Gtimeline.php">Girls Timeline</a>
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
	 <script src = "/../../js/sideNav.js"></script>
</body>
</html>



