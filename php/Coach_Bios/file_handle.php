<?php
require '../php_Classes/Dao.php';
session_start();
$imagePath = '';
$dao=new Dao();
$file_path=$_FILES['pic'];
$name =$file_path['name'];
	$dao->upload_File($name);
	header('Location: https://boisechsrugby.herokuapp.com/');
	exit;
?>