<?php require '../include/api_functions.php';
session_start();

//addCombinationToDatabase();

header("Location: ../showDataTable.php");


if(!(IsCocktailInDatabase($_SESSION['strDrink']))) {
    AddCocktailToDatabase();
}


if(!(IsBoredInDatabase($_SESSION['activity']))) {
    AddBoredToDatabase();
}


SetFindBoredID();

SetFindCocktailID();

AddDateToDatabase();


?>