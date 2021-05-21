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

    $_SESSION['strDrink'] = $arr3['strDrink'];
    $_SESSION['strAlcoholic'] = $arr3['strAlcoholic'];
    $_SESSION['strCategory'] = $arr3['strCategory'];
    $_SESSION['strGlass'] = $arr3['strGlass'];
    $_SESSION['strInstructions'] = $arr3['strInstructions'];
    $_SESSION['strDrinkThumb'] = $arr3['strDrinkThumb'];
    $_SESSION['strIngredient1'] = $arr3['strIngredient1'];
    $_SESSION['strMeasure1'] = $arr3['strMeasure1'];
    $_SESSION['strIngredient2'] = $arr3['strIngredient2'];
    $_SESSION['strMeasure2'] = $arr3['strMeasure2'];
    $_SESSION['strIngredient3'] = $arr3['strIngredient3'];
    $_SESSION['strMeasure3'] = $arr3['strMeasure3'];
    $_SESSION['strIngredient4'] = $arr3['strIngredient4'];
    $_SESSION['strMeasure4'] = $arr3['strMeasure4'];
    $_SESSION['strIngredient5'] = $arr3['strIngredient5'];
    $_SESSION['strMeasure5'] = $arr3['strMeasure5'];
    $_SESSION['strIngredient6'] = $arr3['strIngredient6'];
    $_SESSION['strMeasure6'] = $arr3['strMeasure6'];
    $_SESSION['strIngredient7'] = $arr3['strIngredient7'];
    $_SESSION['strMeasure7'] = $arr3['strMeasure7'];
    $_SESSION['strIngredient8'] = $arr3['strIngredient8'];
    $_SESSION['strMeasure8'] = $arr3['strMeasure8'];
    $_SESSION['strIngredient9'] = $arr3['strIngredient9'];
    $_SESSION['strMeasure9'] = $arr3['strMeasure9'];
    $_SESSION['strIngredient10'] = $arr3['strIngredient10'];
    $_SESSION['strMeasure10'] = $arr3['strMeasure10'];
    $_SESSION['strIngredient11'] = $arr3['strIngredient11'];
    $_SESSION['strMeasure11'] = $arr3['strMeasure11'];
    $_SESSION['strIngredient12'] = $arr3['strIngredient12'];
    $_SESSION['strMeasure12'] = $arr3['strMeasure12'];
    $_SESSION['strIngredient13'] = $arr3['strIngredient13'];
    $_SESSION['strMeasure13'] = $arr3['strMeasure13'];
    $_SESSION['strIngredient14'] = $arr3['strIngredient14'];
    $_SESSION['strMeasure14'] = $arr3['strMeasure14'];
    $_SESSION['strIngredient15'] = $arr3['strIngredient15'];
    $_SESSION['strMeasure15'] = $arr3['strMeasure15'];


    }

    function getBored() {

        $finalurl = "http://www.boredapi.com/api/activity/";

        if ($_GET['type']) {
            $finalurl = $finalurl . '?type=' . $_GET['type'];
        }
        if ($_GET['participants']) {
            $finalurl = $finalurl . '?participants=' . $_GET['participants'];
        }
        $result = file_get_contents($finalurl);
        $details = json_decode($result, TRUE);
        echo 'activity: ' . $details['activity'];
        echo '<BR>';
        echo 'type: ' . $details['type'];
        echo '<BR>';
        echo 'participants: ' . $details['participants'];
        echo '<BR>';
        $_SESSION['activity'] = $details['activity'];
        $_SESSION['type'] = $details['type'];
        $_SESSION['participants'] = $details['participants'];

    }

?>