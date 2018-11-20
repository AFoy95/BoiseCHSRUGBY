<?php
require '../php_Classes/Dao.php';
session_start();
$imagePath = '';
$dao=new Dao();
$file_path=$_POST['pic'];

$dao->upload_File($file_path);
echo($file_path);
?>