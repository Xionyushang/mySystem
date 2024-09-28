<?php
session_start();
//基本函數
include(dirname(__FILE__).'/./library/html.php');
include(dirname(__FILE__).'/./library/javascript.php');
include(dirname(__FILE__).'/./library/sql.php');

$now_date=date("Y/m/d");
$now_time=date("H:i:s");


$get_data=empty($_POST)?$_GET:$_POST;

$email=$_SESSION['email'];
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
$login_time=$_SESSION['login_date'];
$login_time=$_SESSION['login_time'];
?>