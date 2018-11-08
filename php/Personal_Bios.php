<?php
	session_start();
?>

<html>
	<header><title>Personal-Bio's</title></header>
	<head>
		<link href="/css/Personal_Bios.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">
                                <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
									<?php if($_Session['logged_in']){
											echo" 
												<a href=/php/logout.php id=logout> LOGOUT</a> 
									";}?>
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a class="active" href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a href="/php/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
								<?php if($_Session['logged_in']){
											echo" 
												<a href=/php/logout.php> LOGOUT</a> 
									";}?>
							</div>
                                </div>		
		 <div id="navigation">
			
        	<ul>
		<a id="currentpage"/>
        <li><a href="/html/coach_1.html" id="page_1">Coach 1</a>
		<a href="/html/coach_2.html"id="page_2">Coach 2</a>
                <a href="/html/coach_3.html" id="page_3">Coach 3</a>
                <a href="/html/coach_4.html" id="page_4">Coach 4</a></li>
                </ul>
                </div>

	</body>

</html>
