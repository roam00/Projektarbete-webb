<?php

    function getCocktail() {

    $hmaps_request = "https://www.thecocktaildb.com/api/json/v1/1/random.php";
    $json = file_get_contents($hmaps_request);
    $details = json_decode($json, TRUE);
    $arr2 = $details['drinks'];
    $arr3 = $arr2[0];
    echo '<BR>';
    echo 'Drink name: ';
    echo $arr3['strDrink'];
    echo '<BR>';
    echo 'Alcohol or not: ';
    echo $arr3['strAlcoholic'];
    echo '<BR>';
    echo 'Drink category: ';
    echo $arr3['strCategory'];
    echo '<BR>';
    echo 'Glass type: ';
    echo $arr3['strGlass'];
    echo '<BR>';
    echo 'Instructions: ';
    echo $arr3['strInstructions'];
    echo '<BR>';
    $imglink = $arr3['strDrinkThumb'];
    echo '<BR>';
    if ($arr3['strIngredient1']) {
    echo $arr3['strIngredient1'] . ' - ' . $arr3['strMeasure1'];
    echo '<BR>';
    }
    if ($arr3['strIngredient2']) {
    echo $arr3['strIngredient2'] . ' - ' . $arr3['strMeasure2'];
    echo '<BR>';
    }
    if ($arr3['strIngredient3']) {
    echo $arr3['strIngredient3'] . ' - ' . $arr3['strMeasure3'];
    echo '<BR>';
    }
    if ($arr3['strIngredient4']) {
    echo $arr3['strIngredient4'] . ' - ' . $arr3['strMeasure4'];
    echo '<BR>';
    }
    if ($arr3['strIngredient5']) {
    echo $arr3['strIngredient5'] . ' - ' . $arr3['strMeasure5'];
    echo '<BR>';
    }
    if ($arr3['strIngredient6']) {
    echo $arr3['strIngredient6'] . ' - ' . $arr3['strMeasure6'];
    echo '<BR>';
    }
    if ($arr3['strIngredient7']) {
    echo $arr3['strIngredient7'] . ' - ' . $arr3['strMeasure7'];
    echo '<BR>';
    }
    if ($arr3['strIngredient8']) {
    echo $arr3['strIngredient8'] . ' - ' . $arr3['strMeasure8'];
    echo '<BR>';
    }
    if ($arr3['strIngredient9']) {
    echo $arr3['strIngredient9'] . ' - ' . $arr3['strMeasure9'];
    echo '<BR>';
    }
    if ($arr3['strIngredient10']) {
    echo $arr3['strIngredient10'] . ' - ' . $arr3['strMeasure10'];
    echo '<BR>';
    }
    if ($arr3['strIngredient11']) {
    echo $arr3['strIngredient11'] . ' - ' . $arr3['strMeasure11'];
    echo '<BR>';
    }
    if ($arr3['strIngredient12']) {
    echo $arr3['strIngredient12'] . ' - ' . $arr3['strMeasure12'];
    echo '<BR>';
    }
    if ($arr3['strIngredient13']) {
    echo $arr3['strIngredient13'] . ' - ' . $arr3['strMeasure13'];
    echo '<BR>';
    }
    if ($arr3['strIngredient14']) {
    echo $arr3['strIngredient14'] . ' - ' . $arr3['strMeasure14'];
    echo '<BR>';
    }
    if ($arr3['strIngredient15']) {
    echo $arr3['strIngredient15'] . ' - ' . $arr3['strMeasure15'];
    echo '<BR>';
    }
    echo '<BR>';
    echo '<IMG SRC="' . $imglink . '" WIDTH=300>';

    }
?>