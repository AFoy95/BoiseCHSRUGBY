<?php
 require_once '/php/Dao.php';
 start_session();
 $dao=new Dao();
 $dao->getConnection();
 echo "hello";
?>
	
