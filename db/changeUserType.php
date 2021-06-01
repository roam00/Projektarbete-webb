<?php

header("Location: ../adminPage.php");

include "dbUser.php";

if(isset($_POST['changeToUser-userID'])){
    ChangeToUser($_POST['changeToUser-userID']);
}

if(isset($_POST['changeToAdmin-userID'])){
    ChangeToAdmin($_POST['changeToAdmin-userID']);
}



?>
