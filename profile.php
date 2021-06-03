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

        <h1> <?php echo $_SESSION['username']; ?>´s profile </h1>
        <h1> <?php if ($_SESSION['userType'] == 0){ echo 'Standard user';} else {echo 'Administrator';}; ?> </h1>

    <?php
        include "HTML/footer.php";
    ?>
    </body>
</html>