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
					echo "<div>Insert Boys Score <\div>";
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

  
  
  
  </body>
</html>
