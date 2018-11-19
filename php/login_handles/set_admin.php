<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $username = $_POST['username'];
 $password = $_POST['password'];
	$hash=hash("sha512",$password,"YwJGQafgbRdJIC2p");
	$dao->setAdmin(1,$username,$hash,1);
	header('Location: https://boisechsrugby.herokuapp.com/');
	exit;
	
?>