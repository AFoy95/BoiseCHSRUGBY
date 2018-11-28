<?php
   session_start();
   ?>
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <body>
      <div id="header">
         <header>
            <title>main-page</title>
         </header>
         <head>
            <link href="/css/main.css" type="text/css" rel="stylesheet" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <head>
               <link rel="shortcut icon" href="/photos/logo.PNG" type="image/png" sizes="16x16" />
         </head>
         </head> 
         <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
         <div class="topnav">
            <a class="active" href="/php/top-level/main_page.php" id = "main" >Main-page</a>
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
		 <div id = "success_fail">
		 <?php 
			if(isset($_SESSION["success_fail"])){
				echo($_SESSION["success_fail"]);
				unset($_SESSION["success_fail"]);
			}
		 ?>
		 </div>
      </div>
      <div id="background">
      <div class ="sidenav">
         <div>
            <button class="dropbtn">What is Rugby</button>
            <div class = "dropdown-content">
               <a href="https://passport.worldrugby.org/?page=beginners&p=3">Rugby Basics</a>
            </div>
         </div>
         <div>
            <button class="dropbtn">Rugby Laws</button>
            <div class = "dropdown-content">
               <a href="https://laws.worldrugby.org/?variation=1&language=EN">Rugby Law Book</a>
            </div>
         </div>
         <div>
            <button class="dropbtn">Users Sign-up/Sign-in</button>
            <div class = "dropdown-content">
               <a>User Sign-in</a>
               <form action="/php/User_Pages/UserSign_In.php" method="post">
                  email:<br>
                  <input type="text" name="email" id="email"/><br>
                  password:<br>
                  <input type="password" name="password" id="password"/><br/>
                  <div>
                     <input type="submit" name="submit" id="login" value="Login"/>
                  </div>
               </form>
               <a href="/php/User_Pages/UserSign_Up.php" id="sign_up">User Sign-up
				
			   </a>
            </div>
         </div>
      </div>
	  <div class = "content">
	  </div>
	  </div>
      <div class="footer">
         <p> &copy; boisechsrugby.com</p>
         <p>&emsp;Admin: Austin Foy</p>
         <p>&emsp;Contact information: <a href="mailto:afoy95@live.com">
            afoy95@live.com</a>.
         </p>
      </div>
	  <script src="/../../js/success_fail.js"></script>
	  <script src = "/../../js/sideNav.js"></script>
	  <script src = "/../../js/topNav.js"></script>
   </body>
</html>