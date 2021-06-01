<?php

include "dbUser.php";
session_start();

$_SESSION['userType'] = FindUserTypeByUserId($_POST['username']);

$_SESSION['username'] = $_POST['username'];

$_SESSION['userID'] = FindIdByUsername($_POST['username']);

$_SESSION['email'] = FindEmailByUserId(FindIdByUsername($_POST['username']));

Search($_POST['username'],  $_POST['password']);

?>