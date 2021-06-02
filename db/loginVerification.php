<?php

include "dbUser.php";
session_start();




Search($_POST['username'],  $_POST['password']);

?>