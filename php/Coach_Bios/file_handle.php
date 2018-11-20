<?php
require '../php_Classes/Dao.php';
session_start();
$imagePath = '';
$dao=new Dao();
if (count($_FILES) > 0) {
  if ($_FILES["pic"]> 0) {
    throw new Exception("Error: " . $_FILES["pic"]);
	echo("error");
  } else {
    $basePath = "/Users/afoy9/CS401";
    $imagePath = "/photos/" . $_FILES["pic"];
    if (!move_uploaded_file($_FILES["pic"], $basePath . $imagePath)) {
      throw new Exception("File move failed");
	  echo("move failed");
    }
	$dao->upload_File($_FILES["pic"]);
  }
		header('Location: https://boisechsrugby.herokuapp.com/');
			session_destroy();
			session_start();
			exit;
}else{
	header('Location: https://boisechsrugby.herokuapp.com/php/top-level/Personal_Bios.php');
	exit;
}
?>