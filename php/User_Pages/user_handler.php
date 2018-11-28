<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $email = $_POST['email'];
 $password = $_POST['password'];
 $password_rep=$_POST['password-repeat'];
 $pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$";
 $cnclButton=$_POST['cancel'];
	if(!$cnclButton){
	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		if($password_rep != $password){
			$_SESSION['err']="Password verification does not match";
		header('Location: https://boisechsrugby.herokuapp.com/php/User_Pages/UserSign_Up.php');
		exit;
		}else{
			$_SESSION["success_fail"]="Created new User Account";
			$_SESSION['validated'] = 'good';
			$dao->new_user($email,hash("sha512",$password,"YwJGQafgbRdJIC2p"));
			header('Location: https://boisechsrugby.herokuapp.com/');
			exit;
		}
	}else{
		
		$_SESSION['success_fail']="Invalid email";
		$_SESSION['validated'] = 'bad';
		header('Location: https://boisechsrugby.herokuapp.com/');
		exit;
	}
	}else{
		 header("Location: https://boisechsrugby.herokuapp.com/");
			exit;
	}
?>