<?php
	include'Dao.php';
	session_start();
	$dao=new Dao();
	$conn=$dao->getConnection();
?>
<html>
  <header><title>Scores</title></header>
  <head>
  <link href="/css/tables.css" type="text/css" rel="stylesheet" />
  </head>
  <div id="header">
                                <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
									<?php if($_Session['logged_in']){
											echo" 
												<a href=/php/logout.php id=logout> LOGOUT</a> 
									";}?>
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a class="active" href="/php/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
							</div>
                                </div>	
  
  <body>
	  <table>
		  <h2>Boys Score</h2>
		  	<tr><td>Dates</td><td>Games</td><td>Eagles Score</td><td>Opp Score</td><td>Penalties</td><td>Conversions made</td><td>Conversion attempts</td></tr>
			<tr><td>03/14</td><td>vs Mtn. View</td><td>25</td><td>19</td>
					<td>12</td><td>0</td><td>4</td></tr>

	  </table>
				
				<?php if($_SESSION['logged_in']){
					$our_score;
					$their_score;
					$penalties;
					$convmade;
					$convatt;
					$our_name;
					$their_name;
					$dates;
					echo "<div>Insert Boys Stats </div>";
					 echo"
						  <form action = Tables.php method=post>
						  <br>Our Score:	<input type=text name=our_score id=our_score/></br>
						  <br> Their Score:	<input type=text name=their_score id=their_score/></br>
						  <br> Penalties:	<input type=text name=penalties id=penalties/> </br>
						  <br> Conversion Made:	<input type=text name=convmade id=convmade/></br>
						  <br> Conversion Attempts:	<input type=text name=convatt id=convatt/></br>
						  <br> Our Team:	<input type=text name=our_name id=our_name/></br>
						  <br> Their Team:	<input type=text name=their_name id=their_name/></br>
						  <br> date:	<input type=text name=dates id=dates/></br>
						  <br><input type=submit value=Submit /></br></form>";
						  
						  
						$our_score=$_POST['our_score'];
						$their_score=$_POST['their_score'];
						$penalties=$_POST['penalties'];
						$convmade=$_POST['convmade'];
						$convatt=$_POST['convatt'];
						$our_name=$_POST['our_name'];
						$their_name=$_POST['their_name'];
						$dates=$_POST['dates'];
					$dao->boys_Stats($our_score,$their_score,$penalties,$convmade,$convatt,$our_name,$their_name,$dates);
				}?>
		
  	
  
 <table>
		<h3> Girls Score</h3>        
                        <tr><td>Dates</td><td>Games</td>
                                <td>Eagles Score</td><td>Opp Score</td>
                                        <td>Penalties</td><td>Conversions made</td>
                                                <td>Conversion attempts</td></tr>
                        <tr><td>03/13</td><td>vs Eagle</td><td>42</td><td>17</td>
                                        <td>6</td><td>6</td><td>7</td></tr>

          </table>
		
  <?php if($_SESSION['logged_in']){
					$our_score;
					$their_score;
					$penalties;
					$convmade;
					$convatt;
					$our_name;
					$their_name;
					$dates;
					echo "<div>Insert Girls Stats </div>";
					 echo"
						  <form action = Tables.php method=post>
						  <br>Our Score:	<input type=text name=our_score id=our_score/></br>
						  <br> Their Score:	<input type=text name=their_score id=their_score/></br>
						  <br> Penalties:	<input type=text name=penalties id=penalties/> </br>
						  <br> Conversion Made:	<input type=text name=convmade id=convmade/></br>
						  <br> Conversion Attempts:	<input type=text name=convatt id=convatt/></br>
						  <br> Our Team:	<input type=text name=our_name id=our_name/></br>
						  <br> Their Team:	<input type=text name=their_name id=their_name/></br>
						  <br> date:	<input type=text name=dates id=dates/></br>
						  <br><input type=submit value=Submit /></br></form>";
						  
						  
						$our_score=$_POST['our_score'];
						$their_score=$_POST['their_score'];
						$penalties=$_POST['penalties'];
						$convmade=$_POST['convmade'];
						$convatt=$_POST['convatt'];
						$our_name=$_POST['our_name'];
						$their_name=$_POST['their_name'];
						$dates=$_POST['dates'];
					$dao->girls_Stats($our_score,$their_score,$penalties,$convmade,$convatt,$our_name,$their_name,$dates);
				}?>
  
  
  </body>
</html>
