<?php
   include'../php_Classes/Dao.php';
   session_start();
   $dao=new Dao();
   $conn=$dao->getConnection();
   ?>
<html>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <body>
      <div id="header">
         <header>
            <title>Scores</title>
         </header>
         <head>
            <link href="/css/tables.css" type="text/css" rel="stylesheet" />
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
	  </div>
	   <div id="background">
      <div class ="sidenav">
         <div>
            <button class="dropbtn">Boys Games</button>
            <div class = "dropdown-content">
               <a href="/php/table_Scores/Varsity_Boys_regular.php">Regular Season</a>
               <a href="/php/table_Scores/Varsity_Boys_playoffs.php">Playoffs</a>
            </div>
         </div>
         <div>
            <button class="dropbtn">Girls Games</button>
            <div class = "dropdown-content">
               <a href="/php/table_Scores/Varsity_Girls_regular.php">Regular Season</a>
               <a href="/php/table_Scores/Varsity_Girls_playoffs.php">Playoffs</a>
            </div>
         </div>
         <div>
            <button class="dropbtn">Jv Boys Games</button>
            <div class = "dropdown-content">
               <a href="/php/table_Scores/JVarsity_Boys_regular.php">Regular Season</a>
               <a href="/php/table_Scores/JVarsity_Boys_playoffs.php">Playoffs</a>
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
	 	  <script src = "/../../js/sideNav.js"></script>
		  <script src = "/../../js/topNav.js"></script>
   </body>
</html>
