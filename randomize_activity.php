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
include "HTML/header.php";
?>
    <div class = 'search_box'>
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
                <INPUT TYPE="submit" VALUE="Send!">
            </FIELDSET>
        </FORM>
    </div>

    <?php 
include "HTML/footer.php";
?>
   
</BODY>

</HTML>