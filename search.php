<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
include "HTML/header.php";
?>
<div class = 'search_box'>
    <FORM NAME="bored" METHOD="post" ACTION="searchbored.php">
        <FIELDSET>
            <LEGEND>Filter activities:</LEGEND>
            <LABEL FOR="type">Activity type:</LABEL>
            <SELECT ID="type" NAME="type">
                <OPTION VALUE="education">Education</OPTION>
                <OPTION VALUE="recreational">Recreational</OPTION>
                <OPTION VALUE="social">Social</OPTION>
                <OPTION VALUE="diy">DIY</OPTION>
                <OPTION VALUE="charity">Charity</OPTION>
                <OPTION VALUE="cooking">Cooking</OPTION>
                <OPTION VALUE="relaxation">Relaxation</OPTION>
                <OPTION VALUE="music">Music</OPTION>
                <OPTION VALUE="busywork">Busywork</OPTION>
            </SELECT>
            <button class = 'button8' TYPE="submit">Search</button>
        </FIELDSET>
    </FORM>
    <BR><BR>
    <FORM NAME="cocktail" METHOD="post" ACTION="searchcocktail.php">
        <FIELDSET>
            <LEGEND>Filter cocktails:</LEGEND>
            <LABEL FOR="category">Cocktail type:</LABEL>
            <SELECT ID="category" NAME="category">
                <OPTION VALUE="Beer">Beer</OPTION>
                <OPTION VALUE="Cocktail">Cocktail</OPTION>
                <OPTION VALUE="Coffee / Tea">Coffee / Tea</OPTION>
                <OPTION VALUE="Milk / Float / Shake">Milk / Float / Shake</OPTION>
                <OPTION VALUE="Ordinary Drink">Ordinary Drink</OPTION>
                <OPTION VALUE="Other/Unknown">Other/Unknown</OPTION>
                <OPTION VALUE="Punch / Party Drink">Punch / Party Drink</OPTION>
                <OPTION VALUE="Shot">Shot</OPTION>
                <OPTION VALUE="Soft Drink / Soda">Soft Drink / Soda</OPTION>
            </SELECT>
            <button class = 'button9' TYPE="submit">Search</button>
        </FIELDSET>
    </FORM>
</div>

<?php
include "HTML/footer.php";
?>

</body>

</html>