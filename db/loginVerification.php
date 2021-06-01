<?php

include "dbUser.php";
session_start();


$_SESSION['username'] = $_POST['username'];

$_SESSION['userID'] = FindIdByUsername($_POST['username']);

$_SESSION['userType'] = FindUserTypeByUserId($_SESSION['userID']);

$_SESSION['email'] = FindEmailByUserId($_SESSION['userID']);

Search($_POST['username'],  $_POST['password']);

?>