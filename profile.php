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
        ?>

        <h1> Hi <?php echo $_SESSION['username']; ?> </h1>
        <h1> Usertype: <?php echo $_SESSION['userType']; ?> </h1>

        <?php
            if ($_SESSION['userType'] == 1) {
                echo '<FORM ID="addnews" NAME="addnews" METHOD="post" ACTION="addnews.php">
                <FIELDSET>
                <LEGEND>Add news:</LEGEND>
                <TEXTAREA NAME="comment" ID="comment" FORM="addnews" ROWS="4" COLS="50"></TEXTAREA>
                <BR>
                <INPUT TYPE="submit" VALUE="Submit">
                </FIELDSET>
                </FORM>';
            }
        ?>

    <?php
        include "HTML/footer.php";
    ?>
    </body>
</html>