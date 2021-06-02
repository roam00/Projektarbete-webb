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

    echo "<div class = 'button_box'>";
    echo    "<form action = 'randomize_activity.php'>";
    echo        "<button class= 'buttons' type = 'submit'>Randomize activity</button>";
    echo    "</form>";

    echo    "<div class = 'divider'></div>";

    echo    "<form action = 'showDataTable.php'>";
    echo        "<button class= 'buttons' type = 'submit'>Date combinations</button>";
    echo    "</form>";

    echo    "<div class = 'divider'></div>";

    echo    "<form action = 'search.php'>";
    echo        "<button class= 'buttons' type = 'submit'>Search</button>";
    echo    "</form>";

    echo    "<div class = 'divider'></div>";

    echo    "<form action = 'showDataTable.php'>";
    echo        "<button class= 'buttons' type = 'submit'>Date combinations</button>";
    echo    "</form>";
    echo "</div>";
        include "HTML/footer.php";
    ?>

</body> 

</html>