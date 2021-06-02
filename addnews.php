<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
        include "HTML/header.php";
        include "include/api_functions.php";


    addNews($comment);



        include "HTML/footer.php";
    ?>

</body> 

</html>