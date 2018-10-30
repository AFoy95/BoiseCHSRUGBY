<?php
 require 'Dao.php';
 session_start();
 $dao=new Dao();
 echo "hello all";
 $conn=$dao->getConnection();
 $username = $_POST["username"];
 $password = $_POST["password"];
	//if($username == dao->get_admin_user(1) && dao->get_admin_pass(1)){
	//	header('Location: https://boisechsrugby.herokuapp.com/admin/admin.html');
	//	exit;
	//}
	//header('Location: https://boisechsrugby.herokuapp.com/php/login.php');
	//exit;
	
?>
	
