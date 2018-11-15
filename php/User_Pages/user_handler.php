<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $email = $_POST['email'];
 $password = $_POST['password'];
 $password_rep=$_POST['password-repeat'];
 echo($email);
 echo($password);
 
 $pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$";
	
	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		if(strlen($password) < 6 && $password_repeat != $password){
			$_SESSION['err']="Password is too short it must be at least 6 keys long and password verification does not match";
		header('Location: https://boisechsrugby.herokuapp.com/php/User_Pages/UserSign_Up.php');
		exit;
		}else{
			$dao->new_user($email,$password);
			echo"Success: new User created";
			header('Location: https://boisechsrugby.herokuapp.com/');
			exit;
		}
	}else{
		
		$_SESSION['err']="Invalid email must include an @ and .";
		header('Location: https://boisechsrugby.herokuapp.com/php/UserSign_Up.php');
		exit;
	}