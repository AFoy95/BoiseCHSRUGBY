<?php
   session_start();
   ?>
<html>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <body>
      <div id="header">
         <header>
            <title>Personal-Bio's</title>
         </header>
         <head>
            <link href="/css/Personal_Bios.css" type="text/css" rel="stylesheet" />
         </head>
         <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
         <div class="topnav">
            <a href="/php/top-level/main_page.php">Main-page</a>
            <a href="/php/top-level/About_Us.php">About-Us</a>
            <a class="active" href="/php/top-level/Personal_Bios.php">Personal-Bios</a>	
            <a href="/php/top-level/Schedules.php">Schedule</a>	
            <a href="/php/top-level/Tables.php">Tables</a>
            <a href="/php/login_handles/login.php">Admin Login</a>
            <?php if($_SESSION['logged_in']){
               echo" 
               <a href=/php/login_handles/logout.php> LOGOUT</a> 
               ";}?>
         </div>
      </div>
      <div id="background">
         <div class ="sidenav">
            <div>
               <button class="dropbtn">Head Coaches</button>
               <div class = "dropdown-content">
                  <a href="#">Greg Turpen</a>
                  <a href="#">Jeff Turpen</a>
                  <a href="#">Matt Jacobsen</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">Asst Coaches</button>
               <div class = "dropdown-content">
                  <a href="#">Alex Wray</a>
                  <a href="#">Austin Foy</a>
                  <a href="#">Laura Brown</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">Grad Assistant</button>
               <div class = "dropdown-content">
                  <a href="#">Jacob Hardy</a>
               </div>
            </div>
         </div>
      </div>
      <div class="footer">
         <p> &copy; boisechsrugby.com</p>
         <p>&emsp;Admin: Austin Foy</p>
         <p>&emsp;Contact information: <a href="mailto:afoy95@live.com">
            afoy95@live.com</a>.
         </p>
      </div>
	   	  <script src = "/../../js/sideNav.js"></script>
   </body>
</html>