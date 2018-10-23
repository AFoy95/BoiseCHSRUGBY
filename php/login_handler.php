<?php
require_once "Dao.php";
session_start();
$dao=new Dao();
$id=$_GET["id"];


  if ($login == 'Foy' && $password == 'CHEMAN5') {
    $_SESSION['logged_in'] = true;
    header('Location: https://boisechsrugby.herokuapp.com/admin.html');
    exit;
  }
  $_SESSION['logged_in'] = false;
  $_SESSION['message'] = "Username or password invalid";
  header('https://boisechsrugby.herokuapp.com/');
  exit;
~
~
~
~
~
~
~
~
~
~
~
~
~
~
~
~
~
~
~
~
