<?php
 require 'Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $username = $_POST['username'];
 $password = $_POST['password'];
	if($dao->get_admin_user($username) && $dao->get_admin_pass($password) || $_SESSION['logged_in']){
		header('Location: https://boisechsrugby.herokuapp.com/');
		$_SESSION['logged_in'] = true;
		$_SESSION['isadmin']= true;
		exit;
	}
	$_SESSION['message'] = "Invalid Username and/or Password";
	$_SESSION['logged_in']=false;
	header('Location: https://boisechsrugby.herokuapp.com/php/login.php');
	exit;
	
?>
	
