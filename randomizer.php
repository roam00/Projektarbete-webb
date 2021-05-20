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

<button onClick="window.location.reload();">Randomize again</button>

<div class="box" id="header">
    <h1> Save this combination </h1>
    <form action="./db/dbCombination.php">
    <button type="submit"> Save the combination</button>
    </form>
</div>

</body>

</html>