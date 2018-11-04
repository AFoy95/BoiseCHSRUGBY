<?php
 require 'Dao.php';
 session_start();
 $dao=new Dao();
 echo "hello all";
 $conn=$dao->getConnection();
 $username = $_POST['username'];
 $password = $_POST['password'];
	if($dao->get_admin_user($username) && $dao->get_admin_pass($password)){
		header('Location: https://boisechsrugby.herokuapp.com/admin_page/admin.html');
		exit;
	}
	$_SESSION['message'] = "Invalid Username and/or Password";
	header('Location: https://boisechsrugby.herokuapp.com/php/login.php');
	exit;
	
?>
	
