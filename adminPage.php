<?php

    session_start();
    if(!($_SESSION['userType'] == 1)){
        
        echo "<script>alert('You have to be an admin to access that page')</script>";
        header('Location: login.php');
        
        die();
        echo "You have to log in to access that page";
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
    <h1> Your userType: <?php echo $_SESSION['userType']; ?> </h1>

    <FORM ID="addnews" NAME="addnews" METHOD="post" ACTION="addnews.php">
                <FIELDSET>
                <LEGEND>Add news:</LEGEND>
                <TEXTAREA NAME="comment" ID="comment" FORM="addnews" ROWS="4" COLS="50"></TEXTAREA>
                <INPUT TYPE="hidden" NAME="test" VALUE="123">
                <BR>
                <INPUT TYPE="submit" VALUE="Submit">
                </FIELDSET>
                </FORM>
    
    <?php
        include "db/showUsers.php";
    ?>
</body>
</html>