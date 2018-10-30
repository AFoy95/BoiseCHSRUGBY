<?php
 include_once '/php/Dao.php';
 start_session();
 $dao=new Dao();
 $dao->getConnection();
 echo "hello";
 header 'http://www.boisechsrugby.herokuapp.com/admin/admin.html';
 exit;
 
?>
	
