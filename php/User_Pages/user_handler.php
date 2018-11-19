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
		if($password_repeat != $password){
			$_SESSION['err']="Password verification does not match";
		header('Location: https://boisechsrugby.herokuapp.com/php/User_Pages/UserSign_Up.php');
		exit;
		}else{
			$dao->passkey=password_hash($password , PASSWORD_DEFAULT)
			$dao->new_user($email,$dao->passkey);
			echo"Success: new User created";
			echo($password);
			
		}
	}else{
		
		$_SESSION['err']="Invalid email must include an @ and .";
		header('Location: https://boisechsrugby.herokuapp.com/php/User_Pages/UserSign_Up.php');
		exit;
	}