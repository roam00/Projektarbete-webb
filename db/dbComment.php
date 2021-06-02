<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(!(isset($_SESSION['userID']))){
    
    header('Location: login.php');
    
    die();
}


function AddReply($dateID){

    $userID = $_SESSION['userID'];
    $message = $_POST['comment'];

    date_default_timezone_set("Europe/Stockholm");
    $date = date("Y-m-d H:i:s");


    $db = new SQLite3("datebase.db");
    $sql = "INSERT INTO 'Review' ('userID', 'comment', 'date', 'dateMatchID') VALUES (:userID, :message, :date, :dateID)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':userID', $userID, SQLITE3_TEXT);
    $stmt->bindParam(':message', $message, SQLITE3_TEXT);
    $stmt->bindParam(':date', $date, SQLITE3_TEXT);
    $stmt->bindParam(':dateID', $dateID, SQLITE3_INTEGER);

    if($stmt->execute()){
        $db->close();
        return true;
    }
    else{
        $db->close();
        return false;
    }

}
