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

    <FORM NAME="bored" METHOD="post" ACTION="searchbored.php">
        <FIELDSET>
            <LEGEND>Search activities:</LEGEND>
            <LABEL FOR="type">Activity type:</LABEL>
            <SELECT ID="type" NAME="type">
                <OPTION VALUE="">-</OPTION>
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
            <INPUT TYPE="submit" VALUE="Send!">
        </FIELDSET>
    </FORM>
    <BR><BR>
    <FORM NAME="cocktail" METHOD="post" ACTION="searchcocktail.php">
        <FIELDSET>
            <LEGEND>Search cocktails:</LEGEND>
            <LABEL FOR="type">Activity type:</LABEL>
            <SELECT ID="type" NAME="type">
                <OPTION VALUE="">-</OPTION>
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
            <INPUT TYPE="submit" VALUE="Send!">
        </FIELDSET>
    </FORM>


<?php
include "HTML/footer.php";
?>

</body>

</html>