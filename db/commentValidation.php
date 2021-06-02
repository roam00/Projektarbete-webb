<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(!(isset($_SESSION['userID']))){
    
    header('Location: ../login.php');
    
    die();
    }

header('Location: ../index.php');
$errors = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(0 === preg_match("/\S+/", $_POST['comment'])){
        $errors['comment'] = "Du måste skriva ett inlägg. ";
    }

    if(0 === count($errors)){
    //     if(!isset($_POST['dateID'])){
    //         include "db.php";
    //         AddComment();
    //     }
    //     else {
            include "dbComment.php";
            AddReply($_POST['dateID']);
    //     }
        
    }
    else{
        foreach($errors as $value){
            echo $value . "<br>";
        }
    }
}

?>