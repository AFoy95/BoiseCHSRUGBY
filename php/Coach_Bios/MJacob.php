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
            <?php if($_SESSION['logged_in']){
									echo" 
										<a href=/php/login_handles/logout.php> LOGOUT</a> 
									";}else{
										echo"<a href=/php/login_handles/login.php id = Adm > Admin Login</a>";
										}?>
         </div>
		 </div>
		 <div id="background">
         <div class ="sidenav">
            <div>
               <button class="dropbtn">Head Coaches</button>
               <div class = "dropdown-content">
                  <a href="/php/Coach_Bios/GTurp.php">Greg Turpen</a>
                  <a href="/php/Coach_Bios/JTurp.php">Jeff Turpen</a>
                  <a href="/php/Coach_Bios/MJacob.php">Matt Jacobsen</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">Asst Coaches</button>
               <div class = "dropdown-content">
                  <a href="/php/Coach_Bios/AWray.php">Alex Wray</a>
                  <a href="/php/Coach_Bios/AFoy.php">Austin Foy</a>
                  <a href="/php/Coach_Bios/LFried.php">Laura Brown</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">Grad Assistant</button>
               <div class = "dropdown-content">
                  <a href="/php/Coach_Bios/JHardy.php">Jacob Hardy</a>
               </div>
            </div>
         </div>
		<div class="content">
		<?php
				if($_SESSION['isadmin']){
				echo"
				";
					
				}
			?>
		
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
		  <script src = "/../../js/drag_and_drop.js"></script>
   </body>
</html>