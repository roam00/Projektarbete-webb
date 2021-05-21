<?php
    require 'include/bored_results.php';
    require 'include/cocktail.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title> Welcome page </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="box" id="div1">
<?php getCocktail(); ?>
</div>
<div class="box" id="div2">
<?php getBored(); ?>
</div>
<br><br>

<div class="box">
    <h1> Create a new combination </h1>
    <button onClick="window.location.reload();">Create a new combination</button>
    </form>
</div>

<div class="box">
    <h1> Save combination </h1>
    <form action="./db/dbCombination.php">
    <button type="submit"> Save combination</button>
    </form>
</div>
<BR>
<?php echo $_SESSION['activity']; ?>


</body>

</html>