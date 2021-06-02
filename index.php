<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title> Welcome page </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
        include "HTML/header.php";
    ?>

    <div class = "title_box"> 
        <text><br>aMatch</text>  
    </div>

    <div class = "button_box">
        <form action = 'login.php'>
            <button class= 'buttons' type = 'submit'>Log in</button>
        </form>
            <div class = 'divider'></div>
        <form action = 'register.php'>
            <button class= 'buttons' type = 'submit'>Register</button>
        </form>
    </div>

    <?php
        include "HTML/footer.php";
    ?>

</body> 

</html>