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


    function latest10() {
        $db = new SQLite3("./db/database.db");
        $sql = $db->prepare("SELECT * FROM 'Bored' ORDER BY boredID DESC");
        $result = $sql->execute();
        $i = 0;
        while ($row = $result->fetchArray()) {
            if ($i < 10) {
                $sqlc = $db->prepare("SELECT * FROM 'Cocktail' WHERE cocktailID = :cocktailID");
                $sqlc->bindParam(':cocktailID', $row['boredID'], SQLITE3_TEXT);
                $resultc = $sqlc->execute();
                $rowc = $resultc->fetchArray();
                echo 'Activity: ' . $row['activity'];
                echo '<BR>';
                echo 'Type: ' . $row['type'];
                echo '<BR>';
                echo 'Participants: ' . $row['participants'];
                echo '<BR><BR>';
                echo 'Drink name: ' . $rowc['name'];
                echo '<BR>';
                echo 'Alcoholic content: ' . $rowc['alcohol'];
                echo '<BR>';
                echo 'Category: ' . $rowc['category'];
                echo '<BR>';
                echo 'Glass: ' . $rowc['glass'];
                echo '<BR>';
                echo 'Instructions: ' . $rowc['instructions'];
                echo '<BR><BR>';

                if ($rowc['ingr01']) {
                    echo $rowc['ingr01'] . ' - ' . $rowc['meas01'];
                    echo '<BR>';
                }
                if ($rowc['ingr02']) {
                    echo $rowc['ingr02'] . ' - ' . $rowc['meas02'];
                    echo '<BR>';
                }
                if ($rowc['ingr03']) {
                    echo $rowc['ingr03'] . ' - ' . $rowc['meas03'];
                    echo '<BR>';
                }
                if ($rowc['ingr04']) {
                    echo $rowc['ingr04'] . ' - ' . $rowc['meas04'];
                    echo '<BR>';
                }
                if ($rowc['ingr05']) {
                    echo $rowc['ingr05'] . ' - ' . $rowc['meas05'];
                    echo '<BR>';
                }
                if ($rowc['ingr06']) {
                    echo $rowc['ingr06'] . ' - ' . $rowc['meas06'];
                    echo '<BR>';
                }
                if ($rowc['ingr07']) {
                    echo $rowc['ingr07'] . ' - ' . $rowc['meas07'];
                    echo '<BR>';
                }
                if ($rowc['ingr08']) {
                    echo $rowc['ingr08'] . ' - ' . $rowc['meas08'];
                    echo '<BR>';
                }
                if ($rowc['ingr09']) {
                    echo $rowc['ingr09'] . ' - ' . $rowc['meas09'];
                    echo '<BR>';
                }
                if ($rowc['ingr10']) {
                    echo $rowc['ingr10'] . ' - ' . $rowc['meas10'];
                    echo '<BR>';
                }
                if ($rowc['ingr11']) {
                    echo $rowc['ingr11'] . ' - ' . $rowc['meas11'];
                    echo '<BR>';
                }
                if ($rowc['ingr12']) {
                    echo $rowc['ingr12'] . ' - ' . $rowc['meas12'];
                    echo '<BR>';
                }
                if ($rowc['ingr13']) {
                    echo $rowc['ingr13'] . ' - ' . $rowc['meas13'];
                    echo '<BR>';
                }
                if ($rowc['ingr14']) {
                    echo $rowc['ingr14'] . ' - ' . $rowc['meas14'];
                    echo '<BR>';
                }
                if ($rowc['ingr15']) {
                    echo $rowc['ingr15'] . ' - ' . $rowc['meas15'];
                    echo '<BR>';
                }

                echo '<IMG SRC="' . $rowc['imglink'] . '" WIDTH=300>';

                echo '<BR><BR><BR><BR>';

                $i++;
            }
            

        }
        
        $db->close();

    }






    function addCombinationToDatabase() {

        $dbcocktail = new SQLite3("./database.db");
        $sqlc = "INSERT INTO 'Cocktail' ('name', 'alcohol', 'category', 'glass', 'instructions', 'ingr01', 'meas01', 'ingr02', 'meas02', 'ingr03', 
        'meas03', 'ingr04', 'meas04', 'ingr05', 'meas05', 'ingr06', 'meas06', 'ingr07', 'meas07', 'ingr08', 'meas08', 'ingr09', 'meas09', 
        'ingr10', 'meas10', 'ingr11', 'meas11', 'ingr12', 'meas12', 'ingr13', 'meas13', 'ingr14', 'meas14', 'ingr15', 'meas15', 'imglink') 
        VALUES (:name, :alcohol, :category, :glass, :instructions, :ingr01, :meas01, :ingr02, :meas02, :ingr03, :meas03, :ingr04, :meas04, :ingr05, 
        :meas05, :ingr06, :meas06, :ingr07, :meas07, :ingr08, :meas08, :ingr09, :meas09, :ingr10, :meas10, :ingr11, :meas11, :ingr12, :meas12, :ingr13, 
        :meas13, :ingr14, :meas14, :ingr15, :meas15, :imglink)";
        $stmtc = $dbcocktail->prepare($sqlc);
        $stmtc->bindParam(':name', $_SESSION['strDrink'], SQLITE3_TEXT);
        $stmtc->bindParam(':alcohol', $_SESSION['strAlcoholic'], SQLITE3_TEXT);
        $stmtc->bindParam(':category', $_SESSION['strCategory'], SQLITE3_TEXT);
        $stmtc->bindParam(':glass', $_SESSION['strGlass'], SQLITE3_TEXT);
        $stmtc->bindParam(':instructions', $_SESSION['strInstructions'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr01', $_SESSION['strIngredient1'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas01', $_SESSION['strMeasure1'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr02', $_SESSION['strIngredient2'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas02', $_SESSION['strMeasure2'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr03', $_SESSION['strIngredient3'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas03', $_SESSION['strMeasure3'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr04', $_SESSION['strIngredient4'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas04', $_SESSION['strMeasure4'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr05', $_SESSION['strIngredient5'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas05', $_SESSION['strMeasure5'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr06', $_SESSION['strIngredient6'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas06', $_SESSION['strMeasure6'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr07', $_SESSION['strIngredient7'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas07', $_SESSION['strMeasure7'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr08', $_SESSION['strIngredient8'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas08', $_SESSION['strMeasure8'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr09', $_SESSION['strIngredient9'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas09', $_SESSION['strMeasure9'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr10', $_SESSION['strIngredient10'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas10', $_SESSION['strMeasure10'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr11', $_SESSION['strIngredient11'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas11', $_SESSION['strMeasure11'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr12', $_SESSION['strIngredient12'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas12', $_SESSION['strMeasure12'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr13', $_SESSION['strIngredient13'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas13', $_SESSION['strMeasure13'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr14', $_SESSION['strIngredient14'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas14', $_SESSION['strMeasure14'], SQLITE3_TEXT);
        $stmtc->bindParam(':ingr15', $_SESSION['strIngredient15'], SQLITE3_TEXT);
        $stmtc->bindParam(':meas15', $_SESSION['strMeasure15'], SQLITE3_TEXT);
        $stmtc->bindParam(':imglink', $_SESSION['strDrinkThumb'], SQLITE3_TEXT);
        
        if ($stmtc->execute()) {
            $dbcocktail->close();
        }
    
        else {
            $dbcocktail->close();
        }
        
        $dbbored = new SQLite3("./database.db");
        $sqlb = "INSERT INTO 'Bored' ('activity', 'type', 'participants') VALUES (:activity, :type, :participants)";
        $stmtb = $dbbored->prepare($sqlb);
        $stmtb->bindParam(':activity', $_SESSION['activity'], SQLITE3_TEXT);
        $stmtb->bindParam(':type', $_SESSION['type'], SQLITE3_TEXT);
        $stmtb->bindParam(':participants', $_SESSION['participants'], SQLITE3_TEXT);

        if ($stmtb->execute()) {
            $dbbored->close();
        }

        else {
            $dbbored->close();
        }

        $dbdatebored = new SQLite3("./database.db");
        $sqldatebored = "SELECT * FROM 'Bored' WHERE activity LIKE :activity";
        $stmtdatebored = $dbdatebored->prepare($sqldatebored);
        $stmtdatebored->bindParam(':activity', $_SESSION['activity'], SQLITE3_TEXT);
        $resultdatebored = $stmtdatebored->execute();

        
        

        while ($rowdatebored = $resultdatebored->fetchArray()) {
            $_SESSION['boredID'] = $rowdatebored['boredID'];


            $dbdatecocktail = new SQLite3("./database.db");
            $sqldatecocktail = "SELECT * FROM 'Cocktail' WHERE name LIKE :name";
            $stmtdatecocktail = $dbdatecocktail->prepare($sqldatecocktail);
            $stmtdatecocktail->bindParam(':name', $_SESSION['strDrink'], SQLITE3_TEXT);
            $resultdatecocktail = $stmtdatecocktail->execute();

        }
        
        while ($rowdatecocktail = $resultdatecocktail->fetchArray()) {
            echo $rowdatecocktail['cocktailID'];
            echo '<BR>';
            echo $_SESSION['boredID'];
            echo '<BR>';
            echo $_SESSION['userID'];
            echo '<BR>';
                
            $dbdate = new SQLite3("./database.db");
            $sqldate = "INSERT INTO 'Date' ('cocktailID', 'boredID', 'userID') VALUES (:cocktailID, :boredID, :userID)";
            $stmtdate = $dbdate->prepare($sqldate);
            $stmtdate->bindParam(':cocktailID', $rowdatecocktail['cocktailID'], SQLITE3_INTEGER);
            $stmtdate->bindParam(':boredID', $_SESSION['boredID'], SQLITE3_INTEGER);
            $stmtdate->bindParam(':userID', $_SESSION['userID'], SQLITE3_INTEGER);
        }
        
        if ($stmtdate->execute()) {
            $dbdate->close();
            $dbdatecocktail->close();
            $dbdatebored->close();
        }
        else {
            $dbdate->close();
            $dbdatecocktail->close();
            $dbdatebored->close();
        }
    }


    function FindUsernameByUserID($userID) {
        $db = new SQLite3("db/database.db");
        $sql = "SELECT * FROM 'User' WHERE userID = :userID";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':userID', $userID, SQLITE3_TEXT);
        $result = $stmt->execute();
    
        $row = $result->fetchArray();
    
        return $row['username'];
    }


    function ShowDataTable() {
        $db = new SQLite3("db/database.db");
        $sqldate = "SELECT Bored.activity, Bored.type, Cocktail.name, Cocktail.imglink, Date.userID, Date.dateMatchID FROM 'Date' JOIN 'Cocktail' ON Date.cocktailID = Cocktail.cocktailID JOIN 'Bored' ON Date.boredID = Bored.boredID ORDER BY Date.cocktailID DESC";
        $result = $db->query($sqldate);


        //$row = $result->fetchArray();
        
        //var_dump ($row);
        //echo "<br><br><br><br>";
        while($row = $result->fetchArray()) {
            echo "<div class='resultDiv'>";
            echo "<div class='boredDiv'>";
            echo "Activity: " . $row['activity'];
            echo "<br><br>";
            echo "Activity type: " . $row['type'];
            echo "</div>";

            echo "<div class='drinkDiv'>";
            echo "Cocktail: " . $row['name'];
            echo "<br><br>";
            echo '<IMG SRC="' . $row['imglink'] . '" WIDTH=300>';
            echo "<br><br>";
            echo "</div>";
            echo "</div>";

            echo "<form action='../writeComment.php' method='post'>";
            echo "<button name='dateID' type='submit' value=" . $row['dateMatchID'] . ">Write a comment </button> "; 
    
            
            echo "<div class='bottomDiv'>";
            echo "Created by: " . FindUsernameByUserID($row['userID']);
            
            echo "</div>";

            echo "<br><br><br><br><br><br>";
        }
    }

    function searchBored($type) {
        echo $_POST['type'];
        $db = new SQLite3("db/database.db");
        $sql = "SELECT Bored.activity, Bored.type, Cocktail.name, Cocktail.imglink, Date.userID, Date.dateMatchID FROM 'Date' JOIN 'Cocktail' ON Date.cocktailID = Cocktail.cocktailID JOIN 'Bored' ON Date.boredID = Bored.boredID WHERE Bored.type = :type ORDER BY Date.cocktailID DESC";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':type', $type, SQLITE3_TEXT);
        $result = $stmt->execute();
        
        while ($row = $result->fetchArray()) {
            echo "<div class='resultDiv'>";
            echo "<div class='boredDiv'>";
            echo "Activity: " . $row['activity'];
            echo "<br><br>";
            echo "Activity type: " . $row['type'];
            echo "</div>";

            echo "<div class='drinkDiv'>";
            echo "Cocktail: " . $row['name'];
            echo "<br><br>";
            echo '<IMG SRC="' . $row['imglink'] . '" WIDTH=300>';
            echo "<br><br>";
            echo "</div>";
            echo "</div>";

            echo "<div class='bottomDiv'>";
            echo "Created by: " . FindUsernameByUserID($row['userID']);
            
            echo "</div>";

            echo "<br><br><br><br><br><br>";
        }



    }

?>