<?php
session_start();
if(!(isset($_SESSION['username']))){
    
    header('Location: login.php');
    
    die();
    echo "You have to log in to access that page";
}

?>

<!DOCTYPE HTML>
<HTML>

<HEAD>
    <LINK REL="stylesheet" TYPE="text/css" HREF="./css/style.css">
    <META CHARSET="UTF-8">
</HEAD>

<BODY>
    <?php 
include "header.php";
?>

    <FORM NAME="bored" METHOD="get" ACTION="randomizer.php">
        <FIELDSET>
            <LEGEND>Choose activity parameters:</LEGEND>
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
            <BR>
            <LABEL FOR="participants">Number of people:</LABEL>
            <SELECT ID="participants" NAME="participants">
                <OPTION VALUE="">-</OPTION>
                <OPTION VALUE="1">1</OPTION>
                <OPTION VALUE="2">2</OPTION>
                <OPTION VALUE="3">3</OPTION>
                <OPTION VALUE="4">4</OPTION>
            </SELECT>
            <BR>
            <INPUT TYPE="submit" VALUE="Skicka!">
        </FIELDSET>
    </FORM>
</BODY>

</HTML>