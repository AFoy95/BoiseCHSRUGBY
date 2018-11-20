<?php
require '../php_Classes/Dao.php';
session_start();
$imagePath = '';
$dao=new Dao();

$dao->upload_File($_FILES["pic"]);
header('Location: https://boisechsrugby.herokuapp.com/');
exit;
?>