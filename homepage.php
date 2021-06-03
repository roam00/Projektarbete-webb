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
    if(isset($_SESSION['username'])){
        include "HTML/header.php";

    echo "<div class = 'button_box'>";
    echo    "<form action = 'randomize_activity.php'>";
    echo        "<button class= 'button4' type = 'submit'>Randomize activity</button>";
    echo    "</form>";

    echo    "<div class = 'divider'></div>";

    echo    "<form action = 'showDataTable.php'>";
    echo        "<button class= 'button5' type = 'submit'>Date combinations</button>";
    echo    "</form>";

    echo    "<div class = 'divider'></div>";

    echo    "<form action = 'search.php'>";
    echo        "<button class= 'button6' type = 'submit'>Search</button>";
    echo    "</form>";

    echo    "<div class = 'divider'></div>";

    echo    "<form action = 'news.php'>";
    echo        "<button class= 'button10' type = 'submit'>News</button>";
    echo    "</form>";
    echo "</div>";
        include "HTML/footer.php";
    }

    else {
        header('Location: index.php');
    }
    ?>

</body> 

</html>