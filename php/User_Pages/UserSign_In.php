<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $email = $_POST['email'];
 htmlentities($email);
 $password = $_POST['password'];
 htmlentities($password);
 $hash=hash("sha512",$password,"YwJGQafgbRdJIC2p");
 if(!$_SESSION['isadmin']){
	if($dao->get_User_email($email) && $dao->get_User_pass($hash) || $_SESSION['logged_in'] ){
		header('Location: https://boisechsrugby.herokuapp.com/');
		$_SESSION['isadmin']= false;
		$_SESSION['logged_in'] = true;
		setcookie(hash("sha512",$username);,hash("sha512",$password);, time() + (86400 * 30),"","",true,true, "/");
		exit;
	}
	$_SESSION['message'] = "Invalid Username and/or Password";
	$_SESSION['logged_in']=false;
	header('Location: https://boisechsrugby.herokuapp.com/');
	exit;
 }else{
	header('Location: https://boisechsrugby.herokuapp.com/');
	exit; 
 }
	
?>