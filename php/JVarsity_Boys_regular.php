<?php
	include'Dao.php';
	session_start();
	$dao=new Dao();
	$conn=$dao->getConnection();
?>
<html>
  <body>
  <div id="header">
                                
							<header><title>Scores</title></header>
  <head>
  <link href="/css/tables.css" type="text/css" rel="stylesheet" />
  </head>	
  <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
  </div>
									
							
							<div class="topnav">
								<a href="/php/main_page.php">Main-page</a>
								<a href="/php/About_Us.php">About-Us</a>
								<a href="/php/Personal_Bios.php">Personal-Bios</a>	
								<a href="/php/Schedules.php">Schedule</a>	
								<a class="active" href="/php/Tables.php">Tables</a>
								<a href="/php/login.php">Admin Login</a>
								<?php if($_SESSION['logged_in']){
											echo" 
								<a href=/php/logout.php> LOGOUT</a> 
									";}?>
							</div>
	   <div class ="sidenav">
		<div class = "dropdown">
		<button class="dropbtn">Boys Games</button>
		<div class = "dropdown-content">
		<a href="/php/Varsity_Boys_regular.php">Regular Season</a>
		<a href="/php/Varsity_Boys_playoffs.php">Playoffs</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Girls Games</button>
		<div class = "dropdown-content">
		<a href="/php/Varsity_Girls_regular.php">Regular Season</a>
		<a href="/php/Varsity_Girls_playoffs.php">Playoffs</a>
		</div>
		</div>
		<div class = "dropdown">
		<button class="dropbtn">Jv Boys Games</button>
		<div class = "dropdown-content">
		<a href="/php/JVarsity_Boys_regular.php">Regular Season</a>
		<a href="/php/JVarsity_Boys_playoffs.php">Playoffs</a>
		</div>
		</div>
		</div>
  <div id="background">
  <table>
		<h3> JV Boys Scores</h3>        
                        <tr><td>Game #</td><td>Date</td><td>Capital</td><td>Capital Score</td><td>Opponent</td><td>Opp Score</td><td>Conversion Made</td><td>Conversion Attempt</td><td>Penalties</td></tr>

          </table>
		
  <?php if($_SESSION['logged_in'] && $_SESSION['isadmin']){
					$our_score;
					$their_score;
					$penalties;
					$convmade;
					$convatt;
					$our_name;
					$their_name;
					$dates;
					echo "<div>Insert Jv Boys Stats </div>";
					 echo"
						  <form action = Tables.php method=post>
						   <br>Game number:	<input type=text name=game_number id=game_number/></br>
						  <br>Our Score:	<input type=text name=our_score id=our_score/></br>
						  <br> Their Score:	<input type=text name=their_score id=their_score/></br>
						  <br> Penalties:	<input type=text name=penalties id=penalties/> </br>
						  <br> Conversion Made:	<input type=text name=convmade id=convmade/></br>
						  <br> Conversion Attempts:	<input type=text name=convatt id=convatt/></br>
						  <br> Our Team:	<input type=text name=our_name id=our_name/></br>
						  <br> Their Team:	<input type=text name=their_name id=their_name/></br>
						  <br> date:	<input type=text name=dates id=dates/></br>
						  <br><input type=submit value=Submit /></br></form>";
						  
						 $id=$_POST['game_number']; 
						$our_score=$_POST['our_score'];
						$their_score=$_POST['their_score'];
						$penalties=$_POST['penalties'];
						$convmade=$_POST['convmade'];
						$convatt=$_POST['convatt'];
						$our_name=$_POST['our_name'];
						$their_name=$_POST['their_name'];
						$dates=$_POST['dates'];
					$dao->jv_Boys_Stats($id,$dates,$our_name,$our_score,$their_name,$their_score,$convmade,$convatt,$penalties);
				}?>
  </div>
 <div class="footer">
  <p> &copy; boisechsrugby.com</p>
  <p>&emsp;Admin: Austin Foy</p>
  <p>&emsp;Contact information: <a href="mailto:afoy95@live.com">
  afoy95@live.com</a>.</p>
</div>
</body>
</html>