<?php 
session_start(); 
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> Home </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <?php
            include "HTML/header.php";
            include "include/api_functions.php";
            displayNews();

            include "HTML/footer.php";
    ?>
    </body>
</html>