<?php session_start(); 
if (isset($_SESSION['username'])){
    header('Location: homepage.php');
}
?>
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
            <button class= 'button1' type = 'submit'>Log in</button>
        </form>
            <div class = 'divider'></div>
        <form action = 'register.php'>
            <button class= 'button2' type = 'submit'>Register</button>
        </form>
    </div>

    <?php
        include "HTML/footer.php";
    ?>

</body> 

</html>