<?php
 session_start();
 require('Dao.php');
 $dao=new Dao();
 $conn=$dao->getConnection();
 echo "hello";
 header 'https://www.boisechsrugby.herokuapp.com/admin/admin.html';
 exit;
 
?>
	
