<!DOCTYPE html>
<html>
<head>
    <title> Welcome page </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<?php
session_start();

if(isset($_SESSION['username'])){
    echo "<div class='header'>";
    echo "<h1>";
    echo $_SESSION['username'];

    echo " Login success";
    echo "</h1>";
    echo "<form action='logout.php'>";
    echo "<button type='submit'> logout</button>";
    echo "</form>";
    echo "</div>";
}

?>

<?php

if(!isset($_SESSION['username'])){
    echo "<div class='header'>";
    echo "<h1> Register user </h1>";
    echo "<form action='register.php'>";
    echo "<button type='submit'> Register </button>";
    echo "</form>";
    echo "</div>";

    echo "<div class='header'>";
    echo "<h1> Log in </h1>";
    echo "<form action='login.php'>";
    echo "<button type='submit'> Log in</button>";
    echo "</form>";
    echo "</div>";

}
?>

</form>

</body>


</html>