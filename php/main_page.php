<?php
session_start();
?>




<html>
        <header><title>main-page</title></header>
                <head>
                        <link href="/css/main.css" type="text/css" rel="stylesheet" />
                        <head><link rel="shortcut icon" href="/photos/logo.PNG" type="image/png" sizes="16x16" /></head>
                </head>
        <body id="background">
                <p>
                        <div id="header">
                                <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
                                <a href="/php/login.php"id="admin">Admin Login</a>
									<?php if($_Session['logged_in']){
											echo" 
												<a href=/php/logout.php id=logout> LOGOUT</a> 
									";}?>
							
                                </div>		
						<div class="topnav">
						<a class="active" href="/php/main_page.php">Main-page</a>
						<a href="/html/About_Us.html">About-Us</a>
						<a href="/html/Personal_Bios.html">Personal-Bios</a>	
						<a href="/php/Schedules.php">Schedule</a>	
						<a href="/php/Tables.php">Tables</a>
						<a href="/php/login.php">Admin Login</a>
                        </div>
                               
                       <div>
                                        <table>
                                                <th>Table of Contents</th>
                                                <tr><td>What is Rugby?</td></tr>
                                                <tr><td>The Rules Of Rugby</td></tr>
                                        </table>
										
						</div>
                </p>

        </body>

</html>

