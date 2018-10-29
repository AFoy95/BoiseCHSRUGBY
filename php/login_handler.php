<?php
require_once "Dao.php";
session_start();
$dao=new Dao();
$id=__GET("id");

  if ($login == 'Foy' && $password == 'CHEMAN5') {
    $_SESSION['logged_in'] = true;
    header('/html/admin.html');
    exit;
  }
  $_SESSION['logged_in'] = false;
  $_SESSION['message'] = "Username or password invalid";
  header('/php/login.php');
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
