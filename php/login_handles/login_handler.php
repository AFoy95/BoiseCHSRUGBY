<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $username = $_POST['username'];
 $password = $_POST['password'];
	if($dao->get_admin_user($username) && $dao->get_admin_pass($password) || $_SESSION['isadmin']==true){
		header('Location: https://boisechsrugby.herokuapp.com/');
		$_SESSION['isadmin']= true;
		$_SESSION['logged_in'] = true;
		exit;
	}
	$_SESSION['message'] = "Invalid Username and/or Password";
	$_SESSION['logged_in']=false;
	$_SESSION['isadmin']= false;
	header('Location: https://boisechsrugby.herokuapp.com/login_handles/php/login.php');
	exit;
	
?>
	
