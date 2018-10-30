<?php
 require 'Dao.php';
 session_start();
 $dao=new Dao();
 echo "hello all";
 $conn=$dao->getConnection();
 $id = 1;
 $username = $_POST['username'];
 $password = $_POST['password'];
	if($username === $dao->get_admin_user($id) && $password === $dao->get_admin_pass($id)){
		header('Location: https://boisechsrugby.herokuapp.com/admin_page/admin.html');
		exit;
	}
	header('Location: https://boisechsrugby.herokuapp.com/php/login.php');
	exit;
	
?>
	
