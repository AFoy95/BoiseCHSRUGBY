<?php
require '../php_Classes/Dao.php';
session_start();
$imagePath = '';
$dao=new Dao();
$file_path=$_FILES['pic'];
$name =$file_path['name'];
$path = "/../../../photos/".basename($name);
if(move_uploaded_file($file_path['tmp_name'],$path)){
	$dao->upload_File($name);
	header('Location: https://boisechsrugby.herokuapp.com/');
			exit;
}else{
	echo($path);
}
?>