<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>


<html>
  <body>
  <div id="header">
                                <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/admin.css" type="text/css" rel="stylesheet" />
  </head>
							  <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
							
							<div class="topnav">
            <a href="/php/top-level/main_page.php" id = "main" >Main-page</a>
            <a href="/php/top-level/About_Us.php" id="Aus" >About-Us</a>
            <a href="/php/top-level/Personal_Bios.php" id ="Pb" >Personal-Bios</a>	
            <a href="/php/top-level/Schedules.php" id = "Sche" >Schedule</a>	
            <a href="/php/top-level/Tables.php" id = "Tab" >Tables</a>
            <?php if($_SESSION['logged_in']){
									echo" 
										<a href=/php/login_handles/logout.php> LOGOUT</a> 
									";}else{
										echo"<a href=/php/login_handles/login.php id = Adm > Admin Login</a>";
										}?>
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
		<a href="https://www.copyright.gov/circs/circ61.pdf">Web Copyright</a>
		</div>
		</div>
		<div>
		<button class="dropbtn">General Guidelines</button>
		<div class = "dropdown-content">
		<a id="myBtn">Don't be that guy</a>
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
		</div>
		<?php
			if($_SESSION['isadmin']){
			echo("
			<div>
			<button class=dropbtn>Update Admin</button>
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
		</div>
		");
			}
		?>
		</div>
		<div id="myModal" class="modal">
				<div class="modal-content">
				<img src="/../../photos/DontBeThatGuy.PNG"/>
				<span class="close">&times;</span>
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
		  <script src = "/../../js/topNav.js"></script>
		  <script src = "/../../js/Modal.js"></script>
		  
</body>
</html
