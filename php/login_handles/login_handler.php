<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $username = $_POST['username'];
 $password = $_POST['password'];
 $hash=hash("sha512",$password,"YwJGQafgbRdJIC2p");
	if($dao->get_admin_user($username) && $dao->get_admin_pass($hash) || $_SESSION['isadmin']==true){
		header('Location: https://boisechsrugby.herokuapp.com/');
		$_SESSION['isadmin']= true;
		$_SESSION['logged_in'] = true;
		setcookie($username, $password, time() + (86400 * 30), "/");
		exit;
	}
	$_SESSION['message'] = "Invalid Username and/or Password";
	$_SESSION['logged_in']=false;
	$_SESSION['isadmin']= false;
	header('Location: https://boisechsrugby.herokuapp.com/php/login_handles/login.php');
	exit;
	
?>
	
