<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $email = $_POST['email'];
 $password = $_POST['password'];
 $dao->passkey=$dao->get_User_pass($email);
 echo($dao->passkey);
	if($dao->get_User_email($email) && password_verify($password,$dao->passkey) || $_SESSION['logged_in']){
		header('Location: https://boisechsrugby.herokuapp.com/');
		$_SESSION['isadmin']= false;
		$_SESSION['logged_in'] = true;
		exit;
	}
	$_SESSION['message'] = "Invalid Username and/or Password";
	$_SESSION['logged_in']=false;