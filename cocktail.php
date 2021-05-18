<!DOCTYPE html>
<html>
<head>
    <title> Welcome page </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<div class="box" id="header" >
    <h1> Random cocktail </h1>
    <form action="https://www.thecocktaildb.com/api/json/v1/1/random.php">
    <button type="submit"> Random cocktail </button>
    </form>
</div>

<?php

    $hmaps_request = "https://www.thecocktaildb.com/api/json/v1/1/random.php";
    $json = file_get_contents($hmaps_request);
    $details = json_decode($json, TRUE);
    $arr2 = $details['drinks'];
    $arr3 = $arr2[0];
    echo '<BR>';
    echo $arr3['strDrink'];
    echo '<BR>';
    echo $arr3['strAlcoholic'];
    echo '<BR>';
    echo $arr3['strCategory'];
    echo '<BR>';
    echo $arr3['strInstructions'];
    echo '<BR>';
    echo '<BR>';

?>

</body>
</html>

