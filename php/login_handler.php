<?php
 require 'Dao.php';
 session_start();
 $dao=new Dao();
 echo "hello all";
 $conn=$dao->getConnection();
 $username = $_POST["username"];
 $password = $_POST["password"];
 $id="1";
	if($username == dao->get_admin_user($id) && dao->get_admin_pass($id)){
		header('Location: https://boisechsrugby.herokuapp.com/admin_page/admin.html');
		exit;
	}
	header('Location: https://boisechsrugby.herokuapp.com/php/login.php');
	exit;
	
?>
	
