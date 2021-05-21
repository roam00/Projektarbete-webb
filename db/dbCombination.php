<?

function addCombinationToDatabase() {
    $db = new SQLite3("./db/database.db");
    $sql = "INSERT INTO 'Cocktail' ('name', 'alcohol', 'category', 'glass', 'instructions', 'ingr01', 'meas01', 
    'ingr02', 'meas02', 'ingr03', 'meas03', 'ingr04', 'meas04', 'ingr05', 'meas05', 'ingr06', 'meas06', 
    'ingr07', 'meas07', 'ingr08', 'meas08', 'ingr09', 'meas09', 'ingr10', 'meas10', 'ingr11', 'meas11', 
    'ingr12', 'meas12', 'ingr13', 'meas13', 'ingr14', 'meas14', 'ingr15', 'meas15', 'imglink', 'userID') 
    VALUES (:name, :alcohol, :category, :glass, :instructions, :ingr01, :meas01, :ingr02, :meas02, :ingr03, :meas03, 
    :ingr04, :meas04, :ingr05, :meas05, :ingr06, :meas06, :ingr07, :meas07, :ingr08, :meas08, :ingr09, :meas09, 
    :ingr10, :meas10, :ingr11, :meas11, :ingr12, :meas12, :ingr13, :meas13, :ingr14, :meas14, :ingr15, :meas15, 
    :imglink, :userID)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $_SESSION['strDrink'], SQLITE3_TEXT);
    $stmt->bindParam(':alcohol', $_SESSION['strAlcoholic'], SQLITE3_TEXT);
    $stmt->bindParam(':category', $_SESSION['strCategory'], SQLITE3_TEXT);
    $stmt->bindParam(':glass', $_SESSION['strGlass'], SQLITE3_TEXT);
    $stmt->bindParam(':instructions', $_SESSION['strInstructions'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr01', $_SESSION['strIngredient1'], SQLITE3_TEXT);
    $stmt->bindParam(':meas01', $_SESSION['strMeasure1'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr02', $_SESSION['strIngredient2'], SQLITE3_TEXT);
    $stmt->bindParam(':meas02', $_SESSION['strMeasure2'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr03', $_SESSION['strIngredient3'], SQLITE3_TEXT);
    $stmt->bindParam(':meas03', $_SESSION['strMeasure3'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr04', $_SESSION['strIngredient4'], SQLITE3_TEXT);
    $stmt->bindParam(':meas04', $_SESSION['strMeasure4'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr05', $_SESSION['strIngredient5'], SQLITE3_TEXT);
    $stmt->bindParam(':meas05', $_SESSION['strMeasure5'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr06', $_SESSION['strIngredient6'], SQLITE3_TEXT);
    $stmt->bindParam(':meas06', $_SESSION['strMeasure6'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr07', $_SESSION['strIngredient7'], SQLITE3_TEXT);
    $stmt->bindParam(':meas07', $_SESSION['strMeasure7'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr08', $_SESSION['strIngredient8'], SQLITE3_TEXT);
    $stmt->bindParam(':meas08', $_SESSION['strMeasure8'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr09', $_SESSION['strIngredient9'], SQLITE3_TEXT);
    $stmt->bindParam(':meas09', $_SESSION['strMeasure9'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr10', $_SESSION['strIngredient10'], SQLITE3_TEXT);
    $stmt->bindParam(':meas10', $_SESSION['strMeasure10'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr11', $_SESSION['strIngredient11'], SQLITE3_TEXT);
    $stmt->bindParam(':meas11', $_SESSION['strMeasure11'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr12', $_SESSION['strIngredient12'], SQLITE3_TEXT);
    $stmt->bindParam(':meas12', $_SESSION['strMeasure12'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr13', $_SESSION['strIngredient13'], SQLITE3_TEXT);
    $stmt->bindParam(':meas13', $_SESSION['strMeasure13'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr14', $_SESSION['strIngredient14'], SQLITE3_TEXT);
    $stmt->bindParam(':meas14', $_SESSION['strMeasure14'], SQLITE3_TEXT);
    $stmt->bindParam(':ingr15', $_SESSION['strIngredient15'], SQLITE3_TEXT);
    $stmt->bindParam(':meas15', $_SESSION['strMeasure15'], SQLITE3_TEXT);
    $stmt->bindParam(':imglink', $_SESSION['strDrinkThumb'], SQLITE3_TEXT);
    $stmt->bindParam(':userID', $_SESSION['kek'], SQLITE3_TEXT);


    if ($stmt->execute()) {
        $db->close();
        return true;
    }

    else {
        $db->close();
        return false;
    }        
}

?>