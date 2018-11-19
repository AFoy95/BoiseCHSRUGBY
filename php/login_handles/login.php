<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>


<html>
  <body>
  <div id="header">
                                <head>
    <link href="/css/admin.css" type="text/css" rel="stylesheet" />
  </head>
							  <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
							
							<div class="topnav">
								<a href="/php/top-level/main_page.php">Main-page</a>
								<a href="/php/top-level/About_Us.php">About-Us</a>
								<a href="/php/top-level/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/top-level/Schedules.php">Schedule</a>	
								<a href="/php/top-level/Tables.php">Tables</a>
								<a class ="active" href="/php/login_handles/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/login_handles/logout.php> LOGOUT</a> 
									";}?>
							</div>
                                </div>		
	<div id ="background">
   <div class ="sidenav">
		<div>
		<button class="dropbtn">Admin info</button>
		<div class = "dropdown-content">
		<a href="#">Who is the Admin?</a>
		</div>
		</div>
		<div>
		<button class="dropbtn">US Copyright Laws</button>
		<div class = "dropdown-content">
		<a href="#">US laws</a>
		</div>
		</div>
		<div>
		<button class="dropbtn">General Guidelines</button>
		<div class = "dropdown-content">
		<a href="#">Dont be That Guy/Gal</a>
		</div>
		</div>
		<div>
		<button class="dropbtn">Admin Login</button>
		<div class = "dropdown-content">
			<form action="login_handler.php" method="post">
			username:<br>
			<input type="text" name="username" id="username"/><br>
			password:<br>
			<input type="password" name="password" id="password"/><br/>
			<div>
				<input type="submit" name="submit" id="login" value="Login"/>
			</div>
			</form>
		</div>
		<?php
			if($_SESSION['isadmin']){
			echo("
			<div class = dropdown-content>
			<form action=set_admin.php method=post>
			username:<br>
			<input type= text name= username id= username/><br>
			password:<br>
			<input type= password name= password id= password/><br/>
			<div>
				<input type= submit  name= submit  id=login value=change/>
			</div>
			</form>
		</div>
		");
			}
		?>
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
</html
