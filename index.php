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
    echo $_SESSION['username'];

    echo " Login success";

    echo "<form action='logout.php'>";
    echo "<button type='submit'> logout</button>";
    echo "</form>";
}

?>

<?php

if(!isset($_SESSION['username'])){
    echo "<div class='box' id='header'>";
    echo "<h1> Register user </h1>";
    echo "<form action='register.php'>";
    echo "<button type='submit'> Register </button>";
    echo "</form>";
    echo "</div>";

    echo "<div class='box' id='header'>";
    echo "<h1> Log in </h1>";
    echo "<form action='login.php'>";
    echo "<button type='submit'> Log in</button>";
    echo "</form>";
    echo "</div>";

}
?>


<div class="box" id="header">
    <h1> Cocktail </h1>
    <form action="cocktail.php">
    <button type="submit"> Cocktail</button>
    </form>
</div>

</form>

</body>


</html>