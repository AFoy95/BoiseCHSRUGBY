<?php
require '../php_Classes/Dao.php';
session_start();
$imagePath = '';
$dao=new Dao();
$file_path=strval($_FILE['pic']);

$dao->upload_File($file_path);
echo($file_path);
?>