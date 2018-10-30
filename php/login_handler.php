<?php
 require('Dao.php');
 start_session();
 $dao=new Dao();
 $dao->getConnection();
 echo "hello";
 header 'https://www.boisechsrugby.herokuapp.com/admin/admin.html';
 exit;
 
?>
	
