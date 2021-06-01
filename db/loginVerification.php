<?php

include "dbUser.php";
session_start();

$_SESSION['userType'] = FindUserType($_POST['username']);


Search($_POST['username'],  $_POST['password']);

?>