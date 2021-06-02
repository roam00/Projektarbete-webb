<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(!(isset($_SESSION['username']))){
    
    header('Location: ../../login.php');
    
    die();
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>Answer comment</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <!--<script defer src="js/javaComment.js"></script>
    -->
    </head>

<body>

    <?php
include "html/header.php";
?>

    <div class="formDiv" id="textDiv">

        <h2>Make a comment: </h2>
        <div id="error"></div>

        <br>
        <div class="box">
            <form id="formId" method="post" action="./db/commentValidation.php">

                <label for="comment">Comment: </label><br>
                <textarea name="comment" id="comment"></textarea><br>
                <input type="hidden" name="dateID" value= <?php echo "'" . $_POST['dateID'] . "'"?>></input>
                <button type="submit">Send</button>

            </form>

        </div>

    </div>

    

</body>

</html>