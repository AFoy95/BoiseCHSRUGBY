
<?php
   include'../../php_Classes/Dao.php';
   session_start();
   ?>
<html>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <body>
      <div id="header">
         <header>
            <title>Schedules</title>
         </header>
         <head>
            <link href="/css/Schedules.css" type="text/css" rel="stylesheet" />
         </head>
         <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
         <div class="topnav">
            <a class="active" href="/php/top-level/main_page.php" id = "main" >Main-page</a>
            <a href="/php/top-level/About_Us.php" id="Aus" >About-Us</a>
            <a href="/php/top-level/Personal_Bios.php" id ="Pb" >Personal-Bios</a>	
            <a href="/php/top-level/Schedules.php" id = "Sche" >Schedule</a>	
            <a href="/php/top-level/Tables.php" id = "Tab" >Tables</a>
            <a href="/php/login_handles/login.php" id = "Adm" >Admin Login</a>
            <?php if($_SESSION['logged_in']){
               echo" 
               <a href=/php/login_handles/logout.php> LOGOUT</a> 
               ";}?>
		 </div>
      </div>
      <div id="background">
         <div class ="sidenav">
            <div>
               <button class="dropbtn">Dates and Events</button>
               <div class = "dropdown-content">
                  <a href="/php/Dates_and_Events/Dates_Events.php">Dates and Events</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">Practice Times</button>
               <div class = "dropdown-content">
                  <a href="/php/Dates_and_Events/Practice.php">Practice</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">California Links</button>
               <div class = "dropdown-content">
                  <a href="/php/Dates_and_Events/California.php">General info</a>
                  <a href="#" download="California Trip">California Schedule</a>
               </div>
            </div>
         </div>
		 <div class ="content">
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
		  <script src = "/../../js/topNav.js"></script>
   </body>
</html>

