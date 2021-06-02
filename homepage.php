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
    <div class = "button_box">
        <form action = 'randomize_activity.php'>
            <button class= 'buttons' type = 'submit'>Randomize activity</button>
        </form>

        <div class = 'divider'></div>

        <form action = 'showDataTable.php'>
            <button class= 'buttons' type = 'submit'>Date combinations</button>
        </form>

        <div class = 'divider'></div>

        <form action = 'search.php'>
            <button class= 'buttons' type = 'submit'>Search</button>
        </form>

        <div class = 'divider'></div>

        <form action = 'showDataTable.php'>
            <button class= 'buttons' type = 'submit'>Date combinations</button>
        </form>
    </div>

    <?php
        include "HTML/footer.php";
    ?>

</body> 

</html>