<?php
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
		<div class = "content">
			<table>
				<th>Championships</th>
			
				<table>
				<br>
				<br>
				<th>Boys</th><tr><td>Year</td></tr>
								<tr><td>2008-2009</td></tr>
								<tr><td>2009-2010</td></tr>
								<tr><td>2011-2012</td></tr>
								<tr><td>2014-2015</td></tr>
				</table>
				<br>
				<br>
				<table>
				<th>Girls</th><tr><td>Year</td></tr>
								  <tr><td>2010-2011</td></tr>
								  <tr><td>2011-2012</td></tr>
								  <tr><td>2012-2013</td></tr>
								  <tr><td>2013-2014</td></tr>
								  <tr><td>2014-2015</td></tr>
								  <tr><td>2015-2016</td></tr>
								  <tr><td>2016-2017</td></tr>
								  <tr><td>2017-2018</td></tr>		  
				</table>
				</table>
			
		
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



