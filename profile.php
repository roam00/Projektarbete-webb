<?php session_start(); ?>
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


<?php
include "HTML/footer.php";
?>

</body>

</html>