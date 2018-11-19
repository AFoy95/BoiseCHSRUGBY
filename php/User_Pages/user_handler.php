<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $email = $_POST['email'];
 $password = $_POST['password'];
 $password_rep=$_POST['password-repeat'];
 $pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$";
	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		if($password_rep != $password){
			$_SESSION['err']="Password verification does not match";
		header('Location: https://boisechsrugby.herokuapp.com/php/User_Pages/UserSign_Up.php');
		exit;
		}else{
			$_SESSION["success_fail"]="Created new User Account";
			$dao->new_user($email,hash("sha512",$password,"YwJGQafgbRdJIC2p"));
			$dao->passkey="YwJGQafgbRdJIC2p";
			header('Location: https://boisechsrugby.herokuapp.com/');
			exit;
		}
	}else{
		
		$_SESSION['success_fail']="Invalid email must include an @ and .";
		header('Location: https://boisechsrugby.herokuapp.com/');
		exit;
	}
?>