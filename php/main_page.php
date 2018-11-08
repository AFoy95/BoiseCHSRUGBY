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
											";
									}
								
								
                        </div>
                                <div>
                                        <div id="navigation">
                                <ul>
                                <table>
                                <li><tr><td><a href="/html/About_Us.html" id="page_1">About-Us</a></td>
                                        <td><a href="/html/Personal_Bios.html"id="page_2">Personal-Bios</a></td>
                                        <td><a href="/php/Schedules.php" id="page_3">Schedule</a></td>
                                        <td><a href="/php/Tables.php" id="page_4">Tables</a></td></li></tr></ul>
                                </table>
                         </div>
                                <div>
                                        <table>
                                                <th>Table of Contents</th>
                                                <tr><td>What is Rugby?</td></tr>
                                                <tr><td>The Rules Of Rugby</td></tr>
                                        </table>
                                </div>
                        </div>
                </p>

        </body>

</html>

