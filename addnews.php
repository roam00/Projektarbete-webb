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

         addNews($_POST['comment']);
         echo 'News successfully added.';



        include "HTML/footer.php";
    ?>

</body> 

</html>