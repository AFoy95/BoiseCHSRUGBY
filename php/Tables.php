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
  <h1>Tables</h1>
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
					 echo" Our Score: <input type=text name=our_score id=our_score/>";
					 echo" Their Score: <input type=text name=their_score id=their_score/>";
					 echo" Penalties: <input type=text name=penalties id=penalties/>";
					 echo" Conversion Made: <input type=text name=convmade id=convmade/>";
					 echo" Conversion Attempts: <input type=text name=convatt id=convatt/>";
					 echo" Our Team: <input type=text name=our_name id=our_name/>";
					 echo" Their Team: <input type=text name=their_name id=their_name/>";
					 echo" date: <input type=text name=dates id=dates/>";
					echo" <br><input type=submit value=Submit /></br>";
						//$our_score=$_POST['our_score'];
						//$their_score=$_POST['their_score'];
						//$penalties=$_POST['penalties'];
						//$convmade=$_POST['convmade'];
						//$convatt=$_POST['convatt'];
						//$our_name=$_POST['our_name'];
						//$their_name=$_POST['their_name'];
						//$dates=$_POST['dates'];
					//dao->boys_Stats($our_score,$their_score,$penalties,$convmade,$convatt,$our_name,$their_name,$dates);
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
					 echo "Our Score: <input type=text value=our_score/>";
					 echo "Their Score: <input type=text value=their_score/>";
					 echo "Penalties: <input type=text value=penalties/>";
					 echo "Conversion Made: <input type=text value=convmade/>";
					 echo "Conversion Attempts: <input type=text value=convatt/>";
					 echo "Our Team: <input type=text value=our_name/>";
					 echo "Their Team: <input type=text value=their_name/>";
					 echo "date: <input type=text value=dates/>";
					 //dao->girls_Stats($our_score,$their_score,$penalties,$convmade,$convatt,$our_name,$their_name,$dates);
				}?>
  
  
  </body>
</html>
